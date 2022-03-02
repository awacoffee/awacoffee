<?php

/**
 * Template Name: ニュースの全カテゴリーを表示するニュース一覧ページ
 * Description: ニュースの全カテゴリーを表示するニュース一覧ページのテンプレート
 */
?>

<?php get_header(); ?>

<main id="news_under">
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
                    <!-- ▼お知らせカード▼ -->
                    <ul class="news_wrap_cards">
                        <li class="news_wrap_card">
                            <div class="news_card_meta">
                                <time class="news_date" datetime="the_time">2022年03月14日</time>
                                <ul class="post_categories">
                                    <li>
                                        <a href="" class="category_update">更新情報</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="" class="news_text">
                                <h3 class="news_title">
                                    ×××Cafe OPEN!
                                </h3>
                                <p class="news_desc">
                                    ここにお知らせが入ります。ここにお知らせが入ります。ここにお知らせが…
                                </p>
                            </a>
                        </li>
                        <li class="news_wrap_card">
                            <div class="news_card_meta">
                                <time class="news_date" datetime="the_time">2022年03月14日</time>
                                <ul class="post_categories">
                                    <li>
                                        <a href="" class="category_news">お知らせ</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="" class="news_text">
                                <h3 class="news_title">
                                    ×××Cafe OPEN!
                                </h3>
                                <p class="news_desc">
                                    ここにお知らせが入ります。ここにお知らせが入ります。ここにお知らせが…
                                </p>
                            </a>
                        </li>
                        <li class="news_wrap_card">
                            <div class="news_card_meta">
                                <time class="news_date" datetime="the_time">2022年03月14日</time>
                                <ul class="post_categories">
                                    <li>
                                        <a href="" class="category_update">更新情報</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="" class="news_text">
                                <h3 class="news_title">
                                    ×××Cafe OPEN!
                                </h3>
                                <p class="news_desc">
                                    ここにお知らせが入ります。ここにお知らせが入ります。ここにお知らせが…
                                </p>
                            </a>
                        </li>
                        <li class="news_wrap_card">
                            <div class="news_card_meta">
                                <time class="news_date" datetime="the_time">2022年03月14日</time>
                                <ul class="post_categories">
                                    <li>
                                        <a href="" class="category_update">更新情報</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="" class="news_text">
                                <h3 class="news_title">
                                    ×××Cafe OPEN!
                                </h3>
                                <p class="news_desc">
                                    ここにお知らせが入ります。ここにお知らせが入ります。ここにお知らせが…
                                </p>
                            </a>
                        </li>
                        <li class="news_wrap_card">
                            <div class="news_card_meta">
                                <time class="news_date" datetime="the_time">2022年03月14日</time>
                                <ul class="post_categories">
                                    <li>
                                        <a href="" class="category_news">お知らせ</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="" class="news_text">
                                <h3 class="news_title">
                                    ×××Cafe OPEN!
                                </h3>
                                <p class="news_desc">
                                    ここにお知らせが入ります。ここにお知らせが入ります。ここにお知らせが…
                                </p>
                            </a>
                        </li>
                        <li class="news_wrap_card">
                            <div class="news_card_meta">
                                <time class="news_date" datetime="the_time">2022年03月14日</time>
                                <ul class="post_categories">
                                    <li>
                                        <a href="" class="category_update">更新情報</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="" class="news_text">
                                <h3 class="news_title">
                                    ×××Cafe OPEN!
                                </h3>
                                <p class="news_desc">
                                    ここにお知らせが入ります。ここにお知らせが入ります。ここにお知らせが…
                                </p>
                            </a>
                        </li>
                    </ul>
                    <div class="more_btn"><button>more</button></div>
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
                                <!-- <li class="list"><a href="<?php // echo home_url('/all_news/'); ?>">ALL</a></li> -->
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


<?php get_footer(); ?>
