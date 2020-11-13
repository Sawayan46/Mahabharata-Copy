<?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5,
        );
        $the_query = new WP_Query($args);
        ?>

        <div class="news_items">

            <?php if ($the_query->have_posts()) : ?>
                <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <article class="news_item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="news_item_inner">
                                <div class="news_item_img">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail();
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
                            </div><!-- /.news_item_inner -->
                        </a>
                    </article><!-- /.news_items -->

                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div><!-- /.news_items -->
