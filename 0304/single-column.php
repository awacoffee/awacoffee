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
                    <div class="s_column_title_wrap">
                        <h1 class="column_title">
                            コーヒーショップでの過ごし方①おひとり様編
                        </h1>
                        <?php
                        //コラムカテゴリーのターム名表示
                        $category_slug = 'column_category';
                        $category_terms = wp_get_object_terms($post->ID, $category_slug);
                        //コラムタグのターム名表示
                        $tag_slug = 'column_tag';
                        $tag_terms = wp_get_object_terms($post->ID, $tag_slug);
                        echo '<ul class="tags">';
                        foreach ($category_terms as $category_term) {
                            echo '<li class="tag">' . $category_term->name . '</li>';
                        }
                        foreach ($tag_terms as $tag_term) {
                            echo '<li class="tag">' . $tag_term->name . '</li>';
                        }
                        echo '</ul>';
                        ?>
                        <p class="s_column_title_text">
                            ここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入ります
                        </p>
                    </div>

                    <div class="s_column_card">
                        <h2 class="s_column_subtitle">読書をする</h2>
                        <figure class="s_column_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/store-img01.jpg" alt="" />
                        </figure>
                        <figcaption>写真のキャプションが入ります</figcaption>
                        <p class="s_column_text">
                            ここにテキストが入りますここにテキストが入りますここにテキストが入ります<strong>太字&色CSSテスト</strong>ここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入ります
                        </p>
                    </div>
                    <div class="s_column_card">
                        <h2 class="s_column_subtitle">読書をする</h2>
                        <figure class="s_column_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/store-img01.jpg" alt="" />
                        </figure>
                        <figcaption>写真のキャプションが入ります</figcaption>
                        <ul class="s_column_text box">
                            <li>リストスタイルのテスト</li>
                            <li>枠線のテスト</li>
                            <li>リストスタイルのテスト</li>
                            <li>リストスタイルのテスト</li>
                        </ul>
                        <p class="s_column_text">
                            ここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入ります
                        </p>
                    </div>
                    <div class="s_column_card">
                        <h2 class="s_column_subtitle">読書をする</h2>
                        <figure class="s_column_img">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/store-img01.jpg" alt="" />
                        </figure>
                        <figcaption>写真のキャプションが入ります</figcaption>
                        <h3>見出しLv.3のテスト</h3>
                        <p class="s_column_text">
                            ここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入ります
                        </p>
                    </div>
                    <!-- 最後のカードだけまとめ記事 -->
                    <div class="s_column_card">
                        <h2 class="s_column_subtitle">まとめ</h2>
                        <p class="s_column_text">
                            ここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入りますここにテキストが入ります
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <!-- ▼レコメンド▼ -->
        <section class="recommend">
            <div class="wrap">
                <div class="inner">
                    <h2 class="recommend_title">あなたへのおすすめ</h2>
                    <div class="card_wrap">
                        <?php
                        // メニューの投稿タイプ
                        $category = array(
                            'post_type' => 'column',
                            'posts_per_page' => 3,
                            'orderby' => 'rand',
                            'post__not_in' => array($post->ID),
                        );
                        // エリアで絞り込む
                        $categories = array_shift(get_the_terms($post->ID, 'column_category'));
                        $taxquerysp = array('relation' => 'AND');
                        $taxquerysp[] = array(
                            'taxonomy' => 'column_category',
                            'terms' => $categories->slug,
                            'field' => 'slug',
                        );
                        $args['tax_query'] = $taxquerysp;

                        $the_query =  new WP_Query($args);
                        if ($the_query->have_posts()) :
                        ?>
                            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                <?php get_template_part('template-parts/loop', 'column'); ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
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
                        <aside>
                            <h2 class="side_title">コラムカテゴリ一覧</h2>
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
                                <li class="list">
                                    <a href="">おしらせ</a>
                                </li>
                                <li class="list">
                                    <a href="">更新情報</a>
                                </li>
                            </ul>
                        </aside>
                    </div>

                </div>
                <!-- inner -->
            </div>
            <!-- wrap -->
        </div>
    </section>
</main>

<?php get_footer(); ?>
