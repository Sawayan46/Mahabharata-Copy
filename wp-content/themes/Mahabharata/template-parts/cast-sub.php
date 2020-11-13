<!-- キャストの4人目以降を表示 3人目まではスキップ -->

<?php
$count = 0;
$castsGroup = SCF::get('casts');
foreach ($castsGroup as $fields) {
  $count++;
  if ($count <= 3) {
    continue;
  }
  $img = wp_get_attachment_image_src($fields['cast_img'], 'medium');
  $imgUrl = esc_url($img[0]);
?>
  <div class="cast_sub_item wow fadeIn" data-wow-duration="2s">
    <div class="cast_sub_img">
      <img src="<?php echo $imgUrl; ?>" alt="">
    </div><!-- /.cast_sub_img -->
    <div class="cast_sub_texts">
      <p class="cast_sub_info"><?php echo  $fields['cast_info']; ?></p><!-- /.cast_info -->
      <div class="cast_sub_name"><?php echo $fields['cast_name']; ?></div><!-- /.cast_sub_name -->
      <div class="cast_sub_position"><?php echo $fields['cast_position']; ?></div><!-- /.cast_sub_position -->
      <div class="cast_sub_text"><?php echo nl2br($fields['cast_text']); ?></div><!-- /.cast_sub_text -->
    </div><!-- /.cast_sub_texts -->
  </div><!-- /.cast_sub_item -->
<?php } ?>