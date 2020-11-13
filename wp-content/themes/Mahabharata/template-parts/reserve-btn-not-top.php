  <!-- TOPページ以外の「チケット予約サイトへ」ボタン -->
  
  <?php // 以下はfunctions.phpに定義
// SCF関数ではhome.phpでの取得ができなかったため、以下の記述にした。

  // $page = get_page_by_path('top');
  // $reserveUrl = get_post_meta($page->ID, 'reserve');
  // var_dump($reserveUrl);
  ?>
  <div class="cat_top_btn">
    <a class="cat_btn_reserve" href="<?php echo esc_url(my_reserve_btn()); ?>">チケット予約サイトへ</a>
  </div><!-- /.top_btn -->