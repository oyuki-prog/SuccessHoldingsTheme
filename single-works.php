<?php get_header(); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : ?>
    <?php the_post(); ?>
    <?php get_template_part('hero'); ?>
    <section class="p-worksShow">
      <div class="l-container">
        <h2 class="p-worksShow__clientTitle">お客様概要</h2>
        <h3 class="p-worksShow__name"><?php the_title(); ?></h3>
        <div class="p-worksShow__container">
          <div class="p-worksShow__img">
            <?php if (has_post_thumbnail()) : ?>
              <?php the_post_thumbnail('', array('class' => 'p-works__img')); ?>
            <?php else : ?>
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-sample.jpg" alt="" />
            <?php endif; ?>
          </div>
          <ul class="p-worksShow__list">
            <li class="p-worksShow__item">
              <p class="p-worksShow__outline">所在地</p>
              <p class="p-worksShow__detail"><?php echo post_custom("所在地"); ?></p>
            </li>
            <li class="p-worksShow__item">
              <p class="p-worksShow__outline">設立</p>
              <p class="p-worksShow__detail"><?php echo post_custom("設立"); ?></p>
            </li>
            <li class="p-worksShow__item">
              <p class="p-worksShow__outline">資本金</p>
              <p class="p-worksShow__detail"><?php echo post_custom("資本金"); ?></p>
            </li>
            <li class="p-worksShow__item">
              <p class="p-worksShow__outline">主要事業</p>
              <p class="p-worksShow__detail"><?php echo post_custom("主要事業"); ?></p>
            </li>
            <li class="p-worksShow__item">
              <p class="p-worksShow__outline">URL</p>
              <p class="p-worksShow__detail"><?php echo post_custom("URL"); ?></p>
            </li>
          </ul>
        </div>
        <ul class="p-worksShow__introList">
          <li class="p-worksShow__introItem">
            <h2 class="p-worksShow__introTitle">導入背景</h2>
            <h3 class="p-worksShow__introOutline">
              <?php echo post_custom("導入背景タイトル"); ?> </h3>
            <p class="p-worksShow__introDetail">
              <?php echo post_custom("導入背景テキスト"); ?>
            </p>
          </li>
          <li class="p-worksShow__introItem">
            <h2 class="p-worksShow__introTitle">導入内容</h2>
            <h3 class="p-worksShow__introOutline">
              <?php echo post_custom("導入内容タイトル"); ?>
            </h3>
            <p class="p-worksShow__introDetail">
              <?php echo post_custom("導入内容テキスト"); ?>
            </p>
          </li>
          <li class="p-worksShow__introItem">
            <h2 class="p-worksShow__introTitle">導入効果</h2>
            <h3 class="p-worksShow__introOutline">
              <?php echo post_custom("導入効果タイトル"); ?>
            </h3>
            <p class="p-worksShow__introDetail">
              <?php echo post_custom("導入効果テキスト"); ?>
            </p>
          </li>
        </ul>
        <a href="<?php echo home_url("/works"); ?>" class=" c-btn p-worksShow__btn">導入事例一覧</a>
      </div>
    </section>
  <?php endwhile; ?>
<?php endif; ?>
<?php get_template_part('contact');  ?>
<?php get_footer(); ?>
