<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- ▼設定するのであれば入れる▼ -->
    <meta name="keywords" content="" />
    <!-- ▼ディスクリプション→コンテンツ班からもらう▼ -->
    <meta name="description" content="" />

    <!-- ▼フォント:Rollerscript Rough▼ -->
    <!-- CSSでの指定 /CSSに移したら消す-->
    <!-- font-family: rollerscript-rough, sans-serif;
            font-weight: 400;
            font-style: normal; -->
    <link rel="stylesheet" href="https://use.typekit.net/twf1hjd.css" />

    <!-- ▼フォント:Shippori Mincho B1(Regular,Medium,Bold) -->
    <!-- ▼フォント:Noto Sans Japanese(Regular,Medium,Bold) -->
    <!-- CSSでの指定 /CSSに移したら消す-->
    <!-- font-family: 'Noto Sans JP', sans-serif;
            font-family: 'Shippori Mincho B1', serif; -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com" /> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin /> -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Shippori+Mincho+B1:wght@400;500;700&display=swap" rel="stylesheet" /> -->
    <!-- ▼ファビコン▼ -->
    <!-- <link rel="icon" href="" /> -->

    <!-- ▼FontAwesome▼ -->
    <!-- <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet" /> -->

    <!-- ▼リセットCSS▼ -->
    <!-- <link href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" rel="stylesheet" media="all" /> -->
    <!-- ▼共通スタイル▼ -->
    <!-- <link href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" rel="stylesheet" media="all" /> -->
    <!-- ▼indexページのCSS /ファイル名記載する▼ -->
    <!-- <link href="<?php echo get_template_directory_uri(); ?>/assets/css/index.css" rel="stylesheet" media="all" /> -->

    <title><?php bloginfo('name'); ?></title>
    <?php
    wp_head();
    ?>
</head>

<body>
    <?php wp_body_open(); ?>
    <!-- ▼SP-frontヘッダー▼ -->
    <header>
        <div id="header_wrap" class="header_wrap">
            <div class="header_inner">
                <div id="header_wrap_box" class="header_wrap_box">
                    <!-- ▼カップicon▼ -->
                    <a href="<?php echo home_url(); ?>" class="header_wrap_box_icon">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header-icon_white.png" alt="Awa Our Coffee Hourのアイコン" />
                    </a>
                    <nav>
                        <ul class="header_nav_list">
                            <li>
                                <a href="" class="header_nav_item">条件検索</a>
                            </li>
                            <li>
                                <a href="" class="header_nav_item">コラム</a>
                            </li>
                            <li>
                                <a href="" class="header_nav_item">コーヒー入門知識</a>
                            </li>
                            <li>
                                <a href="" class="header_nav_item">マイページ</a>
                            </li>
                        </ul>
                    </nav>
                    <!-- ▼ハンバーガーメニュー▼ -->
                    <div class="header_wrap_box_nav">
                        <span class="header_wrap_box_nav_line"></span>
                        <span class="header_wrap_box_nav_line"></span>
                        <span class="header_wrap_box_nav_line"></span>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.header_wrap -->

        <!-- ▼ドロワー▼ -->
        <div class="drower">
            <div class="wrap">
                <div class="inner">
                    <nav class="drower_nav">
                        <div class="drower_nav_close"></div>
                        <div class="drower_nav_logo">
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_aoch.png" alt="Awa Our Coffee Hour" /></a>
                        </div>
                        <ul class="drower_nav_box">
                            <li>
                                <a href="" class="drower_nav_box_item">店で飲みたい</a>
                            </li>
                            <li>
                                <a href="" class="drower_nav_box_item">豆を買いたい</a>
                            </li>
                        </ul>
                        <ul class="drower_nav_list">
                            <li>
                                <a href="" class="drower_nav_item">条件検索</a>
                            </li>
                            <li>
                                <a href="" class="drower_nav_item">コラム</a>
                            </li>
                            <li>
                                <a href="" class="drower_nav_item">コーヒー入門知識</a>
                            </li>
                            <li>
                                <a href="" class="drower_nav_item">マイページ</a>
                            </li>
                            <li>
                                <a href="" class="drower_nav_item">お問い合わせ</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header>
