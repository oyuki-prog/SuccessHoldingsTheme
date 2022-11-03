<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />

    <title>News-show</title>
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
                <h1 class="c-hero__mainTitle">お知らせ</h1>
                <p class="c-hero__subTitle">News</p>
            </div>
        </section>
        <section class="p-newsShow">
            <div class="l-container">
                <div class="p-newsShow__container">
                    <?php if (have_posts()) : ?>
                        <?php while (have_posts()) : ?>
                            <?php the_post(); ?>
                            <time class="p-newsShow__date"><?php the_time('Y年m月d日'); ?></time>
                            <h2 class="p-newsShow__title"><?php the_title(); ?></h2>
                            <div class="p-newsShow__contentWrapper">
                                <?php the_content(); ?>
                            </div>
                        <?php endwhile; ?>
                    <?php endif; ?>
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