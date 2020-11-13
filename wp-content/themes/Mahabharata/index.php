<?php get_header(); ?>

<section id="news">
    <div class="news_inner inner wow fadeIn" data-wow-duration="1s">

        <?php
        $news_obj = get_page_by_path('news');
        ?>
        <h2 class="section_title"><?php echo $news_obj->post_title; ?></h2>

        <?php get_template_part('template-parts/news-loop'); ?>

    </div><!-- /.news_inner -->
</section><!-- /.news -->

<?php get_footer(); ?>