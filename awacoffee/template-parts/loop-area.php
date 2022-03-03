<article class="stores_card">
    <a href="<?php echo get_permalink(); ?>">
        <div class="front_card">
            <figure class="stores_img">
                <?php the_post_thumbnail(); ?>
            </figure>
            <div class="stores_tags">
                <p class="stores_tag">
                    <?php echo get_the_term_list($post->ID, 'area'); ?>
                </p>
                <p class="stores_tag">
                    <?php echo get_the_term_list($post->ID, 'purpose'); ?>
                </p>
            </div>

            <div class="text_inner">
                <h3 class="stores_name">
                    <?php the_title(); ?>
                </h3>
                <p class="stores_catch">
                    <?php the_excerpt(); ?>
                </p>
            </div>
        </div>
        <div class="back_card">
            <p class="card_text">
                <?php the_content(); ?>
            </p>
        </div>
    </a>
</article>