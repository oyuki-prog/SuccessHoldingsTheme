<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php display_tabTitle(); ?></title>
  <script
  src="https://code.jquery.com/jquery-3.6.1.min.js"
  integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
  crossorigin="anonymous"
  ></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.js" defer></script>
  <script src="<?php echo get_template_directory_uri(); ?>/assets/js/index.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.15/jquery.bxslider.min.css">
  <?php
    if(strpos(get_the_permalink(),'contact') !== false) {
      echo "<script src=\"" .  get_template_directory_uri() . "/assets/js/contact.js\"></script>";
    }
    if(strpos(get_the_permalink(),'recruit') !== false) {
      echo "<script src=\"" .  get_template_directory_uri() . "/assets/js/recruit.js\"></script>";
    }
    if(is_home()) {
      echo "<script src=\"" .  get_template_directory_uri() . "/assets/js/scroll.js\"></script>";
    }
  ?>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
  <?php wp_head(); ?>
</head>

<body>
  <header class="l-header">
    <div class="p-header">
      <div class="l-container p-header__inner">
        <a class="p-header__logoWrapper" href="<?php echo home_url(); ?>">
          <img
            class="p-header__img"
            src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png"
          />
        </a>
        <div id="js-hamburger" class="c-hamburger u-hidden-pc">
          <div class="c-hamburger__line"></div>
          <div class="c-hamburger__line"></div>
          <div class="c-hamburger__line"></div>
        </div>
        <nav class="p-header__nav" id="js-nav">
          <ul class="p-header__navList nav__items nav-items">
            <li class="p-header__items fadein">
              <a class="p-headerLink c-link" href="<?php echo home_url("/aboutUs"); ?>">会社情報</a>
            </li>
            <li class="p-header__items fadein">
              <a class="p-headerLink c-link" href="<?php echo home_url("/service"); ?>">サービス</a>
            </li>
            <li class="p-header__items fadein">
              <a class="p-headerLink c-link" href="<?php echo home_url("/work"); ?>">導入事例</a>
            </li>
            <li class="p-header__items fadein">
              <a class="p-headerLink c-link" href="<?php echo home_url("/recruit"); ?>">採用情報</a>
            </li>
            <li class="p-header__items fadein">
              <a class="p-headerLink c-link" href="<?php echo home_url("/news"); ?>">ニュース</a>
            </li>
            <li class="p-header__contact fadein">
              <a class="p-header__contactBtn c-btn" href="<?php echo home_url("/contact"); ?>"
                >お問い合わせ
                </a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <main class="l-main" id="top">