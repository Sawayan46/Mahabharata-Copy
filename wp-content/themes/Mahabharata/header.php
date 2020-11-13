<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">

    <?php wp_head(); ?>
</head>

<body <?php body_class(['drawer', 'drawer--right']); ?>>

    <header id="header">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'global',
                'container' => 'nav',
                'container_class' => 'header_nav hidden-sp',
                // 'link_before' => '<div>',
                // 'link_after' => '</div>',
                'items_wrap' => '<ul>%3$s</ul>',
            )
        );
        ?>

        <!-- ドロワーメニュー -->
        <!-- ハンバーガーボタン -->
        <button type="button" class="drawer-toggle drawer-hamburger">
            <span class="sr-only">toggle navigation</span>
            <span class="drawer-hamburger-icon"></span>
            <!-- <i class="fa fa-bars" aria-hidden="true"></i> -->
        </button>
        <!-- ナビゲーションの中身 -->
        <nav class="drawer-nav header_nav" role="navigation">
            <!-- メニューの読み込み -->
            <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'drawer',
                    'container' => false,
                    'menu_class' => 'drawer-menu',
                )
            );
            ?>
        </nav>


        <?php if (is_front_page()) : ?>
            <section id="top">
                <div class="top_container">
                    <h1 class="top_title"><img src="<?php echo get_template_directory_uri(); ?>/img/Hero-title@2x.png" alt="完全版マハーバーラタ"></h1>
                    <div class="top_info">
                        <div class="top_left">
                            <p><img src="<?php echo get_template_directory_uri(); ?>/img/Hero-text@2x.png" alt="2020年7月4日~7日 なかのZERO大ホール"></p>
                        </div><!-- /.top_left -->
                        <div class="top_right">
                            小池博史ブリッジプロジェクトが2013年から2020年までの8カ年計画で臨む、インド古代叙事詩「マハーバーラタ」の全編舞台作品化計画。いよいよその集大成である完全版マハーバーラタの公演が決定！！<br>
                            アジア各国のアーティストらが共同で取り組み、発展を遂げる本事業はアジア、そして世界へ向けてビッグウェーブを起こす。タイと日本から世界へと発信する本作。どうぞお見逃しなく！
                        </div><!-- /.top_right -->
                    </div><!-- /.top_info -->
                    <?php get_template_part('template-parts/reserve-btn-top'); ?>
                </div><!-- /.top_container -->
            </section><!-- /.top -->

        <?php elseif (is_page_template('custom-story.php')) : ?>
            <section id="story-top">
                <div class="cat_top_inner">
                    <div class="cat_top_box">
                        <h1 class="cat_top_title"><img src="<?php echo get_template_directory_uri(); ?>/img/Hero-title@2x.png" alt="完全版マハーバーラタ"></h1>
                        <div class="cat_top_info">
                            <div class="cat_top_left">
                                <p><img src="<?php echo get_template_directory_uri(); ?>/img/Hero-text@2x.png" alt="2020年7月4日~7日 なかのZERO大ホール"></p>
                            </div><!-- /.top_left -->
                        </div><!-- /.top_info -->
                    </div><!-- /.top_box -->
                    <?php get_template_part('template-parts/reserve-btn-not-top'); ?>
                    <div class="story_breadcrumbs">
                        <?php get_template_part('template-parts/bread-crumb'); ?>
                    </div><!-- /.breadcrumbs -->
                    <h2 class="story_title"><?php the_title(); ?></h2>
                    <div class="story_top_text wow fadeIn" data-wow-duration="1s">
                        <?php
                        $text = SCF::get('story-top-text'); ?>
                        <p>
                            <?php echo nl2br($text);
                            ?>
                        </p>
                    </div><!-- /.story_top_text -->
                </div><!-- /.top_inner -->
            </section><!-- /.top -->

        <?php else : ?>
            <section id="top">
                <div class="cat_top_inner">
                    <div class="cat_top_box">
                        <h1 class="cat_top_title"><img src="<?php echo get_template_directory_uri(); ?>/img/Hero-title@2x.png" alt="完全版マハーバーラタ"></h1>
                        <div class="cat_top_info">
                            <div class="cat_top_left">
                                <p><img src="<?php echo get_template_directory_uri(); ?>/img/Hero-text@2x.png" alt="2020年7月4日~7日 なかのZERO大ホール"></p>
                            </div><!-- /.top_left -->
                        </div><!-- /.top_info -->
                    </div><!-- /.top_box -->
                    <?php get_template_part('template-parts/reserve-btn-not-top'); ?>
                </div><!-- /.top_inner -->
            </section><!-- /.top -->
            <div class="cat_breadcrumbs inner">
                <?php get_template_part('template-parts/bread-crumb'); ?>
            </div><!-- /.breadcrumbs -->
        <?php endif; ?>

    </header><!-- /.header -->