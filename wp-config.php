<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'local' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'root' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'XY<ztc+U[=[`n%calTBlp~69J^#cW-Sa~/ex{Uv0jp4-7aKz>DPW/gCh6tDGir^I' );
define( 'SECURE_AUTH_KEY',  'Q|fz;y8+pM||X)e5Y:bagX9pfgxStkXnZp=R7(mb3N%x/Ma[Aum]B]<T%tNhxt T' );
define( 'LOGGED_IN_KEY',    'hawDC3%x$7hu|Fvlw+GFgxE[FTwpm{+Gd}.aG{z[cI0W&q7xn1m6LXkhF6YHIVM?' );
define( 'NONCE_KEY',        '//US5<bJ7.bdl~sp$wePouWyyBU-vM% ;Ojp.bTmNSB!gso|]lcm$(_ZA@F}#P,n' );
define( 'AUTH_SALT',        'N6.0B_jX1LniSMlbH^,i=.G{x~E9w@N7Njn_#)gNNZ!Ed,6~(,^*m^0O8Wl)9u$F' );
define( 'SECURE_AUTH_SALT', '7{Va@F(}*c&ST,~S@]pn$&BZQ5<|:K8$xM1yK5tZ[(+>hab)*#w[A|)JG?oEb*NP' );
define( 'LOGGED_IN_SALT',   'uHWl`3:-Z*v8b@3?g9@L8/f=,|]p%5l-NhQ}2NhW)3&kQLx2e+7?{!:8yM+in1l-' );
define( 'NONCE_SALT',       'w,m:j#{-WS.EnOM{8cT X#0NpSmAG[2RVZ%E#U/n8uiHusAlrh{[!}Qd8$Rx-GN ' );
define( 'WP_CACHE_KEY_SALT','@vs0aw-Jz0Zo+ [1%ruX>T0BQ^y<{-Zt0>!92lgaI&g.Xc*Su%wFSxy7ED+t0A- ' );

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
