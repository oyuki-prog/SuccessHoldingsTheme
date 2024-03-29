<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<section class="p-aboutusNav">
  <div class="l-container">
    <ul class="p-aboutusNav__list">
      <li class="p-aboutusNav__item">
        <a class="p-aboutusNav__link" href="#aboutusMessage">
          <p class="p-aboutusNav__text">代表挨拶</p>
          <div class="p-aboutusNav__arrow"></div>
        </a>
      </li>
      <li class="p-aboutusNav__item">
        <a class="p-aboutusNav__link" href="#aboutusPhilosophy">
          <p class="p-aboutusNav__text">企業理念</p>
          <div class="p-aboutusNav__arrow"></div>
        </a>
      </li>
      <li class="p-aboutusNav__item">
        <a class="p-aboutusNav__link" href="#aboutusCompany">
          <p class="p-aboutusNav__text">会社概要</p>
          <div class="p-aboutusNav__arrow"></div>
        </a>
      </li>
      <li class="p-aboutusNav__item">
        <a class="p-aboutusNav__link" href="#aboutusMember">
          <p class="p-aboutusNav__text">社員紹介</p>
          <div class="p-aboutusNav__arrow"></div>
        </a>
      </li>
    </ul>
  </div>
</section>
<section class="p-aboutusMessage " id="aboutusMessage">
  <div class="l-container">
    <div class="c-sectionTitle">
      <h2 class="c-sectionTitle__mainTitle">代表挨拶</h2>
      <p class="c-sectionTitle__subTitle">Message</p>
    </div>
    <div class="p-aboutusMessage__container">
      <div class="p-aboutusMessage__contents">
        <div class="p-aboutusMessage__greetingWrapper">
          <p class="p-aboutusMessage__greeting">
            成功を定義し<br>
            成功へ導く
          </p>
          <p class="p-aboutusMessage__company">株式会社サクセスホールディングス</p>
          <div class="p-aboutusMessage__greeter">
            <p class="p-aboutusMessage__post">代表取締役社長</p>
            <p class="p-aboutusMessage__name">小林　大祐</p>
          </div>
          <a href="<?php echo home_url("/message"); ?>">
            <div class="c-btn p-aboutusMessage__btn">
              <p class="p-aboutusMessage__btnText">メッセージ</p>
            </div>
          </a>
        </div>
        <div class="p-aboutusMessage__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ceo-img.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="p-aboutusPhilosophy" id="aboutusPhilosophy">
  <div class="l-container">
    <div class="c-sectionTitle">
      <h2 class="c-sectionTitle__mainTitle c-sectionTitle__mainTitle--white">企業理念</h2>
      <p class="c-sectionTitle__subTitle c-sectionTitle__subTitle--white">philosophy</p>
    </div>
    <ul class="p-aboutusPhilosophy__list">
      <li class="p-aboutusPhilosophy__item">
        <div class="p-aboutusPhilosophy__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/mission.jpg" alt="">
        </div>
        <div class="p-aboutusPhilosophy__ideology">
          <p class="p-aboutusPhilosophy__summary">ミッション</p>
          <p class="p-aboutusPhilosophy__detail">成功を定義し<span class="u-hidden-tab u-hidden-sp">、</span><br class="u-hidden-pc">成功へ導く</p>
        </div>
      </li>
      <li class="p-aboutusPhilosophy__item">
        <div class="p-aboutusPhilosophy__img p-aboutusPhilosophy__img--reverse">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/vision.jpg" alt="">
        </div>
        <div class="p-aboutusPhilosophy__ideology p-aboutusPhilosophy__ideology--reverse">
          <p class="p-aboutusPhilosophy__summary p-aboutusPhilosophy__summary--reverse">ビジョン</p>
          <p class="p-aboutusPhilosophy__detail p-aboutusPhilosophy__detail--reverse">
            日々の生活から色彩豊かで<br>
            明るい人生を歩めるように
          </p>
        </div>
      </li>
    </ul>
    <div class="p-aboutusPhilosophy__value">
      <h3 class="p-aboutusPhilosophy__valueTitle">バリュー</h3>
      <ul class="p-aboutusPhilosophy__valueList">
        <li class="p-aboutusPhilosophy__valueItem">
          <p class="p-aboutusPhilosophy__valueSummary">1.心の声に素直に！</p>
          <p class="p-aboutusPhilosophy__valueDetail">
            素直になることが大切だと考えています。そのためには、自身の心の声
            に素直になることが重要だと考えそれぞれの「心の声に素直に」なる
            ことで人生を切り開いてもらいたいと思います。
          </p>
        </li>
        <li class="p-aboutusPhilosophy__valueItem">
          <p class="p-aboutusPhilosophy__valueSummary">2.人生の主人公は常に自分！</p>
          <p class="p-aboutusPhilosophy__valueDetail">
            人生は、誰のためのものでもなく自分自身の為のものだと考えています。
            「人生とは？」という問いに対して全てのメンバーが考えて、心豊か
            に生きるということをモットーにしております。
          </p>
        </li>
        <li class="p-aboutusPhilosophy__valueItem">
          <p class="p-aboutusPhilosophy__valueSummary">3.お互い尊重しあい高めあう！</p>
          <p class="p-aboutusPhilosophy__valueDetail">
            価値観は人それぞれだと考えます。相手の考え方をお互いが尊重する
            ことで新たな発想・行動を生み出すと考えています。肯定し合いなが
            ら寄り添える仲間でありたいと思います。
          </p>
        </li>
        <li class="p-aboutusPhilosophy__valueItem">
          <p class="p-aboutusPhilosophy__valueSummary">4.情熱を持ち続ける！</p>
          <p class="p-aboutusPhilosophy__valueDetail">
            「自分、仲間、会社、お客様」に情熱を持ち関わり続けることを考え
            ています。常に本気でぶつかり納得して進めることを大切にし、切磋
            琢磨できる集団であることをモットーにしております。
          </p>
        </li>
      </ul>
    </div>
  </div>
</section>
<section class="p-aboutusCompany" id="aboutusCompany">
  <div class="l-container">
    <div class="c-sectionTitle">
      <h2 class="c-sectionTitle__mainTitle">会社概要</h2>
      <p class="c-sectionTitle__subTitle">Company</p>
    </div>
    <ul class="p-aboutusCompany__list">
      <li class="p-aboutusCompany__item">
        <p class="p-aboutusCompany__summary">会社名</p>
        <p class="p-aboutusCompany__detail">株式会社サクセスホールディングス</p>
      </li>
      <li class="p-aboutusCompany__item">
        <p class="p-aboutusCompany__summary">設立</p>
        <p class="p-aboutusCompany__detail">2021年6月1日</p>
      </li>
      <li class="p-aboutusCompany__item">
        <p class="p-aboutusCompany__summary">資本金</p>
        <p class="p-aboutusCompany__detail">500,000円</p>
      </li>
      <li class="p-aboutusCompany__item">
        <p class="p-aboutusCompany__summary">代表者名</p>
        <p class="p-aboutusCompany__detail">小林 大祐</p>
      </li>
      <li class="p-aboutusCompany__item">
        <p class="p-aboutusCompany__summary">従業員数</p>
        <p class="p-aboutusCompany__detail">10名 (パート・アルバイト含む)</p>
      </li>
      <li class="p-aboutusCompany__item">
        <p class="p-aboutusCompany__summary">住所</p>
        <p class="p-aboutusCompany__detail">
          東京都多摩市関戸2丁目39-16 センチュリーコート5F
        </p>
      </li>
      <li class="p-aboutusCompany__item">
        <p class="p-aboutusCompany__summary">取引銀行</p>
        <p class="p-aboutusCompany__detail">三菱UFJ銀行<br>住信SBIネット銀行</p>
      </li>
      <li class="p-aboutusCompany__item">
        <p class="p-aboutusCompany__summary">顧問</p>
        <p class="p-aboutusCompany__detail">岩月靖夫税理士事務所<br>社会保険労務士法人藤田事務所</p>
      </li>
    </ul>
  </div>
</section>
<section class="p-aboutusMember" id="aboutusMember">
  <div class="l-container">
    <div class="c-sectionTitle">
      <h2 class="c-sectionTitle__mainTitle c-sectionTitle__mainTitle--white">社員紹介</h2>
      <p class="c-sectionTitle__subTitle c-sectionTitle__subTitle--white">Member</p>
    </div>
    <ul class="p-aboutusMember__list">
      <li class="p-aboutusMember__item">
        <div class="p-aboutusMember__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ceo-img.jpg" alt="">
        </div>
        <div class="p-aboutusMember__employee">
          <p class="p-aboutusMember__post">代表取締役社長</p>
          <p class="p-aboutusMember__name">小林　大祐　<br class="u-hidden-pc u-hidden-sp">Daisuke Kobayashi</p>
        </div>
      </li>
    </ul>
  </div>
</section>
<?php get_template_part('contact');  ?>
<?php get_footer(); ?>