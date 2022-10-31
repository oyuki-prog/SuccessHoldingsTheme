<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About us</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
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