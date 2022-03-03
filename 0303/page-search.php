<?php
if (is_page('contact')) {
    remove_filter('the_contact', 'wpautop');
}
?>

<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <?php echo do_shortcode('[flexy_breadcrumb]'); ?>

        <h2 class="pageTitle"><?php the_title(); ?><span><?php echo strtoupper($post->post_name); ?></h2>

        <?php get_template_part('template-parts/bredcrumb'); ?>

        <main class="main">
            <div class="container">
                <!-- 固定ページを読み込んで表示 -->
                <div class="content">
                    <?php the_content(); ?>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
        </main>
        <?php get_footer(); ?>
