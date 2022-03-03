<?php get_header(); ?>


<main class="column_page" id="column_under">

    <!-- ▼タイトルエリア▼ -->
    <div class="wrap">
        <div class="under_title inner">
            <div class="under_wrap_title">
                <p>Column</p>
                <h1>コラム</h1>
                <div class="search_jump_box">
                    <a href="#search_box" class="search_jump_btn"><i class="fa-solid fa-magnifying-glass"></i>記事を探す</a>
                </div>
            </div>
        </div>
    </div>

    <!-- 全体で囲む or flex -->
    <section class="column2_flex wrap">
        <!-- コラム記事本文-->
        <section class="column2_article">
            <div class="wrap">
                <div class="inner">

                    <!-- コラム記事詳細タイトル -->

                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>

                            <div class="s_column_title_wrap">
                                <h1 class="column_title">
                                    <?php the_title(); ?>
                                </h1>
                                <ul class="tags">
                                    <li class="tag">
                                        <a href="">自家焙煎</a>
                                    </li>
                                    <li class="tag">
                                        <a href="">自家焙煎</a>
                                    </li>
                                    <li class="tag">
                                        <a href="">自家焙煎</a>
                                    </li>
                                    <li class="tag">
                                        <a href="">自家焙煎</a>
                                    </li>
                                </ul>
                            </div>
                            <?php the_content(); ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <!-- ▼レコメンド▼ -->
        <section class="recommend">
            <div class="wrap">
                <div class="inner">
                    <h2 class="recommend_title">あなたへのおすすめ</h2>
                    <div class="card_wrap">
                        <article class="column_wrap">
                            <a href="">
                                <div class="column_inner">
                                    <figure class="column_img_wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="コラム記事のサムネイル画像" />
                                    </figure>
                                    <div class="column_meta">
                                        <div class="categories_wrap">
                                            <time class="column_date" datetime="the_time">2022.03.14</time>
                                            <ul class="categories">
                                                <li>コーヒー入門知識</li>
                                            </ul>
                                        </div>
                                        <h3>シングルオリジンとブレンドの違い</h3>
                                        <div class="column_text">
                                            <p>自家焙煎にこだわった至福の一杯</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                        <article class="column_wrap">
                            <a href="">
                                <div class="column_inner">
                                    <figure class="column_img_wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="コラム記事のサムネイル画像" />
                                    </figure>
                                    <div class="column_meta">
                                        <div class="categories_wrap">
                                            <time class="column_date" datetime="the_time">2022.03.14</time>
                                            <ul class="categories">
                                                <li>コーヒー入門知識</li>
                                            </ul>
                                        </div>
                                        <h3>シングルオリジンとブレンドの違い</h3>
                                        <div class="column_text">
                                            <p>自家焙煎にこだわった至福の一杯</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                        <article class="column_wrap">
                            <a href="">
                                <div class="column_inner">
                                    <figure class="column_img_wrap">
                                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="コラム記事のサムネイル画像" />
                                    </figure>
                                    <div class="column_meta">
                                        <div class="categories_wrap">
                                            <time class="column_date" datetime="the_time">2022.03.14</time>
                                            <ul class="categories">
                                                <li>コーヒー入門知識</li>
                                            </ul>
                                        </div>
                                        <h3>シングルオリジンとブレンドの違い</h3>
                                        <div class="column_text">
                                            <p>自家焙煎にこだわった至福の一杯</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </div>
                    <!-- recommend_store_list -->
                </div>
                <!-- viewport -->
            </div>
            <!-- recommend_store_wrap -->
        </section>
        <!-- recommend -->

        <!-- ▼サイドバー▼ -->

        <div class="column2_aside">

            <div class="wrap">
                <div class="inner">
                    <div class="side_scrool">
                        <!-- 検索BOX -->
                        <aside id="search_box" class="column_search">
                            <form method="get" action="#" class="search_container">
                                <input type="text" size="25" placeholder="キーワード検索">
                                <input type="submit" value="&#xf002">
                            </form>
                        </aside>
                        <!-- コラムカテゴリ -->

                        <?php get_sidebar('categories') ?>

                        <!-- ニュース -->

                        <?php get_sidebar('news') ?>
                    </div>

                </div>
                <!-- inner -->
            </div>
            <!-- wrap -->
        </div>
    </section>
</main>

<?php get_footer(); ?>