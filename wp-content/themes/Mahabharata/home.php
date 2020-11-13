<?php get_header(); ?>

<section id="pg-cat">
    <div class="news_inner inner wow fadeIn" data-wow-duration="1s">
        <h2 class="section_title"><?php single_post_title(); ?></h2>
        <div class="news_items">

            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <article <?php post_class('news_item'); ?>>
                        <a href="<?php the_permalink(); ?>">
                            <div class="news_item_inner">
                                <div class="news_item_img">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail();
                                    } else {
                                        echo '<img src=" ' . esc_url(get_template_directory_uri()) . '/img/noimg.png.tmp.png" />';
                                    }
                                    ?>
                                </div>
                                <div class="news_text">
                                    <time class="news_item_published" datetime="<?php the_time('Y/m/d'); ?>"><?php the_time('Y.m.d'); ?></time>
                                    <!-- /.news_item_published -->
                                    <h3 class="news_item_title"><?php the_title(); ?></h3><!-- /.news_item_title -->
                                </div><!-- /.news_text -->
                            </div><!-- /.news_item_inner -->
                        </a>
                    </article><!-- /.news_items -->
            <?php endwhile;
            endif; ?>
        </div><!-- /.news_items -->
        <?php wp_pagenavi(); ?>
    </div><!-- /.news_inner -->

    
</section><!-- /.news -->


<?php get_footer(); ?>