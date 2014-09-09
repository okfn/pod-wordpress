<?php
function FoundationPress_theme_support() {
    // Add language support
    load_theme_textdomain('FoundationPress', get_template_directory() . '/languages');

    // Add menu support
    add_theme_support('menus');

    // Add post thumbnail support: http://codex.wordpress.org/Post_Thumbnails
    add_theme_support('post-thumbnails');
    // set_post_thumbnail_size(150, 150, false);

    // rss thingy
    add_theme_support('automatic-feed-links');

    // Add post formarts support: http://codex.wordpress.org/Post_Formats
    add_theme_support('post-formats', array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat'));

}

add_action('after_setup_theme', 'FoundationPress_theme_support'); 


// Required plugins notices
function showAdminMessages()
{
	$plugin_messages = array();
  
  $plugin_errors = array();

	include_once( ABSPATH . 'wp-admin/includes/plugin.php' );

	// Twitter
	if(!is_plugin_active( 'jm-last-twit-shortcode/jm-ltsc.php' ))
	{
		$plugin_messages[] = 'This theme requires the <a href="plugins.php?s=JM+Last+Twit+Shortcode">JM Last Twit Shortcode</a> to display Twitter feed.';
	}
  
  // Lanyrd
	if(!is_plugin_active( 'lanyrd-splat-widget/lanyrd_splat.php' ))
	{
		$plugin_messages[] = 'This theme requires the <a href="plugins.php?s=Lanyrd+Splat+Widget">Lanyrd Splat Widget</a> to display the events.';
	}

	// Advanced Custom Fields
	if(!is_plugin_active( 'advanced-custom-fields/acf.php' ))
	{
		$plugin_errors[] = 'This theme requires the <a href="plugins.php?s=Advanced+Custom+Fields">Advanced Custom Fields</a> plugin.';
	}
  
  if ( current_user_can( 'install_plugins' ) ) {

    if(count($plugin_messages) > 0)
    {
      echo '<div class="update-nag">';
  
        foreach($plugin_messages as $message)
        {
          echo '<p>'.$message.'</p>';
        }
  
      echo '</div>';
    }
    if(count($plugin_errors) > 0)
    {
      echo '<div class="error">';
  
        foreach($plugin_errors as $error)
        {
          echo '<p>'.$error.'</p>';
        }
  
      echo '</div>';
    }
  }
}

add_action('admin_notices', 'showAdminMessages');
?>