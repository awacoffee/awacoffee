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
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                            <?php
                            get_template_part('template-parts/loop', 'news');
                            ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="more_btn"><button>more</button></div>
                </div>
            </div>
        </div>

        <!-- サイドバー -->
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