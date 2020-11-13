<?php get_header(); ?>

<section id="introduction">
    <div class="inner">
        <div class="introduction_inner wow fadeIn" data-wow-duration="1s">
            <img src="<?php echo get_template_directory_uri() ;?>/img/introduction-image.jpg" alt="">
            <h2 class="section_title">INTRODUCTION</h2>
            <h3 class="introduction_sub_title">なぜ今「マハーバーラタ」なのか？</h3>
            <div class="introduction_items">
                <p class="introduction_left">
                    「平和」について改めて考えるストーリー全世界を司るものが神だとすれば、なぜ神であるクリシュナは、策を巡らしてまで、登場人物すべてを滅亡へと導いたのか？<br>
                    それは、「戦い」そのものを廃絶しようとしたからだと考えられる。戦うことそのものへの虚しさ、「戦い」そのものの「悪」を問う物語が「マハーバーラタ」と言える。
                    平和とは？私たちには何ができるのか？根源的な「平和」を希求する物語。
                </p><!-- /.introduction_left -->
                <p class="introduction_right">
                    現代社会を映し出す人間ドラマ対難民問題やヘイトスピーチ問題に見られるように、文化的背景が「異」なるものに対して非寛容になりつつある現代社会。<br>
                    神の血を引きながらも、現代人同様に欲望や嫉妬によって争う登場人物たちが破滅していく様を描いた「マハーバーラタ」のストーリーは、人類が歩んできた争いの歴史の物語とも言い換えられる。<br>
                    非寛容による悲劇の物語である「マハーバーラタ」を現代社会に重ね合わせつつ描くことで「寛容」の重要性を示す。
                </p><!-- /.introduction_right -->
            </div><!-- /.introduction_items -->
        </div><!-- /.introduction_inner -->
    </div><!-- /.inner -->
</section><!-- /.introduction -->

<section class="youtube inner wow fadeIn" data-wow-duration="1s">
    <?php if (SCF::get('youtube')) : ?>
        <div class="iframe_wrapper">
            <?php echo wp_oembed_get(SCF::get('youtube')); ?>
        </div>
    <?php endif; ?>
    <!--/.iframe_wrapper -->
</section>
<!--/.youtube -->

<section id="news">
    <div class="news_inner inner wow fadeIn" data-wow-duration="1s">
        <?php
        $news_obj = get_page_by_path('news');
        ?>
        <h2 class="section_title"><?php echo $news_obj->post_title; ?></h2>

        <?php get_template_part('template-parts/news-loop'); ?>

        <?php
        $cat = get_category_by_slug('news-single');
        ?>
        <div class="news_btn"><a class="btn_reserve" href="<?php echo esc_url(home_url('news')); ?>"><?php echo $cat->cat_name; ?>一覧へ</a></div><!-- /.news_btn -->
    </div><!-- /.news_inner -->
</section><!-- /.news -->

<section id="story">
    <div class="story_inner inner wow fadeIn" data-wow-duration="1s">
        <?php
        $news_obj = get_page_by_path('story');
        ?>
        <h2 class="section_title"><?php echo $news_obj->post_title; ?></h2>
        <div class="story_item">
            <p class="story_text wow fadeIn" data-wow-duration="1s">
                マハー（偉大な）、バーラタ（バラタ族）、つまり「偉大なバラタ族」の物語。神々が人間界を作り出すところから始まり、バラタ族の中のクル家とパーンドゥ家という二つの部族間の対立を巡るストーリー。神の血を引く個性豊かな登場人物たちによる差別、対立、欲望、嫉妬など、生の苦しみが描かれ、最終的には一族が破滅していく。<br>
                世界的な文学作品古代ギリシャの「イーリアス」「オデュッセイア」と並ぶ世界三大叙事詩の一つに数えられており、「ラーマーヤナ」と双璧を成すインド二大叙事詩の一つ。原語はサンスクリット語であるが、全18巻、10万詩節を超えるその長さは聖書の約4倍と言われ、原典の日本語訳はいまだ完結していない。
            </p><!-- /.story_text -->
        </div><!-- /.story_item -->
        <div class="story_btn">
            <a href="<?php echo esc_url(home_url('story')); ?>" class="btn_reserve">もっと詳しく</a>
        </div><!-- /.story_btn -->
    </div><!-- /.story_inner -->
</section><!-- /.story -->

<section id="comments">
    <div class="comments_inner inner wow fadeIn" data-wow-duration="1s">
        <?php
        $news_obj = get_page_by_path('comments');
        ?>
        <h2 class="section_title"><?php echo $news_obj->post_title; ?></h2><!-- /.section_title -->
        <h3 class="section_sub_title">舞台関係者のみならず各界著名人からコメントが届いています！</h3>
        <div class="comments_img">
            <p class="comments_img_title">京都佛立ミュージアム館長 <span><br class="hidden-pc">長松清潤</span></p>
            <!-- /.comments_img_title -->
            <p class="comments_img_text">「文に非ず、其の義に非ず、唯だ一部の意のみ。」<br>
                まずこの聖句が浮かんだ。境界線に立つ人類。超越する意志。小池博史氏<br>の心象が生み出したアバターが乱舞しながら深層意識に波紋を起こしてゆく。</p>
            <!-- /.comments_img_text -->
            <div class="comments_btn">
                <a href="<?php echo esc_url(home_url('comments')); ?>" class="btn_reserve">もっと見る </a>
            </div><!-- /.comments_btn -->
        </div><!-- /.comments_img -->
    </div><!-- /.comments_inner -->
</section><!-- /.comments -->

<section id="casts" class="wow fadeIn" data-wow-duration="1s">
    <?php
    $cast_obj = get_page_by_path('casts');
    ?>
    <h2 class="section_title"><?php echo $cast_obj->post_title; ?></h2>
    <div class="cast_bg">
        <div class="cast_inner inner">
            <div class="cast_items">

            <?php get_template_part('template-parts/cast-casts'); ?>

            </div><!-- /.cast_items -->
            <div class="cast_btn"><a class="btn_reserve" href="<?php echo esc_url(home_url('cast')); ?>">もっと見る</a></div><!-- /.cast_link -->
        </div><!-- /.cast_inner -->
    </div><!-- /.cast_bg -->
</section><!-- /.cast -->

<?php get_footer(); ?>