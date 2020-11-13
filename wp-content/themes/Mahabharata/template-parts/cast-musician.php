<?php
        $musicianGroup = SCF::get('musician');
        foreach ($musicianGroup as $fields) {
          $img = wp_get_attachment_image_src($fields['musician_img'], 'medium');
          $imgUrl = esc_url($img[0]);
        ?>
          <div class="cast_sub_item wow fadeIn" data-wow-duration="1s">
            <div class="cast_sub_img">
              <img src="<?php echo $imgUrl; ?>" alt="">
            </div><!-- /.cast_sub_img -->
            <div class="cast_sub_texts">
              <div class="cast_sub_nationality"><?php echo $fields['musician_nationality']; ?></div><!-- /.cast_sub_nationality -->
              <div class="cast_sub_name"><?php echo $fields['musician_name']; ?></div><!-- /.cast_sub_name -->
              <div class="cast_sub_position"><?php echo $fields['musician_position']; ?></div><!-- /.cast_sub_position -->
              <div class="cast_sub_text"><?php echo nl2br($fields['musician_text']); ?></div><!-- /.cast_sub_text -->
            </div><!-- /.cast_sub_texts -->
          </div><!-- /.cast_sub_item -->

        <?php } ?>
