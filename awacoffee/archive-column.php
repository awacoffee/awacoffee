<?php get_header(); ?>

<main id="column_list_under">
  <div class="header_img_bg mainvisual_wrap"></div>
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
          <?php
          $column_categories = get_terms(array('taxonomy' => 'column_category'));
          if (!empty($column_categories)) :
          ?>
            <ul class="column_tab_wrap">
              <?php foreach ($column_categories as $column_category) : ?>
                <li class="btn">
                  <h2 class="column_item_btn"><a href="<?php echo get_term_link($column_category); ?>"><?php echo $column_category->name ?></a></h2>
                </li>
              <?php endforeach; ?>
            </ul>
          <?php endif; ?>
          <div id="search_box" class="column_search">
            <form method="get" action="<?php echo home_url('/'); ?>" class="search_container">
              <input type="text" name="s" value="<?php the_search_query(); ?>" size="25" placeholder="キーワード検索">
              <input type="submit" value="&#xf002">
            </form>
          </div>
        </div>
        <div class="cards_wrap is_column_active">
          <div class="card_wrap">
            <?php if (have_posts()) : ?>
              <?php while (have_posts()) : ?>
                <?php the_post(); ?>
                <?php get_template_part('template-parts/loop', 'column'); ?>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="pagination_wrap">
          <?php if (function_exists('wp_pagenavi')) {
            wp_pagenavi();
          } ?>
        </div>
      </div>
      <!-- inner -->
    </div>
    <!-- wrap -->
  </section>
</main>

<?php get_footer(); ?>