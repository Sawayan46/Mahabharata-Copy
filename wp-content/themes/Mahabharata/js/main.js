jQuery(function ($) {
  $('.drawer').drawer();
  // メニュークリックで閉じる
  $('.drawer-nav').on('click', function () {
    $('.drawer').drawer('close');
  });

});

// wow.js 初期化
new WOW().init();

