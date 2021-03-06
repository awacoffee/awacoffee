<article class="stores_card">
    <a href="#">
        <figure class="stores_img">
            <?php the_post_thumbnail(); ?>
        </figure>

        <div class="text_inner">
            <h3 class="stores_name">
                <?php the_title(); ?>
            </h3>
            <div class="stores_catch">
                <?php the_excerpt(); ?>
            </div>
            <div class="stores_tags">
                <p class="stores_tag">
                    <?php echo get_the_term_list($post->ID, 'area'); ?>
                </p>
                <p class="stores_tag">
                    <?php echo get_the_term_list($post->ID, 'purpose'); ?>
                </p>
            </div>
        </div>
    </a>
</article>
