<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />

    <title>Service</title>
    <?php wp_head(); ?>
</head>

<body>
    <header class="l-header">
        <div class="p-header">
            <div class="l-container p-header__inner">
                <div class="p-header__logoWrapper">
                    <img class="p-header__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-sample.png" />
                </div>
                <p class="p-header__text">SuccessHD</p>
                <div id="c-humberger" class="u-hidden-pc">
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
                <nav class="p-header__nav u-hidden-tab u-hidden-sp">
                    <ul class="p-header__navList">
                        <li class="p-header__items">
                            <a class="p-headerLink c-link" href="#">サービス</a>
                        </li>
                        <li class="p-header__items">
                            <a class="p-headerLink c-link" href="#">導入事例</a>
                        </li>
                        <li class="p-header__items">
                            <a class="p-headerLink c-link" href="#">ニュース</a>
                        </li>
                        <li class="p-header__items">
                            <a class="p-headerLink c-link" href="#">会社情報</a>
                        </li>
                        <li class="p-header__items">
                            <a class="p-headerLink c-link" href="#">採用情報</a>
                        </li>
                        <li class="p-header__contact">
                            <a class="p-header__contactBtn c-btn" href="#">お問い合わせ</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main class="l-main">
        <section class="c-hero">
            <div class="c-hero__imgWrapper">
                <img class="c-hero__img" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-sample.jpg" alt="" />
            </div>
            <div class="c-hero__container">
                <h1 class="c-hero__mainTitle">事業案内</h1>
                <p class="c-hero__subTitle">Service</p>
            </div>
        </section>
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
                        <img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-sample.jpg" />
                    </div>
                    <div class="p-service__work">
                        <h2 class="p-service__title">人材育成</h2>
                        <h3 class="p-service__subTitle">Human Traning</h3>
                        <p class="p-service__text">
                            研修や教育制度によって<br>
                            人材の可能性を最大化させます。

                        </p>
                        <button class="p-service__btn c-btn" type="button">詳細</button>
                    </div>
                </div>
                <div class="p-service__container">
                    <div class="p-service__imgContainer p-service__imgContainer--reverse">
                        <img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-sample.jpg" />
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
                        <button class="p-service__btn c-btn" type="button">詳細</button>
                    </div>
                </div>
                <div class="p-service__container">
                    <div class="p-service__imgContainer">
                        <img class="p-service__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-sample.jpg" />
                    </div>
                    <div class="p-service__work">
                        <h2 class="p-service__title">組織コンサル</h2>
                        <h3 class="p-service__subTitle">Consulting</h3>
                        <p class="p-service__text">
                            経営における決断と実行を促進し<br>
                            事業拡大をさせます。
                        </p>
                        <button class="p-service__btn c-btn" type="button">詳細</button>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="l-footer">
        <div class="p-footer">
            <div class="l-container">
                <div class="p-footer__content">
                    <ul class="p-footer__textBox">
                        <li class="p-footer__text">
                            <a href="">プライバシーポリシー</a>
                        </li>
                        <li class="p-footer__text">
                            <a href="">サイトマップ</a>
                        </li>
                    </ul>
                    <ul class="p-footer__menu">
                        <li class="p-footer__menuItem"><a href="">会社情報</a></li>
                        <li class="p-footer__menuItem">
                            <a href="">事業内容</a>
                            <ul class="p-footer__listBox">
                                <li class="p-footer__item"><a href="">&#045;人材育成</a></li>
                                <li class="p-footer__item"><a href="">&#045;営業支援</a></li>
                                <li class="p-footer__item">
                                    <a href="">&#045;組織コンサル</a>
                                </li>
                            </ul>
                        </li>
                        <li class="p-footer__menuItem"><a href="">採用情報</a></li>
                        <li class="p-footer__menuItem"><a href="">導入事例</a></li>
                        <li class="p-footer__menuItem"><a href="">お知らせ</a></li>
                    </ul>
                </div>
                <p class="p-footer__copyRight">
                    Copyright © 2020 SUCCESS HD All rights reserved.
                </p>
            </div>
        </div>
    </footer>
    <?php wp_footer(); ?>
</body>

</html>