<?php
$favoritepagelist = "";
if (isset($_COOKIE['favoritepagelist'])) {
  $favoritepagelist = $_COOKIE['favoritepagelist'];
};

// print_r($favoritepagelist);

$favoritepagelist = explode(',', $favoritepagelist);
// print_r($favoritepagelist);
?>

<?php get_header(); ?>

<main id="mypage_under">
  <div class="header_img_bg mainvisual_wrap"></div>
  <!-- ▼タイトルエリア▼ -->
  <div class="wrap">
    <div class="under_title inner">
      <div class="under_wrap_title">
        <p>My page</p>
        <h1>マイページ</h1>
      </div>
    </div>
    <?php get_template_part('template-parts/breadcrumb'); ?>
  </div>
  <!-- /.wrap -->

  <section class="my_page">
    <div class="wrap">
      <div class="inner">
        <h2>ブックマーク</h2>
        <div class="number_of_searches" style="font-size: 24px">
          <?php
          if (isset($_COOKIE['favoritepagelist'])) {
            $cnt = count($favoritepagelist) - 1;
          };
          ?>
          <!-- <p>6件</p> -->
          <?php if (isset($_COOKIE['favoritepagelist'])) { ?>
            <p>
              <?php echo $cnt; ?>件
            </p>
          <?php }; ?>
        </div>
        <div class="store_area">
          <div class="sp_stores_cards store_lists">

            <?php if (isset($_COOKIE['favoritepagelist'])) : ?>

              <?php
              $args = array(
                'post_type' => 'shop',
                'post_per_page' => -1,
                'post__in' => $favoritepagelist,
              );
              $taxquerysp = array('relation' => 'AND');

              $args['tax_query'] = $taxquerysp;

              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
              ?>
                <?php while ($the_query->have_posts()) : ?>
                  <?php $the_query->the_post(); ?>
                  <?php get_template_part('template-parts/loop', 'area-sp'); ?>
                <?php endwhile; ?>
              <?php endif; ?>
            <?php else : ?>
              <p>ブックマークされた店舗の記事はございません。</p>
            <?php endif; ?>

          </div>
          <div class="pc_stores_cards store_lists">

            <?php if (isset($_COOKIE['favoritepagelist'])) : ?>

              <?php
              $args = array(
                'post_type' => 'shop',
                'post_per_page' => -1,
                'post__in' => $favoritepagelist,
              );
              $taxquerysp = array('relation' => 'AND');

              $args['tax_query'] = $taxquerysp;

              $the_query = new WP_Query($args);
              if ($the_query->have_posts()) :
              ?>
                <?php while ($the_query->have_posts()) : ?>
                  <?php $the_query->the_post(); ?>
                  <?php get_template_part('template-parts/loop', 'area'); ?>
                <?php endwhile; ?>
              <?php endif; ?>
            <?php else : ?>
              <p>ブックマークされた店舗の記事はございません。</p>
            <?php endif; ?>
          </div>
        </div>
        <!-- store_area -->


        <div class="pc_stores_cards store_lists">
          <?php
          $favorites = get_user_favorites();
          $args = array(
            'post_type' => 'shop',
            'post_per_page' => -1,
            'post__in' => $favorites,
          );
          $taxquerysp = array('relation' => 'AND');

          $args['tax_query'] = $taxquerysp;

          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
          ?>
            <?php while ($the_query->have_posts()) : ?>
              <?php $the_query->the_post(); ?>
              <?php get_template_part('template-parts/loop', 'area'); ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>

        <div class="sp_stores_cards store_lists">
          <?php
          $favorites = get_user_favorites();
          $args = array(
            'post_type' => 'shop',
            'post_per_page' => -1,
            'post__in' => $favorites,
          );
          $taxquerysp = array('relation' => 'AND');

          $args['tax_query'] = $taxquerysp;

          $the_query = new WP_Query($args);
          if ($the_query->have_posts()) :
          ?>
            <?php while ($the_query->have_posts()) : ?>
              <?php $the_query->the_post(); ?>
              <?php get_template_part('template-parts/loop', 'area-sp'); ?>
            <?php endwhile; ?>
          <?php endif; ?>
        </div>



        <div class="my_map_box">
          <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3305.1690029533397!2d134.57330771521546!3d34.06518168060244!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x35536d1131fd515b%3A0xb7bb664ec05a9180!2z44Go44KI44Go44G_54-I55Cy!5e0!3m2!1sja!2sjp!4v1645013839914!5m2!1sja!2sjp" width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy" title="店舗周辺の地図"></iframe> -->
          <div class="acf-map" data-zoom="16">
            <?php
            $args = array(
              'post_type' => 'shop',
              'post_per_page' => -1,
              'post__in' => $favoritepagelist,
            );
            $taxquerysp = array('relation' => 'AND');

            $args['tax_query'] = $taxquerysp;

            $the_query = new WP_Query($args);
            if ($the_query->have_posts()) :
            ?>
              <?php while ($the_query->have_posts()) : ?>
                <?php $the_query->the_post(); ?>

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
              margin: 20px 0;
            }

            .acf-map img {
              display: block;
              height: 100%;
            }
          </style>
        </div>
      </div>
  </section>
</main>

<?php get_footer(); ?>
