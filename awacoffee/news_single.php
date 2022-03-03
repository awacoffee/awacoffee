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
        <link rel="stylesheet" href="https://use.typekit.net/twf1hjd.css" />

        <!-- ▼フォント:Shippori Mincho B1(Regular,Medium,Bold) -->
        <!-- ▼フォント:Noto Sans Japanese(Regular,Medium,Bold) -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Shippori+Mincho+B1:wght@400;500;700&display=swap"
            rel="stylesheet"
        />

        <!-- ▼FontAwesome▼ -->
        <link
            href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
            rel="stylesheet"
        />
        <link
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
            rel="stylesheet"
        />

        <!-- ▼リセットCSS▼ -->
        <link href="assets/css/reset.css" rel="stylesheet" media="all" />
        <!-- ▼共通スタイル▼ -->
        <link href="assets/css/common.css" rel="stylesheet" media="all" />
        <!-- ▼店舗個別ページのCSS/ニュース一覧ページのCSS▼ -->
        <link rel="stylesheet" href="assets/css/news_single.css" />

        <title>ニュース個別ページ</title>
    </head>
    <body>
        <!-- ▼下層ヘッダー▼ -->
        <header>
            <div class="header_wrap under mainvisual_wrap">
                <div class="header_inner">
                    <div class="header_wrap_box">
                        <!-- ▼カップicon▼ -->
                        <a href="" class="header_wrap_box_icon">
                            <img
                                src="./assets/img/icon.svg"
                                alt="Awa Our Coffee Hourのアイコン"
                            />
                        </a>
                        <nav>
                            <ul class="header_nav_list">
                                <li>
                                    <a href="" class="header_nav_item"
                                        >条件検索</a
                                    >
                                </li>
                                <li>
                                    <a href="" class="header_nav_item"
                                        >コラム</a
                                    >
                                </li>
                                <li>
                                    <a href="" class="header_nav_item"
                                        >コーヒー入門知識</a
                                    >
                                </li>
                                <li>
                                    <a href="" class="header_nav_item"
                                        >マイページ</a
                                    >
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
                    <!-- header_wrap_box -->
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
                                <a href=""
                                    ><img
                                        src="./assets/img/logo_aoch.png"
                                        alt="Awa Our Coffee Hour"
                                /></a>
                            </div>
                            <ul class="drower_nav_box">
                                <li>
                                    <a href="" class="drower_nav_box_item"
                                        >店で飲みたい</a
                                    >
                                </li>
                                <li>
                                    <a href="" class="drower_nav_box_item"
                                        >豆を買いたい</a
                                    >
                                </li>
                            </ul>
                            <ul class="drower_nav_list">
                                <li>
                                    <a href="" class="drower_nav_item"
                                        >条件検索</a
                                    >
                                </li>
                                <li>
                                    <a href="" class="drower_nav_item"
                                        >コラム</a
                                    >
                                </li>
                                <li>
                                    <a href="" class="drower_nav_item"
                                        >コーヒー入門知識</a
                                    >
                                </li>
                                <li>
                                    <a href="" class="drower_nav_item"
                                        >マイページ</a
                                    >
                                </li>
                                <li>
                                    <a href="" class="drower_nav_item"
                                        >お問い合わせ</a
                                    >
                                </li>
                                <li>
                                    <a href="" class="drower_nav_item"
                                        ><i
                                            class="fa-brands fa-instagram fa-2x"
                                        ></i
                                    ></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <main id="news_single_under">
            <!-- ▼タイトルエリア▼ -->
            <div class="wrap">
                <div class="under_title inner">
                    <div class="under_wrap_title">
                        <p>News</p>
                        <h1>ニュース</h1>
                    </div>
                </div>
            </div>

            <div class="column2_flex wrap">
                <!-- ニュース一覧本文-->
                <div class="column2_article">
                    <div class="wrap">
                        <div class="inner">
                            <!-- ▼本文▼ -->
                            <?php if (have_posts()) : ?>
      <?php while (have_posts()) : the_post(); ?>
        <?php
        $cat = get_the_category();
        $cat = $cat[0];
        ?>
                            <article class="news_page_container">
                                <h1 class="news_page_level1_heading">
                                    <?php wp_title(''); ?>
                                </h1>
                                <ul class="news_page_post_meta">
                                    <li class="news_page_post_date">
                                        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y年m月d日'); ?></time>
                                    </li>
                                    <li class="news_page_post_category_wrap">
                                        <div class="<?php echo $cat->slug ?>"><?php the_category(); ?></div>
                                    </li>
                                </ul>
                                <div class="news_page_text_wrap">
                                    <h2 class="news_page_level2_heading">
                                        <?php the_title(); ?>
                                    </h2>
                                    <p class="news_page_text">
                                        <?php the_content();?>
                                    </p>
                                </div>
                                <nav class="news_page_navigation">
                                    <div class="news_page_prev">
                                        <a href="">《 前の記事</a>
                                    </div>
                                    <div class="news_page_next">
                                        <a href="">次の記事 》</a>
                                    </div>
                                </nav>
                            </article>
                        </div>
                    </div>
                </div>

                <!-- サイドバー -->
                <div class="column2_aside">
                    <div class="wrap">
                        <div class="inner">
                            <div class="side_scrool">
                                <!-- コラムカテゴリ -->
                                <aside>
                                    <h2 class="side_title">
                                        コラムカテゴリ一覧
                                    </h2>
                                    <ul class="side_lists">
                                        <li class="list">
                                            <a href="">入門知識</a>
                                        </li>
                                        <li class="list">
                                            <a href="">ブログ</a>
                                        </li>
                                        <li class="list">
                                            <a href="">特集</a>
                                        </li>
                                    </ul>
                                </aside>
                                <!-- ニュース -->
                                <aside>
                            <h2 class="side_title">ニュース</h2>
                            <ul class="side_lists">
                                <!-- <li class="list"><a href="<?php // echo home_url('/all_news/'); 
                                                                ?>">ALL</a></li> -->
                                <?php
                                // カテゴリーnewsのslug情報を取得
                                $news = get_term_by('slug', 'category_news', 'category');
                                // カテゴリーnewsのリンクを取得
                                $news_link = get_term_link($news, 'category');
                                ?>
                                <li class="list">
                                    <a href="<?php echo $news_link; ?>">おしらせ</a>
                                </li>
                                <?php
                                // カテゴリーnewsのslug情報を取得
                                $news = get_term_by('slug', 'category_update', 'category');
                                // カテゴリーnewsのリンクを取得
                                $news_link = get_term_link($news, 'category');
                                ?>
                                <li class="list">
                                    <a href="<?php echo $news_link; ?>">更新情報</a>
                                </li>

                                <!-- <li><a href="<?php // echo home_url('/all_news/');
                                                    ?>">ALL</a></li> -->
                                <?php
                                // $args = array(
                                //     'title_li' => '',
                                // );
                                // wp_list_categories($args);
                                ?>
                            </ul>
                        </aside>
                            </div>
                        </div>
                        <!-- inner -->
                    </div>
                    <!-- wrap -->
                </div>
            </div>
        </main>

        <footer>
            <div id="footer_wrap" class="wrap">
                <div class="inner">
                    <!-- ▼フッター▼ -->
                    <div class="footer_flex">
                        <div class="footer_logo">
                            <img
                                src="./assets/img/logo_aoch.png"
                                alt="Awa Our Coffee Hourのロゴ"
                            />
                        </div>
                        <nav class="footer_nav">
                            <ul class="footer_nav_list">
                                <li class="footer_nav_item">
                                    <a href="">お店で飲みたい</a>
                                </li>
                                <li class="footer_nav_item">
                                    <a href="">豆を買いたい</a>
                                </li>
                                <li class="footer_nav_item">
                                    <a href="">条件検索</a>
                                </li>
                                <li class="footer_nav_item">
                                    <a href="">コラム</a>
                                </li>
                                <li class="footer_nav_item">
                                    <a href="">マイページ</a>
                                </li>
                            </ul>
                            <ul class="footer_nav_list">
                                <li class="footer_nav_item">
                                    <a href="">お問い合わせ</a>
                                </li>
                                <li class="footer_nav_item">
                                    <a href="">このサイトについて</a>
                                </li>
                                <li class="footer_nav_item">
                                    <a href="">プライバシーポリシー</a>
                                </li>
                                <li class="footer_nav_item">
                                    <a href=""
                                        ><i
                                            class="fa-brands fa-instagram fa-2x"
                                        ></i
                                    ></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                    <!-- footer_flex -->

                    <p class="footer_wrap_copyright">
                        <small>&copy; 2022 動</small>
                    </p>
                </div>
                <!-- viewport -->
            </div>
            <!-- footer_wrap -->
        </footer>

        <!-- ▼Javascript▼ -->
        <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"
        ></script>
        <script src="./assets/js/front.js"></script>
    </body>
</html>
