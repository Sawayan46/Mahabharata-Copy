<?php

/**
 * テーマのセットアップ
 **/

function my_setup() // my_setupという関数を定義
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('automatic-feed-links'); // 投稿とコメントのRSSフィードのリンクを有効化
    add_theme_support('title-tag'); // タイトルタグ自動生成
    add_theme_support(
        'html5',
        array( // HTML5 でマークアップ)
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        )
    );

    //カスタムメニューを有効化
    register_nav_menus(
        array(
            'global' => 'ヘッダーメニュー',
            'drawer' => 'ドロワーメニュー',
        )
    );
}
add_action('after_setup_theme', 'my_setup'); // テーマが初期化された後、my_setup関数を実行する

/** 
 * CSSとJavaScriptの読み込み
 * 
 * @codex https://wpdocs.osdn.jp/%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC
 **/
function my_script_init()
{
    // FontAwesome読み込み
    wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.2/css/all.css', array(), '5.8.2', 'all');
    // Drawer.jsの読み込み
    wp_enqueue_style('my-drawer-style', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/css/drawer.min.css', array(), '3.2.1');
    wp_enqueue_script('my-scroll-js', 'https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.1.3/iscroll.min.js', array('jquery'), '5.1.3', true);
    wp_enqueue_script('my-drawer-js', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.1/js/drawer.min.js', array('my-scroll-js'), '3.2.1', true);
    // WOW.jsの読み込み
    wp_enqueue_script('my_wow_js', get_template_directory_uri() . '/js/wow.min.js', array('jquery'), '1.0.0', true);

    // JavaScriptファイルの読み込み
    wp_enqueue_script('my_js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true);
    // リセットCSS
    wp_enqueue_style('my_reset_style', get_template_directory_uri() . '/css/reset.css', array());
    // WOW.jsで使用するCSS
    wp_enqueue_style('my_animate_style', get_template_directory_uri() . '/css/animate.css', array());
    // 自分のCSS
    wp_enqueue_style('my_style', get_template_directory_uri() . '/css/style.css', array('my_reset_style'));
}
add_action('wp_enqueue_scripts', 'my_script_init');

// WordPressのナビゲーションメニューに説明をつける（フィルターフック）
// 参考URL : https://accelboon.com/tn/wordpress%E3%81%AE%E3%83%8A%E3%83%93%E3%82%B2%E3%83%BC%E3%82%B7%E3%83%A7%E3%83%B3%E3%83%A1%E3%83%8B%E3%83%A5%E3%83%BC%E3%81%AB%E8%AA%AC%E6%98%8E%E3%82%92%E3%81%A4%E3%81%91%E3%82%8B/
function prefix_nav_description($item_output, $item, $depth, $args)
{
    if (!empty($item->description)) {
        $item_output = str_replace('">' . $args->link_before . $item->title, '">' . $args->link_before . '<span class="menu_item_title">' . $item->description . '</span>' . '<span class="menu_item_description">' . $item->title . '</span>', $item_output);
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'prefix_nav_description', 10, 4);

//トップページの記事取得件数を指定
function my_pre_get_posts($query)
{
    /* 管理画面,メインクエリに干渉しないために必須 */
    if (is_admin() || !$query->is_main_query()) {
        return;
    }
    // NEWS一覧ページ( home.php )の表示件数を指定
    if ($query->is_home()) {
        $query->set('posts_per_page', '9');
        return;
    }
}
add_action('pre_get_posts', 'my_pre_get_posts');

// TOPページ以外での「チケット予約サイトへ」ボタンのカスタムフィールドの取得を定義
function my_reserve_btn()
{
    $page = get_page_by_path('top');
    $reserveUrl = get_post_meta($page->ID, 'reserve');
    return $reserveUrl[0];
}

// サンクスページへのリダイレクト
add_action('wp_footer', 'add_thanks_page');
function add_thanks_page()
{
    echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'https://mahabharata.sawa-yan.com/confirm/'; /* 遷移先のURL */
}, false );
</script>
EOD;
}
