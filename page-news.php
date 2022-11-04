<?php get_header(); ?>
      <section class="c-hero">
        <div class="c-hero__imgWrapper">
          <img
            class="c-hero__img"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/img-sample.jpg"
            alt=""
          />
        </div>
        <div class="c-hero__container">
          <h1 class="c-hero__mainTitle">お知らせ</h1>
          <p class="c-hero__subTitle">News</p>
        </div>
      </section>
      <section class="p-news">
        <div class="l-container">
          <ul class="">
            <li class="p-news__container">
            <?php
              $args = array(
                'post_type' => 'post',
                'posts_per_page' => 12,
                'category_name' => 'news',
              );
              $the_query = new WP_Query($args);
            ?>
            <?php if ($the_query->have_posts()): ?>
              <?php while ($the_query->have_posts()) : ?>
                <?php $the_query->the_post(); ?>
                <time class="p-news__date"><?php the_time('Y-m-d'); ?></time>
              <p class="p-news__text">
                <a href="#"><?php the_title();?></a>
              </p>
            </li>
              <?php endwhile; ?>
            <?php endif; ?>
          </ul>
        </div>
      </section>
    </main>
    <?php get_footer(); ?>