<?php get_header(); ?>

<section id="comments">
  <div class="comments_inner inner wow fadeIn" data-wow-duration="1s">
    <h2 class="section_title"><?php the_title(); ?></h2><!-- /.section_title -->
    <h3 class="section_sub_title">舞台関係者のみならず各界著名人からコメントが届いています！</h3>
    <div class="comments_img">
      <p class="comments_img_title">京都佛立ミュージアム館長 <span><br class="hidden-pc">長松清潤</span></p>
      <!-- /.comments_img_title -->
      <p class="comments_img_text">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
        まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏<br>の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
      <!-- /.comments_img_text -->
    </div><!-- /.comments_img -->
    <div class="comments_wrapper">
      <?php
        $commentsGroup = SCF::get('comments');
        foreach ($commentsGroup as $fields) { ?>
          <div class="comments_box wow fadeIn" data-wow-duration="1s">
          <h4 class="comments_box_name"><?php echo $fields['comment_name']; ?></h4><!-- /.comments_box_name -->
          <h5 class="comments_box_position"><?php echo $fields['comment_position']; ?></h5><!-- /.comment_position -->
          <p class="comments_box_text"><?php echo nl2br($fields['comment_text']); ?></p>
        </div><!-- /.comments_box -->
        <?php } ?>
    </div><!-- /.comments_wrapper -->
  </div><!-- /.comments_inner -->
</section><!-- /.comments -->

<?php get_footer(); ?>