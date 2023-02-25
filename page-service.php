<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<section class="p-main">
  <div class="l-container">
    <h2 class="p-main__title">
      企業の価値を「人」にフォーカスして顧客創造を行います！！！
    </h2>
    <p class="p-main__text">
      サクセスホールディングスは、「人材育成事業、営業支援事業、組織コンサルティング事業」を手掛け
      る企業のヒトに関わる領域におけるコンサルティング会社です。
      当社独自のノウハウを有し、社員育成のコンテンツや営業組織を再現性の高いチームに育てることを
      行っています。さらには、経営者会議を行い社内のコミットメントを引き出し時には経営をリードして
      いくサポートも行っております。お客様の事業拡大においては、お客様以上にお客様のことを考え本気
      で向き合うことで事業成長をお約束いたします。
    </p>
  </div>
</section>
<section class="p-service">
  <div class="l-container">
    <div class="p-service__container">
      <div class="p-service__imgContainer">
        <img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/human.jpg" />
      </div>
      <div class="p-service__work">
        <h2 class="p-service__title">人材育成</h2>
        <h3 class="p-service__subTitle">Human Traning</h3>
        <p class="p-service__text">
          研修や教育制度によって<br>
          人材の可能性を最大化させます。

        </p>
        <button class="p-service__btn c-btn" type="button" onclick="location.href='<?php echo home_url("/service/hrd"); ?>'">詳細</button>
      </div>
    </div>
    <div class="p-service__container">
      <div class="p-service__imgContainer p-service__imgContainer--reverse">
        <img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/business.jpg" />
      </div>
      <div class="p-service__work--reverse">
        <div>
          <h2 class="p-service__title">営業支援</h2>
          <h3 class="p-service__subTitle">Business Support</h3>
        </div>
        <p class="p-service__text">
          戦略と戦術を思考し<br>
          再現性の高い営業組織を実現させます。
        </p>
        <button class="p-service__btn c-btn" type="button" onclick="location.href='<?php echo home_url("/service/sales"); ?>'">詳細</button>
      </div>
    </div>
    <div class="p-service__container">
      <div class="p-service__imgContainer">
        <img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/consulting.jpg" />
      </div>
      <div class="p-service__work">
        <h2 class="p-service__title">組織コンサル</h2>
        <h3 class="p-service__subTitle">Consulting</h3>
        <p class="p-service__text">
          経営における決断と実行を促進し<br>
          事業拡大をさせます。
        </p>
        <button class="p-service__btn c-btn" type="button" onclick="location.href='<?php echo home_url("/service/consultant"); ?>'">詳細</button>
      </div>
    </div>
  </div>
</section>
<?php get_template_part('contact');  ?>
<?php get_footer(); ?>