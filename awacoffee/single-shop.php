<?php get_header(); ?>

<main>
    <!-- ▼タイトルエリア▼ -->
    <div class="wrap">
        <div class="under_title inner">
            <div class="under_wrap_title">
                <p>Store</p>
                <h1>お店で飲みたい</h1>
            </div>
        </div>
    </div>
    <!-- /.wrap -->

    <div class="column2_flex wrap">
        <article class="column2_article">
            <div class="wrap">
                <div class="inner">
                    <div class="store_card">
                        <!-- ※h1にするのか問題 -->
                        <h1 class="store_name"><?php the_title(); ?></h1>
                        <p class="store_catch">
                            <?php the_field('catchphrase'); ?>
                        </p>
                        <!-- ▼タグ・BM・いいね▼ -->
                        <ul class="store_tags">
                            <li class="store_tag">
                                <a href="">タグ</a>
                            </li>
                            <li class="store_tag">
                                <a href="">タグ</a>
                            </li>
                            <li class="store_tag">
                                <a href="">タグ</a>
                            </li>
                            <li class="store_tag">
                                <a href="">タグ</a>
                            </li>
                        </ul>
                        <div class="store_fun_jump">
                            <a href="#store_info" class="store_info_btn">店舗情報へジャンプ</a>
                            <div class="store_fun">
                                <div class="store_mark"></div>
                                <div class="store_like">
                                    <div class="wpulike wpulike-heart">
                                        <div class="wp_ulike_general_class wp_ulike_is_liked">
                                            <button type="button" aria-label="いいねボタン" data-ulike-id="111" data-ulike-nonce="f54cf426ee" data-ulike-type="post" data-ulike-template="wpulike-heart" data-ulike-display-likers="" data-ulike-likers-style="popover" class="wp_ulike_btn wp_ulike_put_image image-unlike wp_ulike_btn_is_active wp_post_btn_111"></button>
                                            <span class="count-box wp_ulike_counter_up" data-ulike-counter-value="+1">+1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- ▼画像切り替え▼ -->
                        <?php
                        $pic1 = get_field('pic1');
                        $pic2 = get_field('pic2');
                        $pic3 = get_field('pic3');
                        // 大サイズ画像のURL
                        $pic_url1 = $pic1['sizes']['large'];
                        $pic_url2 = $pic2['sizes']['large'];
                        $pic_url3 = $pic3['sizes']['large'];
                        ?>
                        <div class="store_img_area">
                            <div id="mainImg" class="store_imgL">
                                <img src="<?php echo $pic_url1; ?>" alt="" />
                            </div>
                            <ul id="thumbImg" class="store_imgs">
                                <li class="current store_img">
                                    <img src="<?php echo $pic_url1; ?>" alt="" />
                                </li>
                                <li class="store_img">
                                    <img src="<?php echo $pic_url2; ?>" alt="" />
                                </li>
                                <li class="store_img">
                                    <img src="<?php echo $pic_url3; ?>" alt="" />
                                </li>
                            </ul>
                        </div>

                        <!-- ▼リード文▼ -->
                        <p class="store_desc">
                            <?php the_field('shop_about'); ?>
                        </p>

                        <div class="store_text_inner">
                            <h2>お店のこだわり</h2>
                            <div class="store_illust_01"></div>
                        </div>
                        <div class="store_commit">
                            <p class="store_commit_text">
                                <?php the_field('commitment'); ?>
                            </p>
                        </div>

                        <div class="store_text_inner">
                            <h2>おすすめメニュー</h2>
                            <div class="store_illust_02"></div>
                        </div>
                        <div class="store_menu_area">
                            <?php the_field('recommendation'); ?>
                        </div>
                        <!-- store_menu_area -->

                        <h2 id="store_info">基本情報</h2>
                        <dl class="details">
                            <dt class="deta_detail">店舗名</dt>
                            <dd><?php the_title(); ?></dd>

                            <dt class="deta_detail">住所</dt>
                            <dd><?php the_field('address'); ?></dd>

                            <dt class="deta_detail">電話番号</dt>
                            <dd><?php the_field('phonenumber'); ?></dd>

                            <dt class="deta_detail">
                                営業時間・定休日
                            </dt>
                            <dd>
                                <?php the_field('open'); ?>
                            </dd>

                            <dt class="deta_detail">駐車場</dt>
                            <dd><?php the_field('parking'); ?></dd>

                            <dt class="deta_detail">喫煙スペース</dt>
                            <dd>
                                <?php if (get_field('smoking_area')) : ?>
                                    <span>あり</span>
                                <?php else : ?>
                                    <span>なし</span>
                                <?php endif; ?>
                            </dd>

                            <?php if (get_field('menu')) : ?>
                                <dt class="deta_detail">メニュー</dt>
                                <dd>
                                    <?php
                                    $menus = get_field('menu');
                                    foreach ($menus as $key => $menu) {
                                        echo $menu;
                                        if ($menu !== end($menus)) {
                                            echo ' ';
                                        }
                                    }
                                    ?>
                                </dd>
                            <?php endif; ?>

                            <dt class="deta_detail">
                                クレジットカード
                            </dt>
                            <?php if (get_field('credit_card')) : ?>
                                <dd>利用可：
                                    <?php
                                    $credit_cards = get_field('credit_card');
                                    foreach ($credit_cards as $key => $credit_card) {
                                        echo $credit_card;
                                        if ($credit_card !== end($credit_cards)) {
                                            echo '、';
                                        }
                                    }
                                    ?>
                                </dd>
                            <?php else : ?>
                                <dd>
                                    <?php echo "利用できるクレジットカードはございません。" ?>
                                </dd>
                            <?php endif; ?>

                            <dt class="deta_detail">電子マネー</dt>
                            <?php if (get_field('pay')) : ?>
                                <dd>利用可：

                                    <?php
                                    $pays = get_field('pay');
                                    foreach ($pays as $key => $pay) {
                                        echo $pay;
                                        if ($pay !== end($pays)) {
                                            echo '、';
                                        }
                                    }
                                    ?>
                                </dd>
                            <?php else : ?>
                                <dd>
                                    <?php echo "利用できる電子マネーはございません。" ?>
                                </dd>
                            <?php endif; ?>

                            <?php if (get_field('shopurl')) : ?>
                                <dt class="deta_detail">URL</dt>
                                <dd><a href="<?php the_field('shopurl'); ?>"><?php the_field('shopurl'); ?></a></dd>
                            <?php endif; ?>

                            <?php if (get_field('instagram_url')) : ?>
                                <dt class="deta_detail">INSTAGRAM</dt>
                                <dd><a href="<?php the_field('instagram_url'); ?>"><?php the_field('instagram_url'); ?></a></dd>
                            <?php endif; ?>
                        </dl>

                        <h2>アクセス</h2>
                        <div class="store_map" style="padding:0px;">
                            <?php
                            $googlemap = get_field('location'); //get_field()内の値は、2-2.で追加したフィールドの「field_name」
                            // print_r($googlemap);
                            ?>
                            <div class="acf-map" data-zoom="16">
                                <div class="marker" data-lat="<?php echo esc_attr($googlemap['lat']); ?>" data-lng="<?php echo esc_attr($googlemap['lng']); ?>"></div>
                            </div>

                            <style>
                                .acf-map {
                                    width: 100%;
                                    height: 450px;
                                    /* position: initial !important; */
                                    border: #ccc solid 1px;
                                    margin: 20px 0;
                                }

                                .acf-map img {
                                    display: block;
                                    height: 100%;
                                }

                                /* // レスポンシブ対応する場合は、各自で追記してください */
                            </style>
                        </div>
                    </div>
                    <!-- store_card -->
                </div>
                <!-- inner -->
            </div>
            <!-- wrap -->
        </article>

        <!-- ▼レコメンド▼ -->
        <section class="recommend">
            <div class="wrap">
                <div class="inner">
                    <h2 class="recommend_title">あなたへのおすすめ</h2>
                    <ul class="recommend_store_list">
                        <div class="stores_wrap_card2">
                            <div class="stores_wrap_card_img2"></div>
                            <div class="store_card_inner2">
                                <div class="stores_wrap_card_name2">
                                    とよとみ珈琲
                                </div>
                                <div class="stores_wrap_card_catch2">
                                    自家焙煎にこだわった至福の一杯
                                </div>
                                <div class="stores_wrap_card_tags2">
                                    <div class="stores_wrap_card_tag2">
                                        #勉強
                                    </div>
                                    <div class="stores_wrap_card_tag2">
                                        #デート
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="stores_wrap_card2">
                            <div class="stores_wrap_card_img2"></div>
                            <div class="store_card_inner2">
                                <div class="stores_wrap_card_name2">
                                    とよとみ珈琲
                                </div>
                                <div class="stores_wrap_card_catch2">
                                    自家焙煎にこだわった至福の一杯
                                </div>
                                <div class="stores_wrap_card_tags2">
                                    <div class="stores_wrap_card_tag2">
                                        #勉強
                                    </div>
                                    <div class="stores_wrap_card_tag2">
                                        #デート
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="stores_wrap_card2">
                            <div class="stores_wrap_card_img2"></div>
                            <div class="store_card_inner2">
                                <div class="stores_wrap_card_name2">
                                    とよとみ珈琲
                                </div>
                                <div class="stores_wrap_card_catch2">
                                    自家焙煎にこだわった至福の一杯
                                </div>
                                <div class="stores_wrap_card_tags2">
                                    <div class="stores_wrap_card_tag2">
                                        #勉強
                                    </div>
                                    <div class="stores_wrap_card_tag2">
                                        #デート
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="stores_wrap_card2">
                            <div class="stores_wrap_card_img2"></div>
                            <div class="store_card_inner2">
                                <div class="stores_wrap_card_name2">
                                    とよとみ珈琲
                                </div>
                                <div class="stores_wrap_card_catch2">
                                    自家焙煎にこだわった至福の一杯
                                </div>
                                <div class="stores_wrap_card_tags2">
                                    <div class="stores_wrap_card_tag2">
                                        #勉強
                                    </div>
                                    <div class="stores_wrap_card_tag2">
                                        #デート
                                    </div>
                                </div>
                            </div>
                        </div>
                    </ul>
                    <!-- recommend_store_list -->
                </div>
                <!-- viewport -->
            </div>
            <!-- recommend_store_wrap -->
        </section>
        <!-- recommend -->

        <!-- ▼サイドバー▼ -->
        <aside class="column2_aside">
            <div class="wrap">
                <div class="inner">
                    <div class="side_scrool">
                        <ul class="side_search">
                            <li class="side_title">
                                <span>エリアから探す</span>
                                <ul class="side_lists">
                                    <li class="list">
                                        <a href="">徳島市</a>
                                    </li>
                                    <li class="list">
                                        <a href="">東部</a>
                                    </li>
                                    <li class="list">
                                        <a href="">西部</a>
                                    </li>
                                    <li class="list">
                                        <a href="">南部</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="side_title">
                                <span>目的から探す</span>
                                <ul class="side_lists">
                                    <li class="list">
                                        <a href="">店で飲みたい</a>
                                    </li>
                                    <li class="list">
                                        <a href="">豆を買いたい</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>

                        <!-- ▼インタビュー記事がある場合に表示▼ -->
                        <div class="side_column">
                            <p class="side_column_title">
                                このお店のインタビュー
                            </p>
                            <article class="side_column_wrap">
                                <div class="side_column_inner">
                                    <div class="side_column_img_wrap">
                                        <a href="">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/column_sample.jpeg" alt="thumbnail" />
                                        </a>
                                    </div>
                                    <div class="side_column_meta">
                                        <time class="side_column_date" datetime="the_time">2022年03月14日</time>
                                        <h3>
                                            シングルオリジンとブレンドの違い
                                        </h3>
                                        <div class="side_column_text">
                                            <p>
                                                自家焙煎にこだわった至福の一杯
                                            </p>
                                        </div>
                                        <div>
                                            <ul class="categories">
                                                <li>
                                                    コーヒー入門知識
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <!-- side_column_card -->
                        </div>
                        <!-- side_column -->
                    </div>
                </div>
                <!-- inner -->
            </div>
            <!-- wrap -->
        </aside>
    </div>
    <!-- column2_flex -->
</main>

<?php get_footer(); ?>
