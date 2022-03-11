<!--検索結果-->
<?php
//カスタム投稿「エリア」
if (isset($_GET['area'])) {
    $searchArea = $_GET['area'];
    $searchAreaObj = get_term_by('slug', $searchArea, 'area');
    $searchAreaStr = $searchAreaObj->name;
}
//カスタム投稿「目的」
if (isset($_GET['purpose'])) {
    $searchPurpose = $_GET['purpose'];
    $searchPurposeObj = get_term_by('slug', $searchPurpose, 'purpose');
    $searchPurposeStr = $searchPurposeObj->name;
}
//カスタム投稿「シチュエーション」
if (isset($_GET['situation'])) {
    $searchSituation = $_GET['situation'];
}
//カスタム投稿「サービス・設備」
if (isset($_GET['services'])) {
    $searchService = $_GET['services'];
}

?>

<?php get_header(); ?>

<body>
    <main>
        <div class="header_img_bg mainvisual_wrap"></div>
        <!-- ▼タイトルエリア▼ -->
        <div class="wrap mainvisual_wrap">
            <div class="under_title inner">
                <div class="under_wrap_title">
                    <p>Result</p>
                    <h1>条件検索結果一覧</h1>
                </div>
            </div>
        </div>
        <!-- /.wrap -->

        <section class="result">
            <div class="wrap">
                <div class="inner">
                    <h2>検索結果</h2>
                    <div class="search_words_area">
                        <div class="search_words_box">
                            <h3 class="area_cate">エリアの指定</h3>
                            <ul class="search_words_list">
                                <li class="search_words_item">
                                    <!--カスタム投稿「エリア」のターム名表示-->
                                    <?php
                                    if (isset($_GET['area'])) {
                                        if ($searchAreaObj) echo $searchAreaStr;
                                    }
                                    ?>
                                </li>
                            </ul>
                        </div>
                        <div class="search_words_box">
                            <h3 class="area_cate">目的の指定</h3>
                            <ul class="search_words_list">
                                <li class="search_words_item">
                                    <!-- カスタム投稿「目的」のターム名表示 -->
                                    <?php
                                    if (isset($_GET['purpose'])) {
                                        if ($searchPurposeObj) echo $searchPurposeStr;
                                    }
                                    ?>
                                </li>
                            </ul>
                        </div>
                        <div class="search_words_box">
                            <h3 class="area_cate">
                                <!-- シチュエーションの指定 -->
                            </h3>
                            <ul class="search_words_list">
                                <?php if (isset($_GET['situation'])) : ?>
                                    <?php foreach ($searchSituation as $val) : ?>
                                        <?php $value = get_term_by('slug', $val, 'situation'); ?>
                                        <li class="search_words_item">
                                            <?php print_r($value->name); ?>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                        <div class="search_words_box">
                            <h3 class="area_cate">
                                <!-- サービス・設備の指定 -->
                            </h3>
                            <ul class="search_words_list">
                                <?php if (isset($_GET['services'])) : ?>
                                    <?php foreach ($searchService as $leo) : ?>
                                        <?php $leos = get_term_by('slug', $leo, 'services'); ?>
                                        <li class="search_words_item">
                                            <?php print_r($leos->name); ?>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div>
                    <!-- result_area -->

                    <div class="result_area">

                        <div class="result_list_area">
                            <div class="box">
                                <div class="sp_stores_cards store_lists">
                                    <?php
                                    //GETとってクエリ化
                                    if ($_GET) {
                                        //まずは最低限の条件を設定しておく
                                        $qarr = array(
                                            'numberposts' => -1,
                                            'post_status' => 'publish',
                                            'post_type' => 'shop',
                                            'tax_query' => array(
                                                'relation' => 'AND',
                                            )
                                        );

                                        //GETを取得しループ
                                        foreach ($_GET as $key => $value) {

                                            //tax_query配下に配列を追加していく
                                            array_push($qarr["tax_query"], array(
                                                'taxonomy' => $key,
                                                'field' => 'slug',
                                                'terms' => $value,
                                                'operator' => 'AND' //複数のチェックをどう処理するか
                                            ));
                                        }
                                    } else {
                                        $qarr = ''; //GETがなければget_postsの引数を空に
                                    }
                                    $the_query =  new WP_Query($qarr);
                                    if ($the_query->have_posts()) :
                                    ?>
                                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                            <?php get_template_part('template-parts/loop', 'area-sp'); ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <!-- sp_stores_cars -->
                            <div class="box">
                                <div class="pc_stores_cards store_lists">
                                    <?php
                                    //GETとってクエリ化
                                    if ($_GET) {

                                        //まずは最低限の条件を設定しておく
                                        $qarr = array(
                                            'numberposts' => -1,
                                            'post_status' => 'publish',
                                            'post_type' => 'shop',
                                            'tax_query' => array(
                                                'relation' => 'AND',
                                            )
                                        );

                                        //GETを取得しループ
                                        foreach ($_GET as $key => $value) {

                                            //tax_query配下に配列を追加していく
                                            array_push($qarr["tax_query"], array(
                                                'taxonomy' => $key,
                                                'field' => 'slug',
                                                'terms' => $value,
                                                'operator' => 'AND' //複数のチェックをどう処理するか
                                            ));
                                        }
                                    } else {
                                        $qarr = ''; //GETがなければget_postsの引数を空に
                                    }
                                    $the_query =  new WP_Query($qarr);
                                    if ($the_query->have_posts()) :
                                    ?>
                                        <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                                            <?php get_template_part('template-parts/loop', 'area'); ?>
                                        <?php endwhile; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    //検索結果の件数
                    $found_cnt = $the_query->post_count;
                    ?>
                    <div class="result_text">
                        <?php
                        if (isset($found_cnt)) {
                            if ($found_cnt >= 1) {
                                echo $found_cnt . '件見つかりました';
                            } else if ($found_cnt == 0) {
                                echo 'お探しの情報は見つかりませんでした';
                            }
                        }
                        ?>
                    </div>
                    <div class="result_map">
                        <div class="result_text">MAP</div>
                        <div class="result_map_box">
                            <div class="acf-map" data-zoom="16">
                                <?php if (have_posts()) : ?>
                                    <?php while (have_posts()) : the_post(); ?>
                                        <?php
                                        $googlemap = get_field('location'); //get_field()内の値は、2-2.で追加したフィールドの「field_name」
                                        // print_r($googlemap);
                                        ?>
                                        <div class="marker" data-lat="<?php echo esc_attr($googlemap['lat']); ?>" data-lng="<?php echo esc_attr($googlemap['lng']); ?>"></div>
                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <style>
                                .acf-map {
                                    width: 100%;
                                    height: 450px;
                                    /* position: initial !important; */
                                    border: #ccc solid 1px;
                                    /* margin: 20px 0; */
                                }

                                .acf-map img {
                                    display: block;
                                    height: 100%;
                                }
                            </style>
                        </div>
                    </div>
                    <div class="btn_wrap">
                        <a class="btn_link" href="<?php echo get_permalink(243); ?>"><span>検索条件を変更する</span></a>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php get_footer(); ?>
