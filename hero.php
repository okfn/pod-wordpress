<?php
/*
Template Name: Home
*/
get_header();

$banner_bg_1 = wp_get_attachment_image_src(get_field('home_background_1'), 'full' );
$banner_img_1 = wp_get_attachment_image_src(get_field('home_image_1'), 'full' );
$banner_text_1 = get_field( "home_text_1" );
$banner_title_1 = get_field( "home_title_1" );
$banner_link_1 = get_field( "home_link_1" );
$banner_colour_1 = get_field( "home_colour_1" );
if ($banner_colour_1 == 'orange') {
  $banner_btn_1 = 'secondary'; 
}
elseif ($banner_colour_1 == 'red') {
  $banner_btn_1 = 'alert'; 
}
elseif ($banner_colour_1 == 'green') {
  $banner_btn_1 = 'success'; 
}

$banner_bg_2 = wp_get_attachment_image_src(get_field('home_background_2'), 'full' );
$banner_img_2 = wp_get_attachment_image_src(get_field('home_image_2'), 'full' );
$banner_text_2 = get_field( "home_text_2" );
$banner_title_2 = get_field( "home_title_2" );
$banner_link_2 = get_field( "home_link_2" );
$banner_colour_2 = get_field( "home_colour_2" );
if ($banner_colour_2 == 'orange') {
  $banner_btn_2 = 'secondary'; 
}
elseif ($banner_colour_2 == 'red') {
  $banner_btn_2 = 'alert'; 
}
elseif ($banner_colour_2 == 'green') {
  $banner_btn_2 = 'success'; 
}

$banner_bg_3 = wp_get_attachment_image_src(get_field('home_background_3'), 'full' );
$banner_img_3 = wp_get_attachment_image_src(get_field('home_image_3'), 'full' );
$banner_text_3 = get_field( "home_text_3" );
$banner_title_3 = get_field( "home_title_3" );
$banner_link_3 = get_field( "home_link_3" );
$banner_colour_3 = get_field( "home_colour_3" );
if ($banner_colour_3 == 'orange') {
  $banner_btn_3 = 'secondary'; 
}
elseif ($banner_colour_3 == 'red') {
  $banner_btn_3 = 'alert'; 
}
elseif ($banner_colour_3 == 'green') {
  $banner_btn_3 = 'success'; 
}

$banner_bg_4 = wp_get_attachment_image_src(get_field('home_background_4'), 'full' );
$banner_img_4 = wp_get_attachment_image_src(get_field('home_image_4'), 'full' );
$banner_text_4 = get_field( "home_text_4" );
$banner_title_4 = get_field( "home_title_4" );
$banner_link_4 = get_field( "home_link_4" );
$banner_colour_4 = get_field( "home_colour_4" );
if ($banner_colour_4 == 'orange') {
  $banner_btn_4 = 'secondary'; 
}
elseif ($banner_colour_4 == 'red') {
  $banner_btn_4 = 'alert'; 
}
elseif ($banner_colour_4 == 'green') {
  $banner_btn_4 = 'success'; 
}

?>

<header id="homepage-hero" role="banner">
  <?  
  if( ($banner_text_1) or ($banner_bg_1) ) {
    $slide_number = '1';
    include ('library/slide.php'); 
  }
  if( ($banner_text_2) or ($banner_bg_2) ) {
    $slide_number = '2';
    include ('library/slide.php');
  }
  if( ($banner_text_3) or ($banner_bg_3) ) {
    $slide_number = '3';
    include ('library/slide.php');
  }
  if( ($banner_text_4) or ($banner_bg_4) ) {
    $slide_number = '4';
    include ('library/slide.php');
  }
  ?>
</header>

<form class="mailing-list">
  <!-- mailing list -->
</form>

<div class="row">
  <div class="small-12 columns" role="main">

  <?php do_action('foundationPress_before_content'); ?>
  
    <ul class="home-icons small-block-grid-1 medium-block-grid-2 large-block-grid-3">
      <li><? $icon_number = '1'; include ('library/home-icon.php'); ?></li>
      <li><? $icon_number = '2'; include ('library/home-icon.php'); ?></li>
      <li><? $icon_number = '3'; include ('library/home-icon.php'); ?></li>
      <li><? $icon_number = '4'; include ('library/home-icon.php'); ?></li>
      <li><? $icon_number = '5'; include ('library/home-icon.php'); ?></li>
      <li><? $icon_number = '6'; include ('library/home-icon.php'); ?></li>
    </ul>

  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
      <?php //the_title(); ?>
      <?php do_action('foundationPress_page_before_entry_content'); ?>
      <?php //the_content(); ?>
      <?php do_action('foundationPress_page_before_comments'); ?>
      <?php //comments_template(); ?>
      <?php do_action('foundationPress_page_after_comments'); ?>
    </article>
  <?php endwhile;?>

  <?php do_action('foundationPress_after_content'); ?>

  </div>

	
</div>

<?php if ( is_active_sidebar( 'home-widgets' ) ) : ?>
  <section class="dark home-widgets">
    <?php //get_sidebar(); ?>
    <?php dynamic_sidebar( 'home-widgets' ); ?>
  </section>
<?php endif; ?>

<?php get_footer(); ?>
