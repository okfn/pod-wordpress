<div class="slide <? echo ${'banner_colour_' . $slide_number}; ?>" style="background-image:url(<? echo ${'banner_bg_'. $slide_number}[0]; ?>)">
  <div class="menu-bg"></div>
  <div class="row">
    <? if (${'banner_img_'. $slide_number}) { ?>
    <div class="large-4 columns image hide">
      <img src="<? echo ${'banner_img_'. $slide_number}[0]; ?>"/>
    </div>
    <div class="large-8 text columns">
    <? } else { ?>
    <div class="large-12 text columns">
    <? } ?>
      <? if( ${'banner_title_'. $slide_number} ) { ?>
        <h2><? echo ${'banner_title_'. $slide_number}; ?></h2>
      <?  } ?>
      <div>
        <? echo ${'banner_text_'. $slide_number}; ?>
      </div>
      <? if( ${'banner_link_'. $slide_number} ) { ?>
        <a class="small button <? echo ${'banner_btn_'. $slide_number}; ?>" href="<? echo ${'banner_link_'. $slide_number}; ?>">Read More</a>
      <?  } ?>
    </div>
  </div>
</div>