<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : ?>
    <?php the_post(); ?>
    <section class="p-serviceShow">
      <div class="l-container">
        <div class="p-serviceShow__container">
          <h2 class="p-serviceShow__title"><?php echo post_custom("事業内容タイトル"); ?></h2>
          <p class="p-serviceShow__text"><?php echo post_custom("事業内容テキスト"); ?></p>
        </div>
        <div class="p-serviceShow__container">
          <h2 class="p-serviceShow__title"><?php echo post_custom("事業詳細タイトル"); ?></h2>
          <p class="p-serviceShow__text"><?php echo post_custom("事業詳細テキスト"); ?></p>
        </div>
      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>
</main>
<?php get_footer(); ?>
