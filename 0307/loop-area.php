<article class="stores_card">
    <a href="<?php echo get_permalink(); ?>">
        <div class="front_card">
            <figure class="stores_img">
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>
                <?php else : ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/noimage2.jpg" alt="">
                <?php endif; ?>
            </figure>
            <div class="text_inner">
                <h3 class="stores_name">
                    <?php the_title(); ?>
                </h3>
            </div>
        </div>
        <div class="back_card">
            <p class="card_text">
                <?php the_field('catchphrase'); ?>
            </p>
        </div>
    </a>
</article>
