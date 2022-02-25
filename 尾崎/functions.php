<?php

/**
 * ツールバーを非表示にする。
 */
add_filter('show_admin_bar', '__return_false');

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
        "awacoffee-reset",
        get_template_directory_uri() . "/assets/css/reset.css",
    );

    // common.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-common",
        get_template_directory_uri() . "/assets/css/common.css",
    );

    // index.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-index",
        get_template_directory_uri() . "/assets/css/index.css",
    );

    // result.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-result",
        get_template_directory_uri() . "/assets/css/result.css",
    );

    // s_column.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-s_column",
        get_template_directory_uri() . "/assets/css/s_column.css",
    );

    // store.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-store",
        get_template_directory_uri() . "/assets/css/store.css",
    );

    // store_list.cssのスタイルシートを読み込む
    wp_enqueue_style(
        "awacoffee-store_list",
        get_template_directory_uri() . "/assets/css/store_list.css",
    );

    // Awesome fontsのスタイルシートを読み込む
    wp_enqueue_style(
        "font-awesome",
        "https://use.fontawesome.com/releases/v5.6.1/css/all.css"
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
