<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<section class="p-newsShow">
    <div class="l-container">
        <div class="p-newsShow__container">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : ?>
                    <?php the_post(); ?>
                    <time class="p-newsShow__date"><?php the_time('Y年m月d日'); ?></time>
                    <h2 class="p-newsShow__title"><?php the_title(); ?></h2>
                    <div class="p-newsShow__contentWrapper">
                        <?php the_content(); ?>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>
        </div>
    </div>
</section>
</main>
<?php get_footer(); ?>