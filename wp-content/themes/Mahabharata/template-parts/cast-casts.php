<!-- キャストのメイン3人を表示 3人以上投稿があっても表示しない -->

<?php
$count = 0;
$page = get_page_by_path('casts');
$castsGroup = SCF::get('casts', $page->ID);
foreach ($castsGroup as $fields) {
  if ($count >= 3) {
    break;
  }
  $count++;
  $img = wp_get_attachment_image_src($fields['cast_img'], 'medium');
  $imgUrl = esc_url($img[0]);
?>
  <div class="cast_item">
    <div class="cast_img">
      <img src="<?php echo $imgUrl; ?>" alt="">
    </div><!-- /.cast_img -->
    <div class="cast_texts">
      <p class="cast_info"><?php echo  $fields['cast_info']; ?></p><!-- /.cast_info -->
      <p class="cast_name"><?php echo $fields['cast_name']; ?></p><!-- /.cast_name -->
      <?php if (!empty($fields['cast_position'])) : ?>
        <p class="cast_position"><?php echo $fields['cast_position']; ?></p><!-- /.cast_position -->
      <?php else : ?>
        <p class="cast_position"><?php echo ''; ?></p><!-- /.cast_position -->
      <?php endif; ?>
      <p class="cast_text"><?php echo nl2br($fields['cast_text']); ?></p><!-- /.cast_text -->
    </div><!-- /.cast_texts -->
  </div><!-- cast_item -->
<?php } ?>