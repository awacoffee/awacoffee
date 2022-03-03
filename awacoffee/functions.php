<?php

/**
 * ツールバーを非表示にする。
 */
// add_filter('show_admin_bar', '__return_false');

if (!function_exists('awacoffee_setup')) {
    function awacoffee_setup()
    {
        /**
         * タイトルタグを出力する
         */
        add_theme_support("title-tag");
        /**
         * アイキャッチ画像を仕様可能にする
         */
        add_theme_support("post-thumbnails");
        /**
         * カスタムメニュー機能を使用可能にする
         */
        add_theme_support("menus");
    }
}
add_action('after_setup_theme', 'awacoffee_setup');

function my_setup()
{
    global $global_api_key; //投稿ページでの表示の際に必要なため、グローバル変数にしています
    $global_api_key = 'AIzaSyCHAjeGqygNhVIP1Jy4W45BdHirl7OWi8s';
}
add_action('after_setup_theme', 'my_setup');

function my_acf_google_map_api($api)
{
    global $global_api_key;
    $api['key'] = $global_api_key;
    return $api;
}
add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

function awacoffee_scripts()
{
    // リセットCSSを読み込む
    wp_enqueue_style(
        "awacoffee-resetcss",
        get_template_directory_uri() . "/assets/css/reset.css",
    );

    // about.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-aboutcss",
        get_template_directory_uri() . "/assets/css/about.css",
    );

    // card.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-cardcss",
        get_template_directory_uri() . "/assets/css/card.css",
    );

    // column_list.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-columnlistcss",
        get_template_directory_uri() . "/assets/css/column_list.css",
    );

    // column.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-columncss",
        get_template_directory_uri() . "/assets/css/column.css",
    );

    // common.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-commoncss",
        get_template_directory_uri() . "/assets/css/common.css",
    );

    // contact.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-contactcss",
        get_template_directory_uri() . "/assets/css/contact.css",
    );

    // index.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-indexcss",
        get_template_directory_uri() . "/assets/css/index.css",
    );

    // loding.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-lodingcss",
        get_template_directory_uri() . "/assets/css/loding.css",
    );

    // mypage.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-mypagecss",
        get_template_directory_uri() . "/assets/css/mypage.css",
    );

    // news_single.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-newssinglecss",
        get_template_directory_uri() . "/assets/css/news_single.css",
    );

    // news.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-newscss",
        get_template_directory_uri() . "/assets/css/news.css",
    );

    // privacy.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-privacycss",
        get_template_directory_uri() . "/assets/css/privacy.css",
    );

    // result.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-resultcss",
        get_template_directory_uri() . "/assets/css/result.css",
    );

    // search.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-searchcss",
        get_template_directory_uri() . "/assets/css/search.css",
    );

    // store_list.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-storelistcss",
        get_template_directory_uri() . "/assets/css/store_list.css",
    );

    // store.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-storecss",
        get_template_directory_uri() . "/assets/css/store.css",
    );


    // Awesome fontsのスタイルシートを読み込む
    wp_enqueue_style(
        "font-awesome",
        "https://use.fontawesome.com/releases/v6.0.0/css/all.css"
    );

    // WordPress 本体の jQuery を登録解除
    wp_deregister_script('jquery');

    //jQuery を CDN から読み込む
    wp_enqueue_script(
        'jquery',
        '//ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js',
        array(),
        '3.3.1',
        true
    );

    // front.jsのJSファイルを読み込んで、フッターに出力
    wp_enqueue_script(
        'awacoffee-front',
        get_template_directory_uri() . "/assets/js/front.js",
        array('jquery'),
        "",
        true
    );

    // front_0221.jsのJSファイルを読み込んで、フッターに出力
    wp_enqueue_script(
        'awacoffee-front_0221',
        get_template_directory_uri() . "/assets/js/front_0221.js",
        array('jquery'),
        "",
        true
    );

    // front_0222.jsのJSファイルを読み込んで、フッターに出力
    wp_enqueue_script(
        'awacoffee-front_0222',
        get_template_directory_uri() . "/assets/js/front_0222.js",
        array('jquery'),
        "",
        true
    );

    // loding.jsのJSファイルを読み込んで、フッターに出力
    wp_enqueue_script(
        'awacoffee-lodingjs',
        get_template_directory_uri() . "/assets/js/loding.js",
        array('jquery'),
        "",
        true
    );

    // news_list.jsのJSファイルを読み込んで、フッターに出力
    wp_enqueue_script(
        'awacoffee-news_listjs',
        get_template_directory_uri() . "/assets/js/news_list.js",
        array('jquery'),
        "",
        true
    );

    // search.jsのJSファイルを読み込んで、フッターに出力
    wp_enqueue_script(
        'awacoffee-searchjs',
        get_template_directory_uri() . "/assets/js/search.js",
        array('jquery'),
        "",
        true
    );

    // store_list.jsのJSファイルを読み込んで、フッターに出力
    wp_enqueue_script(
        'awacoffee-store_listjs',
        get_template_directory_uri() . "/assets/js/store_list.js",
        array('jquery'),
        "",
        true
    );

    // store.jsのJSファイルを読み込んで、フッターに出力
    wp_enqueue_script(
        'awacoffee-storejs',
        get_template_directory_uri() . "/assets/js/store.js",
        array('jquery'),
        "",
        true
    );

    // googlemapのapiキーを取得する
    wp_enqueue_script(
        'awacoffee-api',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyCHAjeGqygNhVIP1Jy4W45BdHirl7OWi8s',
        array('jquery'),
        "",
        true
    );

    // googlemap.jsのJSファイルを読み込んで、フッターに出力
    wp_enqueue_script(
        'awacoffee-googlemap',
        get_template_directory_uri() . "/assets/js/googlemap.js",
        array('jquery'),
        "",
        true
    );
}
add_action('wp_enqueue_scripts', 'awacoffee_scripts');

// function my_acf_google_map_api($api)
// {
//     $api['key'] = 'AIzaSyCHAjeGqygNhVIP1Jy4W45BdHirl7OWi8s';
//     return $api;
// }
// add_filter('acf/fields/google_map/api', 'my_acf_google_map_api');

// 抜粋の文字数制限を変更する
function twpp_change_excerpt_length($length)
{
    $length = 30;
    return $length;
}
add_filter('excerpt_length', 'twpp_change_excerpt_length', 999);

/**
 * メインクエリの投稿数をトップページかそれ以外かで変更する
 */
function my_pre_get_posts($query)
{
    // 管理画面、メインクエリ以外には設定しない
    if (is_admin() || !$query->is_main_query()) {
        return; // 関数から抜ける
    }

    // トップページの場合
    if ($query->is_home()) {
        // $query->set('category_name', 'news');
        $query->set('posts_per_page', 3);
        // $query->set('orderby', 'rand');
        return;
    }
}
add_action('pre_get_posts', 'my_pre_get_posts');

/**
 *
 * google font を読み込む
 *
 */
function add_google_fonts()
{
    wp_register_style(
        'googleFonts',
        'https://fonts.googleapis.com/css2?family=Shippori+Mincho+B1&display=swap'
    );
    wp_enqueue_style('googleFonts');
}
add_action('wp_enqueue_scripts', 'add_google_fonts');
