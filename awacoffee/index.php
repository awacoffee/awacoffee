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
  <!-- CSSでの指定 /CSSに移したら消す-->
  <!-- font-family: rollerscript-rough, sans-serif;
            font-weight: 400;
            font-style: normal; -->
  <link rel="stylesheet" href="https://use.typekit.net/twf1hjd.css" />

  <!-- ▼フォント:Shippori Mincho B1(Regular,Medium,Bold) -->
  <!-- ▼フォント:Noto Sans Japanese(Regular,Medium,Bold) -->
  <!-- CSSでの指定 /CSSに移したら消す-->
  <!-- font-family: 'Noto Sans JP', sans-serif;
            font-family: 'Shippori Mincho B1', serif; -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Shippori+Mincho+B1:wght@400;500;700&display=swap" rel="stylesheet" />
  <!-- ▼ファビコン▼ -->
  <link rel="icon" href="" />

  <!-- ▼FontAwesome▼ -->
  <link href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" rel="stylesheet" />

  <!-- ▼リセットCSS▼ -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/reset.css" rel="stylesheet" media="all" />
  <!-- ▼共通スタイル▼ -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/common.css" rel="stylesheet" media="all" />
  <!-- ▼indexページのCSS /ファイル名記載する▼ -->
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/index.css" rel="stylesheet" media="all" />

  <title><?php bloginfo('name'); ?></title>
</head>

<body>
  <!-- ▼SP-frontヘッダー▼ -->
  <header>
    <div id="header_wrap" class="header_wrap">
      <div class="header_inner">
        <div id="header_wrap_box" class="header_wrap_box">
          <!-- ▼カップicon▼ -->
          <a href="" class="header_wrap_box_icon">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/header-icon_white.png" alt="Awa Our Coffee Hourのアイコン" />
          </a>
          <nav>
            <ul class="header_nav_list">
              <li>
                <a href="" class="header_nav_item">条件検索</a>
              </li>
              <li>
                <a href="" class="header_nav_item">コラム</a>
              </li>
              <li>
                <a href="" class="header_nav_item">コーヒー入門知識</a>
              </li>
              <li>
                <a href="" class="header_nav_item">マイページ</a>
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
        <div class="header_wrap_logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_aoch.png" alt="" />
        </div>
        <div class="header_wrap_catch">
          とくしまとコーヒー、<br />
          キミと見つけるおいしいひととき
        </div>
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
              <a href=""><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_aoch.png" alt="Awa Our Coffee Hour" /></a>
            </div>
            <ul class="drower_nav_box">
              <li>
                <a href="" class="drower_nav_box_item">店で飲みたい</a>
              </li>
              <li>
                <a href="" class="drower_nav_box_item">豆を買いたい</a>
              </li>
            </ul>
            <ul class="drower_nav_list">
              <li>
                <a href="" class="drower_nav_item">条件検索</a>
              </li>
              <li>
                <a href="" class="drower_nav_item">コラム</a>
              </li>
              <li>
                <a href="" class="drower_nav_item">コーヒー入門知識</a>
              </li>
              <li>
                <a href="" class="drower_nav_item">マイページ</a>
              </li>
              <li>
                <a href="" class="drower_nav_item">お問い合わせ</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>

  <main>
    <section class="about">
      <div class="wrap">
        <div class="inner">
          <div class="wrap_title">
            <p>About</p>
            <h2>このサイトについて</h2>
          </div>
          <div class="wrap_text">
            <p>
              このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。
            </p>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="wrap">
        <div class="inner">
          <div class="wrap_title">
            <p>Stores</p>
            <h2>店舗情報</h2>
          </div>

          <!-- ▼タブメニュー▼ -->
          <ul class="tab_wrap">
            <li class="active">
              <a href="#tab_drink" class="tab_item">店で飲みたい</a>
            </li>
            <li>
              <a href="#tab_beans" class="tab_item">豆を買いたい</a>
            </li>
          </ul>

          <!-- ▼タブ切り替え：店で飲むエリア▼ -->
          <div id="tab_drink" class="area is_active">
            <div class="tab_area_flex">
              <div class="stores_wrap_card2">
                <div class="stores_wrap_card_img2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/free0.jpg" alt="" />
                </div>
                <div class="store_card_inner2">
                  <div class="stores_wrap_card_name2">とよとみ珈琲</div>
                  <div class="stores_wrap_card_catch2">
                    自家焙煎にこだわった至福の一杯
                  </div>
                  <ul class="stores_wrap_card_tags2">
                    <li class="stores_wrap_card_tag2">#勉強</li>
                    <li class="stores_wrap_card_tag2">#デート</li>
                  </ul>
                </div>
              </div>
              <!-- stores_wrap_card2 -->
              <div class="stores_wrap_card2">
                <div class="stores_wrap_card_img2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/free0.jpg" alt="" />
                </div>
                <div class="store_card_inner2">
                  <div class="stores_wrap_card_name2">飲み</div>
                  <div class="stores_wrap_card_catch2">
                    自家焙煎にこだわった至福の一杯
                  </div>
                  <ul class="stores_wrap_card_tags2">
                    <li class="stores_wrap_card_tag2">#勉強</li>
                    <li class="stores_wrap_card_tag2">#デート</li>
                  </ul>
                </div>
              </div>
              <!-- stores_wrap_card2 -->
              <div class="stores_wrap_card2">
                <div class="stores_wrap_card_img2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/free0.jpg" alt="" />
                </div>
                <div class="store_card_inner2">
                  <div class="stores_wrap_card_name2">とよとみ珈琲</div>
                  <div class="stores_wrap_card_catch2">
                    自家焙煎にこだわった至福の一杯
                  </div>
                  <ul class="stores_wrap_card_tags2">
                    <li class="stores_wrap_card_tag2">#勉強</li>
                    <li class="stores_wrap_card_tag2">#デート</li>
                  </ul>
                </div>
              </div>
              <!-- stores_wrap_card2 -->
              <div class="stores_wrap_card2">
                <div class="stores_wrap_card_img2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/free0.jpg" alt="" />
                </div>
                <div class="store_card_inner2">
                  <div class="stores_wrap_card_name2">とよとみ珈琲</div>
                  <div class="stores_wrap_card_catch2">
                    自家焙煎にこだわった至福の一杯
                  </div>
                  <ul class="stores_wrap_card_tags2">
                    <li class="stores_wrap_card_tag2">#勉強</li>
                    <li class="stores_wrap_card_tag2">#デート</li>
                  </ul>
                </div>
              </div>
              <!-- stores_wrap_card2 -->
            </div>
            <!-- tab_area_flex -->

            <!-- お店で飲む一覧に飛ばす -->
            <div class="btn_wrap">
              <a class="btn_link" href="#!"><span>表示テスト:「店で飲む」一覧を見る</span></a>
            </div>
          </div>

          <!-- ▼タブ切り替え：豆を買うエリア▼ -->
          <div id="tab_beans" class="area">
            <div class="tab_area_flex">
              <div class="stores_wrap_card2">
                <div class="stores_wrap_card_img2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/free0.jpg" alt="" />
                </div>
                <div class="store_card_inner2">
                  <div class="stores_wrap_card_name2">とよとみ珈琲</div>
                  <div class="stores_wrap_card_catch2">
                    自家焙煎にこだわった至福の一杯
                  </div>
                  <ul class="stores_wrap_card_tags2">
                    <li class="stores_wrap_card_tag2">#勉強</li>
                    <li class="stores_wrap_card_tag2">#デート</li>
                  </ul>
                </div>
              </div>
              <!-- stores_wrap_card2 -->
              <div class="stores_wrap_card2">
                <div class="stores_wrap_card_img2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/free0.jpg" alt="" />
                </div>
                <div class="store_card_inner2">
                  <div class="stores_wrap_card_name2">買い</div>
                  <div class="stores_wrap_card_catch2">
                    自家焙煎にこだわった至福の一杯
                  </div>
                  <ul class="stores_wrap_card_tags2">
                    <li class="stores_wrap_card_tag2">#勉強</li>
                    <li class="stores_wrap_card_tag2">#デート</li>
                  </ul>
                </div>
              </div>
              <!-- stores_wrap_card2 -->
              <div class="stores_wrap_card2">
                <div class="stores_wrap_card_img2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/free0.jpg" alt="" />
                </div>
                <div class="store_card_inner2">
                  <div class="stores_wrap_card_name2">とよとみ珈琲</div>
                  <div class="stores_wrap_card_catch2">
                    自家焙煎にこだわった至福の一杯
                  </div>
                  <ul class="stores_wrap_card_tags2">
                    <li class="stores_wrap_card_tag2">#勉強</li>
                    <li class="stores_wrap_card_tag2">#デート</li>
                  </ul>
                </div>
              </div>
              <!-- stores_wrap_card2 -->
              <div class="stores_wrap_card2">
                <div class="stores_wrap_card_img2">
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/img/free0.jpg" alt="" />
                </div>
                <div class="store_card_inner2">
                  <div class="stores_wrap_card_name2">とよとみ珈琲</div>
                  <div class="stores_wrap_card_catch2">
                    自家焙煎にこだわった至福の一杯
                  </div>
                  <ul class="stores_wrap_card_tags2">
                    <li class="stores_wrap_card_tag2">#勉強</li>
                    <li class="stores_wrap_card_tag2">#デート</li>
                  </ul>
                </div>
              </div>
              <!-- stores_wrap_card2 -->
            </div>

            <!-- 豆を買う一覧に飛ばす -->
            <div class="btn_wrap">
              <a class="btn_link" href="#!"><span>表示テスト:「豆を買う」一覧を見る</span></a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- 店舗情報 -->

    <section>
      <div class="wrap">
        <div class="inner">
          <div class="wrap_title">
            <p>Pick Up</p>
            <h2>コラム</h2>
          </div>
          <div class="card_wrap">
            <article class="column_wrap">
              <div class="column_inner">
                <div class="img_wrap">
                  <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/column_sample.jpeg" alt="thumbnail" />
                  </a>
                </div>
                <div class="column_meta">
                  <time class="column_date" datetime="the_time">2022年03月14日</time>
                  <h3>シングルオリジンとブレンドの違い</h3>
                  <div class="column_text">
                    <p>自家焙煎にこだわった至福の一杯</p>
                  </div>
                  <div>
                    <ul class="categories">
                      <li>コーヒー入門知識</li>
                    </ul>
                  </div>
                </div>
              </div>
            </article>
            <article class="column_wrap">
              <div class="column_inner">
                <div class="img_wrap">
                  <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/column_sample.jpeg" alt="thumbnail" />
                  </a>
                </div>
                <div class="column_meta">
                  <time class="column_date" datetime="the_time">2022年03月14日</time>
                  <h3>とよとみ珈琲</h3>
                  <div class="column_text">
                    <p>自家焙煎にこだわった至福の一杯</p>
                  </div>
                  <div>
                    <ul class="categories">
                      <li>特集</li>
                    </ul>
                  </div>
                </div>
              </div>
            </article>
            <article class="column_wrap">
              <div class="column_inner">
                <div class="img_wrap">
                  <a href="">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/column_sample.jpeg" alt="thumbnail" />
                  </a>
                </div>
                <div class="column_meta">
                  <time class="column_date" datetime="the_time">2022年03月14日</time>
                  <h3>とよとみ珈琲</h3>
                  <div class="column_text">
                    <p>自家焙煎にこだわった至福の一杯</p>
                  </div>
                  <div>
                    <ul class="categories">
                      <li>コーヒー入門知識</li>
                    </ul>
                  </div>
                </div>
              </div>
            </article>
          </div>

          <div class="btn_wrap">
            <a class="btn_link" href="#!"><span>コラム一覧を見る</span></a>
          </div>
        </div>
      </div>
    </section>

    <!-- Instagram -->
    <section>
      <div class="wrap">
        <div class="inner">
          <div class="wrap_title">
            <p>What’s New</p>
            <h2>新着情報</h2>
          </div>
          <!-- ▼お知らせカード▼ -->
          <ul class="news_wrap_cards">
            <li class="news_wrap_card">
              <div class="news_wrap_card_icon">
                ★<i class="fa-solid fa-shop"></i>
              </div>
              <a href="" class="news_wrap_card_inner">
                <time class="news_date" datetime="the_time">2022年03月14日</time>
                <h3 class="news_head">×××Cafe OPEN!</h3>
                <p class="news_text">
                  ここにお知らせが入ります。ここにお知らせが入ります。ここにお知らせが…
                </p>
              </a>
            </li>
            <li class="news_wrap_card">
              <div class="news_wrap_card_icon">
                ★<i class="fa-solid fa-shop"></i>
              </div>
              <a href="" class="news_wrap_card_inner">
                <time class="news_date" datetime="the_time">2022年03月14日</time>
                <h3 class="news_head">公式インスタグラム開設しました！</h3>
                <p class="news_text">
                  ここにお知らせが入ります。ここにお知らせが入ります。
                </p>
              </a>
            </li>
            <li class="news_wrap_card">
              <div class="news_wrap_card_icon">
                ★<i class="fa-solid fa-shop"></i>
              </div>
              <a href="" class="news_wrap_card_inner">
                <time class="news_date" datetime="the_time">2022年03月14日</time>
                <h3 class="news_head">×××Cafe OPEN!</h3>
                <p class="news_text">
                  ここにお知らせが入ります。ここにお知らせが入ります。ここにお知らせが…
                </p>
              </a>
            </li>
          </ul>

          <div class="btn_wrap">
            <a class="btn_link" href="#!"><span>新着情報一覧を見る</span></a>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="wrap">
        <div class="inner">
          <div class="wrap_title">
            <p>Instagram</p>
            <h2>公式インスタグラム</h2>
          </div>
          <div class="wrap_text">
            <p>
              このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。このサイトについて導入文。
            </p>
          </div>
          <div class="btn_wrap">
            <a class="btn_link" href="#!"><span>店舗情報一覧を見る</span></a>
          </div>
        </div>
      </div>
    </section>

    <!-- ▼「飲む」「豆」ボタン/下部fix▼ -->
    <div class="bottom_box">
      <ul class="bottom_box_list">
        <li class="bottom_box_item">
          <a href="">店で飲みたい</a>
        </li>
        <li class="bottom_box_item">
          <a href="">豆を買いたい</a>
        </li>
      </ul>
    </div>
  </main>

  <footer>
    <div class="wrap">
      <div class="inner">
        <!-- ▼フッターのナビリスト:仮!!▼ -->
        <nav class="footer_nav">
          <ul class="footer_nav_list">
            <li class="footer_nav_item">
              ※カンプ待ち
              <a href="">店で飲みたい</a>
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
              <a href="">コーヒー入門知識</a>
            </li>
            <li class="footer_nav_item">
              <a href="">マイページ</a>
            </li>
            <li class="footer_nav_item">
              <a href="">お問い合わせ</a>
            </li>
            <li class="footer_nav_item">
              <a href="">このサイトについて</a>
            </li>
            <li class="footer_nav_item">
              <a href="">プライバシーポリシー</a>
            </li>
          </ul>
        </nav>

        <div class="footer_logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_aoch.png" alt="" />
        </div>
        <p class="footer_wrap_copyright">
          <small>Copyright &copy; 2022 動 All Rights Reserved.</small>
        </p>
      </div>
      <!-- viewport -->
    </div>
    <!-- footer_wrap -->
  </footer>

  <!-- コンポーネント -->
  <!-- imgで -->
  <!-- <article class="column_wrap">
            <div class="column_inner">
                <div class="img_wrap">
                    <a href="#!">
                        <img src="./img/column_sample.jpeg" alt="thumbnail" />
                    </a>
                </div>
                <div class="column_meta">
                    <time class="column_date" datetime="the_time"
                        >2022年03月14日</time
                    >
                    <h3>とよとみ珈琲</h3>
                    <div class="column_desc">
                        <p>自家焙煎にこだわった至福の一杯</p>
                    </div>
                    <div>
                        <ul class="categories">
                            <li>コラムカテゴリ</li>
                        </ul>
                    </div>
                </div>
            </div>
        </article> -->

  <!-- ▼Javascript▼ -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/front.js"></script>
</body>

</html>