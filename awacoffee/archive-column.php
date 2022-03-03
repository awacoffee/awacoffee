<?php get_header(); ?>

<!-- <?php
        $pageid = get_the_ID();
        print_r($pageid);
        ?> -->

<main id="column_list_under">
    <!-- ▼タイトルエリア▼ -->
    <div class="wrap">
        <div class="under_title inner">
            <div class="under_wrap_title">
                <p>Column</p>
                <h1>コラム</h1>
            </div>
        </div>
    </div>
    <!-- /.wrap -->

    <section>
        <div class="wrap">
            <div class="inner">
                <div class="text_btns">
                    <ul class="column_tab_wrap">
                        <li class="btn">
                            <h2 class="column_active"><a href="#tisiki" class="column_item ">入門知識</a></h2>
                        </li>
                        <li class="btn">
                            <h2><a href="#toku" class="column_item">特集</a></h2>
                        </li>
                        <li class="btn">
                            <h2><a href="#bulog" class="column_item">ブログ</a></h2>
                        </li>
                    </ul>
                    <div id="search_box" class="column_search">
                        <form method="get" action="#" class="search_container">
                            <input type="text" size="25" placeholder="キーワード検索">
                            <input type="submit" value="&#xf002">
                        </form>
                    </div>
                </div>


                <div id="tisiki" class="cards_wrap is_column_active">
                    <div class="card_wrap">
                        <?php
                        $args = array(
                            'post_type' => 'column',
                            'posts_per_page' => -1,
                            'orderby' => 'rand',
                        );
                        $taxquerysp = array('relation' => 'AND');

                        $args['tax_query'] = $taxquerysp;

                        $the_query = new WP_Query($args);
                        if ($the_query->have_posts()) :
                        ?>
                            <?php while ($the_query->have_posts()) : ?>
                                <?php $the_query->the_post(); ?>
                                <?php get_template_part('template-parts/loop', 'column'); ?>
                            <?php endwhile; ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- inner -->
        </div>
        <!-- wrap -->
    </section>
</main>

<?php get_footer(); ?>