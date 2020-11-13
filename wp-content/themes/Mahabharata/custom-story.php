<?php

/**
 * Template Name: STORYページ
 */
?>


<?php get_header(); ?>

<?php
$imgGroup = SCF::get('story_images');
foreach ($imgGroup as $fields) {
  $img = wp_get_attachment_image_src($fields['story'], 'full');
  $imgUrl = esc_url($img[0]);
?>
  <div class="story_fields">
    <!-- <img src="<?php// echo $imgUrl; ?>"> -->
    <div class="story_fields_img" style="background-image:url(<?php echo $imgUrl; ?>);">
      <div class="story_fields_inner inner wow fadeIn" data-wow-duration="2s">
        <p class="story_fields_text"><?php echo nl2br($fields['story_text']); ?></p>
      </div>
    </div>
  </div><!-- /.story_fields -->
  <?php }
  ?>


  <?php get_footer(); ?>