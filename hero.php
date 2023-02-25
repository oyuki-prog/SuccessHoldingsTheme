    <section class="c-hero">
      <div class="c-hero__imgWrapper">
        <div class="c-hero__bg"></div>

      <?php if(has_post_thumbnail()): ?>
        <?php the_post_thumbnail("full", array("alt" => get_the_title(), "class" => "c-hero__img")); ?>
      <?php else: ?>
        <img class="c-hero__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-sample.jpg" alt="">
        <?php else(is_page("works")): ?>
          <img class="c-hero__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-sample.jpg" alt="">
      <?php endif; ?>

      </div>
      <div class="c-hero__container">
        <h1 class="c-hero__mainTitle"><?php display_title(); ?></h1>
        <p class="c-hero__subTitle"><?php display_subTitle(); ?></p>
      </div>
    </section>