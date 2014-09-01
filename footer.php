</section>

<? if( function_exists('jm_ltsc_output') ) { ?>
<section class="twitter"> 
  <? echo jm_ltsc_output( array('count' => 5, 'include_rts' => false, 'exclude_replies' => true) ) ; ?>
</section>
<? } ?>

<footer>
  <div class="row">
    <?php do_action('foundationPress_before_footer'); ?>
    <?php dynamic_sidebar("footer-widgets"); ?>
    <?php do_action('foundationPress_after_footer'); ?>
  </div>
</footer>
<?php do_action('okf_footer'); ?>

<a class="exit-off-canvas"></a>

	<?php do_action('foundationPress_layout_end'); ?>
	</div>
</div>
<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
<? if ( is_page_template('hero.php') ) { ?>
  <script>
    $(document).ready(function(){
      $('#homepage-hero').slick({
        autoplay: true,
        autoplaySpeed: 10000,
        dots: true,
        arrows: false,
      });
    });
  </script>
<? } 
 
include_once( ABSPATH . 'wp-admin/includes/plugin.php' );
if (( is_page_template('hero.php') ) and ( is_plugin_active( 'lanyrd-splat-widget/lanyrd_splat.php' ) ) ) { ?>
  <script>
    if (matchMedia(Foundation.media_queries['medium']).matches){
      window.onload = function(){
        $('.lanyrd-listing').slick({
          infinite: true,
          slidesToShow: 3,
          slidesToScroll: 3,
          slide: 'li',
        });
      }
    };
  </script>
<? }

if (( is_plugin_active( 'jm-last-twit-shortcode/jm-ltsc.php' ) ) ) { ?>
  <script>
    $(document).ready(function(){
      $('.twitter .ttm-container').slick({
        infinite: true,
        slide: 'li',
        autoplay: true,
        autoplaySpeed: 15000,
        arrows: false,
      });
    });
  </script>
<? } ?>
</body>
</html>
