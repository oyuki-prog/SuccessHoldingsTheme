<?php get_header(); ?>
<?php get_template_part('hero'); ?>
  <div class="p-thanks">
    <h1 class="p-thanks__title">お問い合わせありがとうございました</h1>
    <p class="p-thanks__text">
      内容を確認し、4営業日以内に返答いたします。<br>
      返答まで今しばらくお待ち下さい。
    </p>
    <button type="button" onclick="location.href='/'" class="p-confirm__prevBtn p-thanks__btn">トップに戻る</button>
  </div>
<?php get_footer(); ?>