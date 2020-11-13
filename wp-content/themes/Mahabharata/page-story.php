<?php get_header(); ?>

<?php
$imgGroup = SCF::get('story_images');
foreach ($imgGroup as $fields) {
  $img = wp_get_attachment_image_src($fields['story'], 'full');
  $imgUrl = esc_url($img[0]);
?>
  <img src="<?php echo $imgUrl; ?>">
  <p><?php echo nl2br($fields['story_text']); ?></p>
<?php }
?>


<?php get_footer(); ?>