<?php get_header(); ?>

<main class="main">
  <h2 class="section_title">INQUIRY</h2>
  <div class="inner">
    <div class="confirm_inner">
    <?php the_content(); ?>
      <p>お問い合わせありがとうございました。</p>
      <p>メッセージは正常に送信されました。</p>
    </div><!-- /.confirm_inner -->
  </div><!-- /.inner -->

  <section id="news">
    <div class="news_inner inner">
      <h2 class="section_title">LATEST NEWS</h2>

  <?php get_template_part('template-parts/news-loop'); ?>

      <div class="news_btn"><a class="btn_reserve" href="<?php echo esc_url(home_url('news')); ?>">ニュース一覧へ</a></div><!-- /.news_btn -->
    </div><!-- /.news_inner -->
  </section><!-- /.news -->
</main>

<?php get_footer(); ?>