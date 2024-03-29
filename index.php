<?php get_header(); ?>
<section class="p-topHero">
  <div class="l-container">
    <div class="p-topHero__img">
      <img class="u-hidden-sp" src="<?php echo get_template_directory_uri(); ?>/assets/images/top-pc.jpg" alt="" />
      <img class="u-hidden-pc" src="<?php echo get_template_directory_uri(); ?>/assets/images/top-sp.jpg" alt="" />
    </div>
    <div class="p-topHero__titleBox">
      <h1 class="p-topHero__title">営業を科学するプロフェッショナル集団</h1>
    </div>
    <?php
    $args = array(
      'orderby' => 'date', // 日付でソート
      'order' => 'DESC', // DESCで最新から表示、ASCで最古から表示
      'category_name' => 'news' // 表示したいカテゴリーのスラッグを指定
    );
    $posts = new WP_Query( $args );
    ?>
    <div class="p-topNews">
      <p class="p-topNews__title">News</p>
      <div class="p-topNews__list slider">
      <?php if( $posts->have_posts()): while ($posts->have_posts()) : $posts->the_post(); ?>
        <div class="p-topNews__listItem">
          <p class="p-topNews__date"><?= get_the_date('Y.m.d'); ?></p>
          <a href="<?php the_permalink(); ?>" class="p-topNews__link"><?php the_title(); ?></a>
        </div>
      <?php endwhile; else: ?>
        <div class="p-topNews__listItem">
          <p class="p-topNews__date">-</p>
          <p class="p-topNews__link">新着情報はありません</p>
        </div>
      <?php endif; wp_reset_postdata(); ?>
      </div>
    </div>
  </div>
</section>
<section class="p-topAboutUs" id="scroll">
  <div class="p-topAboutUs__background"></div>
  <div class="l-container p-topAboutUs__container">
    <h2 class="p-topAboutUs__title">ABOUT US</h2>
    <div class="p-topAboutUs__content">
      <ul class="p-topAboutUs__imgList">
        <li class="p-topAboutUs__imgListItem">
          <div class="p-topAboutUs__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/human.jpg" alt="" />
          </div>
        </li>
        <li class="p-topAboutUs__imgListItem">
          <div class="p-topAboutUs__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/business.jpg" alt="" />
          </div>
        </li>
        <li class="p-topAboutUs__imgListItem">
          <div class="p-topAboutUs__img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/consulting.jpg" alt="" />
          </div>
        </li>
      </ul>
      <div class="p-topAboutUs__textBox">
        <h3 class="p-topAboutUs__subTitle">
          営業を科学するプロフェッショナル集団
        </h3>
        <div class="p-topAboutUs__textWrap">
          <p class="p-topAboutUs__text">
            お客様が求めること以上の価値を提供できてこそ、本当のビジネスだと考えておりますので常にサービス向上を考えております。お客様に歩み寄り、一緒に課題解決に導くプロフェッショナルであり続けることを宣言します。
          </p>
        </div>
        <button onclick="location.href='/aboutUs'" class="p-topAboutUs__btn c-btn">
          会社情報はこちら
        </button>
      </div>
    </div>
  </div>
</section>
<section class="p-topBusiness">
  <div class="p-topBusiness__background">
    <div class="l-container">
      <div class="p-topBusiness__titleBox">
        <h2 class="p-topBusiness__title">事業紹介</h2>
        <p class="p-topBusiness__subTitle">Business</p>
      </div>
      <ul class="p-topBusiness__list">
        <li class="p-topBusiness__listItem">
          <a href="">
            <div class="p-topBusiness__listImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/human.jpg" alt="" />
            </div>
            <div class="p-topBusiness__textBox">
              <h3 class="p-topBusiness__listTitle">人材育成</h3>
              <p class="p-topBusiness__listText">
                内定者から新卒、入社3～5年、リーダー、管理職研修をご提供しております。幅広い講師陣にて対応可能です。
              </p>
            </div>
          </a>
        </li>
        <li class="p-topBusiness__listItem">
          <a href="">
            <div class="p-topBusiness__listImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/business.jpg" alt="" />
            </div>
            <div class="p-topBusiness__textBox">
              <h3 class="p-topBusiness__listTitle">営業支援</h3>
              <p class="p-topBusiness__listText">
                新規事業の営業立ち上げの支援から、営業の仕組みやルールを作ることで再現性の高い営業組織を作り出します。
              </p>
            </div>
          </a>
        </li>
        <li class="p-topBusiness__listItem">
          <a href="">
            <div class="p-topBusiness__listImg">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/images/consulting.jpg" alt="" />
            </div>
            <div class="p-topBusiness__textBox">
              <h3 class="p-topBusiness__listTitle">組織コンサル</h3>
              <p class="p-topBusiness__listText">
                経営会議の企画からファシリテートを行っており、未来を描くお手伝いや事業拡大におけるコミットをしています。
              </p>
            </div>
          </a>
        </li>
      </ul>
      <button onclick="location.href='/service'" class="p-topBusiness__btn">事業一覧</button>
    </div>
  </div>
</section>
<section class="p-topWorks">
  <div class="l-container">
    <div class="p-topWorks__titleBox">
      <h2 class="p-topWorks__title">導入事例</h2>
      <p class="p-topWorks__subTitle">Works</p>
    </div>
    <ul class="p-topWorks__list">
      <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'category_name' => 'works',
      );
      $the_query = new WP_Query($args);
      ?>
      <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : ?>
          <?php $the_query->the_post(); ?>
          <li class="p-topWorks__listItem">
            <a href="<?php the_permalink(); ?>">
              <div class="p-topWorks__img">
                <?php if (has_post_thumbnail()) : ?>
                  <?php the_post_thumbnail('', array('class' => 'p-works__img')); ?>
                <?php else : ?>
                  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/img-sample.jpg" alt="" />
                <?php endif; ?>
              </div>
              <div class="p-topWorks__hoverBox">
                <div class="p-topWorks__textBox">
                  <p class="p-topWorks__companyName"><?php the_title(); ?></p>
                  <p class="p-topWorks__text"><?php the_excerpt(); ?></p>
                </div>
              </div>
            </a>
          </li>
        <?php endwhile; ?>
      <?php endif; ?>
    </ul>
    <button onclick="location.href='/works'" class="p-topWorks__btn c-btn" type="button">
      会社情報はこちら
    </button>
  </div>
</section>
<section class="p-topCompany">
  <div class="l-container">
    <div class="p-topCompany__titleBox">
      <h2 class="p-topCompany__title">導入企業</h2>
      <p class="p-topCompany__subTitle">Company</p>
    </div>
    <ul class="p-topCompany__list">
      <li class="p-topCompany__listItem">
        <div class="p-topCompany__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-jyounetsu.jpg" alt="" />
        </div>
      </li>
      <li class="p-topCompany__listItem">
        <div class="p-topCompany__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-partsone.jpeg" alt="" />
        </div>
      </li>
      <li class="p-topCompany__listItem">
        <div class="p-topCompany__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-aichisangyo.jpg" alt="" />
        </div>
      </li>
      <li class="p-topCompany__listItem">
        <div class="p-topCompany__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-asto.png" alt="" />
        </div>
      </li>
      <li class="p-topCompany__listItem">
        <div class="p-topCompany__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-grip.png" alt="" />
        </div>
      </li>
      <!-- <li class="p-topCompany__listItem">
        <div class="p-topCompany__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-redish.webp" alt="" />
        </div>
      </li> -->
      <li class="p-topCompany__listItem">
        <div class="p-topCompany__img">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-tmr.jpeg" alt="" />
        </div>
      </li>
    </ul>
  </div>
</section>
<div class="c-contact"></div>
<div class="p-topScroll">
  <a href="#scroll" class="p-topScroll__text--message p-topScroll__view">
    <span>Scroll</span>
  </a>
  <a href="#top" class="p-topScroll__text--top">
    <span>Back to top</span>
  </a>
</div>
<?php get_template_part('contact');  ?>
<?php get_footer(); ?>