<?php get_header(); ?>

<section id="news">
    <div class="news_inner inner">
        <?php $title = get_page_by_path('news'); ?>
        <h2 class="section_title"><?php echo $title->post_title; ?></h2>
        <div class="news_items">
            <?php
            $classes = array('news_item', 'single');
            ?>
            <article <?php post_class($classes); ?>>

                <div class="news_item_inner">
                    <div class="news_item_img">
                        <?php if (has_post_thumbnail()) {
                            the_post_thumbnail('full');
                        } else {
                            echo '<img src=" ' . get_template_directory_uri() . '/img/noimg.png.tmp.png" />';
                        }
                        ?>
                    </div>
                    <div class="news_text">
                        <time class="news_item_published" datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                        <!-- /.news_item_published -->
                        <h3 class="news_item_title"><?php the_title(); ?></h3><!-- /.news_item_title -->
                    </div><!-- /.news_text -->
                    <div class="news_content">
                        <?php the_content(); ?>
                    </div><!-- /.news_content -->
                </div><!-- /.news_item_inner -->

            </article><!-- /.news_items -->
        </div><!-- /.news_items -->

        <!-- ページネーション -->
        <!-- 参考URL : https://hirashimatakumi.com/blog/3764.html -->
        <?php
        $prev_post = get_previous_post();
        $next_post = get_next_post();
        // var_dump($prev_post);
        if ($prev_post || $next_post) :
        ?>
            <div class="pagination">
                <?php if ($prev_post) : ?>
                    <a class="post_link prev_link" href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>">
                        <i class="fas fa-chevron-circle-left fa-2x"></i>
                        <div class="post_link_text">
                            <time class="prev"><?php echo get_the_date('Y.n.j', $prev_post->ID); ?></time>
                            <p><?php echo $prev_post->post_title; ?></p>
                        </div><!-- /.prev_link_text -->
                    </a><!-- /.prev_link -->
                <?php endif; ?>
                <?php if ($next_post) : ?>
                    <a class="post_link next_link" href="<?php echo esc_url(get_permalink($next_post->ID)); ?>">
                        <div class="post_link_text">
                            <time class="next"><?php echo get_the_date('Y.n.j', $next_post->ID); ?></time>
                            <p><?php echo $next_post->post_title; ?></p>
                        </div><!-- /.next_link_text -->
                        <i class="fas fa-chevron-circle-right fa-2x"></i>
                    </a><!-- /.next_link -->
                <?php endif; ?>
            </div><!-- /.pagination -->
        <?php endif; ?>
    </div><!-- /.news_inner -->
</section><!-- /.news -->

<?php get_footer(); ?>