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
        "",
        "",
        true
    );
}
add_action('wp_enqueue_scripts', 'awacoffee_scripts');
