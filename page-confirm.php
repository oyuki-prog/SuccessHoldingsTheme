<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<?php if (have_posts()) : ?>
  <?php while (have_posts()) : ?>
    <?php the_post(); ?>
    <div class="p-confirm">
      <div class="p-confirm__titleBox">
        <h2 class="p-confirm__title">
          お問い合わせ内容の確認
        </h2>
        <p class="p-confirm__titleText">
          以下の内容を確認し問題なければ送信を押してください。
        </p>
      </div>
      <?php the_content(); ?>
      <div class="p-confirm__btnArea">
        <button class="p-confirm__prevBtn">戻る</button>
        <button class="p-confirm__sendBtn c-btn">送信</button>
      </div>
    </div>
    <?php endwhile; ?>
  <?php endif; ?>
</main>
<?php get_footer(); ?>