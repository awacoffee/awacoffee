<?php get_header(); ?>

<main>
    <?php
    // 開いているページの情報を取得
    $purpose_slug = get_query_var('purpose');
    $purpose = get_term_by('slug', $purpose_slug, 'purpose');
    ?>
    <!-- ▼タイトルエリア▼ -->
    <div class="wrap">
        <div class="under_title inner">
            <div class="under_wrap_title">
                <!-- <p>Drink</p>
                <h1>お店で飲みたい</h1> -->
                <p><?php echo ucfirst($purpose->slug); ?></p>
                <h1><?php echo $purpose->name; ?></h1>
            </div>
        </div>
    </div>
    <!-- /.wrap -->

    <div class="wrap">
        <div class="inner">
            <!-- 徳島市 -->
            <div class="store_area">
                <h2 class="area_cate">徳島市</h2>
                <div class="sp_stores_cards store_lists">
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <figure>
                                <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/test_01.jpg" alt="" />
                            </figure>
                            <div class="text_inner">
                                <h3 class="stores_name">
                                    ①とよとみ珈琲
                                </h3>
                                <p class="stores_catch">
                                    自家焙煎にこだわった至福の一杯
                                </p>
                                <div class="stores_tags">
                                    <p class="stores_tag">#勉強</p>
                                    <p class="stores_tag">#デート</p>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <figure>
                                <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/test_02.jpg" alt="" />
                            </figure>
                            <div class="text_inner">
                                <h3 class="stores_name">
                                    ②とよとみ珈琲
                                </h3>
                                <p class="stores_catch">
                                    自家焙煎にこだわった至福の一杯
                                </p>
                                <div class="stores_tags">
                                    <p class="stores_tag">#勉強</p>
                                    <p class="stores_tag">#デート</p>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <figure>
                                <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/test_03.jpg" alt="" />
                            </figure>
                            <div class="text_inner">
                                <h3 class="stores_name">
                                    ③とよとみ珈琲
                                </h3>
                                <p class="stores_catch">
                                    自家焙煎にこだわった至福の一杯
                                </p>
                                <div class="stores_tags">
                                    <p class="stores_tag">#勉強</p>
                                    <p class="stores_tag">#デート</p>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <figure>
                                <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/test_04.jpg" alt="" />
                            </figure>
                            <div class="text_inner">
                                <h3 class="stores_name">
                                    ④とよとみ珈琲
                                </h3>
                                <p class="stores_catch">
                                    自家焙煎にこだわった至福の一杯
                                </p>
                                <div class="stores_tags">
                                    <p class="stores_tag">#勉強</p>
                                    <p class="stores_tag">#デート</p>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <figure>
                                <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/test_01.jpg" alt="" />
                            </figure>
                            <div class="text_inner">
                                <h3 class="stores_name">
                                    ①とよとみ珈琲
                                </h3>
                                <p class="stores_catch">
                                    自家焙煎にこだわった至福の一杯
                                </p>
                                <div class="stores_tags">
                                    <p class="stores_tag">#勉強</p>
                                    <p class="stores_tag">#デート</p>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <figure>
                                <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/test_02.jpg" alt="" />
                            </figure>
                            <div class="text_inner">
                                <h3 class="stores_name">
                                    ②とよとみ珈琲
                                </h3>
                                <p class="stores_catch">
                                    自家焙煎にこだわった至福の一杯
                                </p>
                                <div class="stores_tags">
                                    <p class="stores_tag">#勉強</p>
                                    <p class="stores_tag">#デート</p>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <figure>
                                <img class="card_img" src="./assets/img/test_03.jpg" alt="" />
                            </figure>
                            <div class="text_inner">
                                <h3 class="stores_name">
                                    ③とよとみ珈琲
                                </h3>
                                <p class="stores_catch">
                                    自家焙煎にこだわった至福の一杯
                                </p>
                                <div class="stores_tags">
                                    <p class="stores_tag">#勉強</p>
                                    <p class="stores_tag">#デート</p>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <figure>
                                <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/test_04.jpg" alt="" />
                            </figure>
                            <div class="text_inner">
                                <h3 class="stores_name">
                                    ④とよとみ珈琲
                                </h3>
                                <p class="stores_catch">
                                    自家焙煎にこだわった至福の一杯
                                </p>
                                <div class="stores_tags">
                                    <p class="stores_tag">#勉強</p>
                                    <p class="stores_tag">#デート</p>
                                </div>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="pc_stores_cards store_lists">
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/test_01.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        ①とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/test_02.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        ②とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/test_03.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        ③とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/test_04.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        ④とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/test_05.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        ⑤とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/test_06.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        ⑥とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/test_07.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        ⑦とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/test_08.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        ⑧とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="more_btn"><button>more</button></div>
            </div>
            <!-- store_area -->

            <!-- 東部 -->
            <div class="store_area">
                <h2 class="area_cate">東部</h2>
                <div class="sp_stores_cards store_lists">
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <figure>
                                <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                            </figure>
                            <div class="text_inner">
                                <h3 class="stores_name">
                                    とよとみ珈琲
                                </h3>
                                <p class="stores_catch">
                                    自家焙煎にこだわった至福の一杯
                                </p>
                                <div class="stores_tags">
                                    <p class="stores_tag">#勉強</p>
                                    <p class="stores_tag">#デート</p>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <figure>
                                <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                            </figure>
                            <div class="text_inner">
                                <h3 class="stores_name">
                                    とよとみ珈琲
                                </h3>
                                <p class="stores_catch">
                                    自家焙煎にこだわった至福の一杯
                                </p>
                                <div class="stores_tags">
                                    <p class="stores_tag">#勉強</p>
                                    <p class="stores_tag">#デート</p>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <figure>
                                <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                            </figure>
                            <div class="text_inner">
                                <h3 class="stores_name">
                                    とよとみ珈琲
                                </h3>
                                <p class="stores_catch">
                                    自家焙煎にこだわった至福の一杯
                                </p>
                                <div class="stores_tags">
                                    <p class="stores_tag">#勉強</p>
                                    <p class="stores_tag">#デート</p>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <figure>
                                <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                            </figure>
                            <div class="text_inner">
                                <h3 class="stores_name">
                                    とよとみ珈琲
                                </h3>
                                <p class="stores_catch">
                                    自家焙煎にこだわった至福の一杯
                                </p>
                                <div class="stores_tags">
                                    <p class="stores_tag">#勉強</p>
                                    <p class="stores_tag">#デート</p>
                                </div>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="pc_stores_cards store_lists">
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="more_btn"><button>more</button></div>
            </div>
            <!-- store_area -->

            <!-- 西部 -->
            <div class="store_area">
                <h2 class="area_cate">西部</h2>
                <div class="sp_stores_cards store_lists">
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <figure>
                                <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                            </figure>
                            <div class="text_inner">
                                <h3 class="stores_name">
                                    とよとみ珈琲
                                </h3>
                                <p class="stores_catch">
                                    自家焙煎にこだわった至福の一杯
                                </p>
                                <div class="stores_tags">
                                    <p class="stores_tag">#勉強</p>
                                    <p class="stores_tag">#デート</p>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <figure>
                                <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                            </figure>
                            <div class="text_inner">
                                <h3 class="stores_name">
                                    とよとみ珈琲
                                </h3>
                                <p class="stores_catch">
                                    自家焙煎にこだわった至福の一杯
                                </p>
                                <div class="stores_tags">
                                    <p class="stores_tag">#勉強</p>
                                    <p class="stores_tag">#デート</p>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <figure>
                                <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                            </figure>
                            <div class="text_inner">
                                <h3 class="stores_name">
                                    とよとみ珈琲
                                </h3>
                                <p class="stores_catch">
                                    自家焙煎にこだわった至福の一杯
                                </p>
                                <div class="stores_tags">
                                    <p class="stores_tag">#勉強</p>
                                    <p class="stores_tag">#デート</p>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <figure>
                                <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                            </figure>
                            <div class="text_inner">
                                <h3 class="stores_name">
                                    とよとみ珈琲
                                </h3>
                                <p class="stores_catch">
                                    自家焙煎にこだわった至福の一杯
                                </p>
                                <div class="stores_tags">
                                    <p class="stores_tag">#勉強</p>
                                    <p class="stores_tag">#デート</p>
                                </div>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="pc_stores_cards store_lists">
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="more_btn"><button>more</button></div>
            </div>
            <!-- store_area -->

            <!-- 南部 -->
            <div class="store_area">
                <h2 class="area_cate">南部</h2>
                <div class="sp_stores_cards store_lists">
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <figure>
                                <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                            </figure>
                            <div class="text_inner">
                                <h3 class="stores_name">
                                    とよとみ珈琲
                                </h3>
                                <p class="stores_catch">
                                    自家焙煎にこだわった至福の一杯
                                </p>
                                <div class="stores_tags">
                                    <p class="stores_tag">#勉強</p>
                                    <p class="stores_tag">#デート</p>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <figure>
                                <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                            </figure>
                            <div class="text_inner">
                                <h3 class="stores_name">
                                    とよとみ珈琲
                                </h3>
                                <p class="stores_catch">
                                    自家焙煎にこだわった至福の一杯
                                </p>
                                <div class="stores_tags">
                                    <p class="stores_tag">#勉強</p>
                                    <p class="stores_tag">#デート</p>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <figure>
                                <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                            </figure>
                            <div class="text_inner">
                                <h3 class="stores_name">
                                    とよとみ珈琲
                                </h3>
                                <p class="stores_catch">
                                    自家焙煎にこだわった至福の一杯
                                </p>
                                <div class="stores_tags">
                                    <p class="stores_tag">#勉強</p>
                                    <p class="stores_tag">#デート</p>
                                </div>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <figure>
                                <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                            </figure>
                            <div class="text_inner">
                                <h3 class="stores_name">
                                    とよとみ珈琲
                                </h3>
                                <p class="stores_catch">
                                    自家焙煎にこだわった至福の一杯
                                </p>
                                <div class="stores_tags">
                                    <p class="stores_tag">#勉強</p>
                                    <p class="stores_tag">#デート</p>
                                </div>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="pc_stores_cards store_lists">
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                    <article class="stores_card">
                        <a href="https://awa-coffee.com/shop/takashima/">
                            <div class="front_card">
                                <figure class="stores_img">
                                    <img class="card_img" src="<?php echo get_template_directory_uri(); ?>/assets/img/4-3img.jpg" alt="" />
                                </figure>
                                <div class="stores_tags">
                                    <p class="stores_tag">
                                        シチュエーション別
                                    </p>
                                    <p class="stores_tag">アイウエオ</p>
                                </div>

                                <div class="text_inner">
                                    <h3 class="stores_name">
                                        とよとみ珈琲
                                    </h3>
                                    <p class="stores_catch">
                                        自家焙煎にこだわった至福の一杯
                                        自家焙煎に
                                    </p>
                                </div>
                            </div>
                            <div class="back_card">
                                <p class="card_text">
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                    ここにテキストが入ります
                                </p>
                            </div>
                        </a>
                    </article>
                </div>
                <div class="more_btn"><button>more</button></div>
            </div>
            <!-- store_area -->
        </div>
    </div>
</main>

<?php get_footer(); ?>