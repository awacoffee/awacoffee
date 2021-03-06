<?php

/**
 * Template Name: ニュースの全カテゴリーを表示するニュース一覧ページ
 * Description: ニュースの全カテゴリーを表示するニュース一覧ページのテンプレート
 */
?>

<?php get_header(); ?>

<main id="news_under">
    <div class="header_img_bg mainvisual_wrap"></div>

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

                    <?php

                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $args = array(
                        'post_type' => 'post',
                        'paged' => $paged,
                        'post_per_page' => -1,
                    );
                    $taxquerysp = array('relation' => 'AND');
                    $args['tax_query'] = $taxquerysp;
                    $the_query = new WP_Query($args);
                    if ($the_query->have_posts()) :
                    ?>
                        <?php while ($the_query->have_posts()) : ?>
                            <?php $the_query->the_post(); ?>

                            <?php
                            get_template_part('template-parts/loop', 'news');
                            ?>

                        <?php endwhile; ?>
                    <?php endif; ?>
                    <div class="pagination_wrap">
                        <?php if (function_exists('wp_pagenavi')) {
                            wp_pagenavi(array('query' => $the_query));
                        } ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- サイドバー -->
        <div class="column2_aside">
            <div class="wrap">
                <div class="inner">
                    <div class="side_scrool">
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
    </div>
</main>


<?php get_footer(); ?>
