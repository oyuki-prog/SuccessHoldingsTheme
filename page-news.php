<?php get_header(); ?>
<?php get_template_part('hero'); ?>
</section>
<section class="p-news">
  <div class="l-container">
    <ul class="">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 12,
        'category_name' => 'news',
      );
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : ?>
          <?php $the_query->the_post(); ?>
          <li class="p-news__container">
            <time class="p-news__date"><?php the_time('Y-m-d'); ?></time>
            <p class="p-news__text">
              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </p>
          </li>
        <?php endwhile; ?>
      <?php endif; ?>
    </ul>
  </div>
</section>
<?php get_footer(); ?>