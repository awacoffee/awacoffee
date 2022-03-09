<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php
    wp_head();
    ?>
</head>

<body>
    <!-- ▼SP下層ヘッダー▼ -->
    <header>
        <div class="header_wrap">
            <div class="header_inner">
                <div class="header_inner_bg">

                    <div class="header_wrap_box">
                        <!-- ▼カップicon▼ -->
                        <a href="<?php echo home_url(); ?>" class="header_wrap_box_icon">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/icon.svg" alt="Awa Our Coffee Hourのアイコン" />
                        </a>
                        <?php
                        $args = array(
                            'menu' => 'header-global-navigation',
                            'menu_class' => 'header_nav_list',
                            'container' => 'nav',
                            'container_class' => 'header_nav_wrap',
                        );
                        wp_nav_menu($args);
                        ?>
                        <!-- ▼ハンバーガーメニュー▼ -->
                        <div class="header_wrap_box_nav">
                            <span class="header_wrap_box_nav_line"></span>
                            <span class="header_wrap_box_nav_line"></span>
                            <span class="header_wrap_box_nav_line"></span>
                        </div>
                    </div>
                    <!-- header_wrap_box -->
                </div>
                <!-- /header_inner_bg -->
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
                            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_aoch.png" alt="Awa Our Coffee Hour" /></a>
                        </div>
                        <?php
                        $args = array(
                            'menu' => 'header-drower-nav-top',
                            'menu_class' => 'drower_nav_box',
                            'container' => false,
                        );
                        wp_nav_menu($args);
                        ?>
                        <?php
                        $args = array(
                            'menu' => 'header-drower-nav-under',
                            'menu_class' => 'drower_nav_list',
                            'container' => false,
                        );
                        wp_nav_menu($args);
                        ?>
                    </nav>
                    <div class="drower_nav_insta">
                        <a href="https://www.instagram.com/awa_our_coffee_hour" target="_blank" rel="noopener noreferrer" class="drower_nav_item"><i class="fa-brands fa-instagram fa-2x"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </header>