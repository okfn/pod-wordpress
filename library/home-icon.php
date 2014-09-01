<? $icon_image = wp_get_attachment_image_src(get_field('icon_image_'.$icon_number), 'full' ); ?>
<a href="<? echo get_field( "icon_link_". $icon_number ); ?>">
  <img src="<? echo $icon_image[0]; ?>" alt="">
  <div class="text">
    <h3><? echo get_field( "icon_heading_". $icon_number ); ?></h3>
    <p><? echo get_field( "icon_text_". $icon_number ); ?></p>
  </div>
</a>