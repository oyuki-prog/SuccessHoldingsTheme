<?php get_header(); ?>
<?php get_template_part('hero'); ?>
      <section class="p-works">
        <div class="l-container">
          <ul class="p-works__list">
            <?php
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'category_name' => 'achievements',
                'supports' => array('thumbnail')
              );
              $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()): ?>
              <?php while ($the_query->have_posts()) : ?>
                <?php $the_query->the_post(); ?>
                <li class="p-works__listItem">
                  <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail( '', array( 'class' => 'p-works__img' ) ); ?>
                    <div class="p-works__hoverBox">
                      <div class="p-works__textBox">
                        <p class="p-works__companyName"><?php the_title(); ?></p>
                        <p class="p-works__text"><?php the_excerpt(); ?></p>
                      </div>
                    </div>
                  </a>
                </li>
              <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
          </ul>
        </div>
      </section>
    </main>
<?php get_footer(); ?>