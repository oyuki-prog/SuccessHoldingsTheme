
<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : ?>
    <?php the_post(); ?>
    <div class="p-contact">
      <section class="p-form">
          <div class="p-form__wrapper">
              <h2 class="p-form__titleContact">お問い合わせ</h2>
              <p class="p-form__lead">Contact</p>
              <p class="p-form__precautions p-form__precautionsTextContact">以下のフォームに必要事項をご入力の上、ご登録ください。</p>
              <?php the_content(); ?>
          </div>
      </section>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
</main>
<?php get_footer(); ?>