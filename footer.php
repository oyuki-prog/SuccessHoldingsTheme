</main>
<footer class="l-footer">
  <div class="p-footer">
    <div class="l-container">
      <div class="p-footer__content">
        <ul class="p-footer__textBox">
          <li class="p-footer__text">
            <a href="<?php echo home_url("/privacy-policy"); ?>">プライバシーポリシー</a>
          </li>
          <li class="p-footer__text">
            <a href="<?php echo home_url("/privacy-policy"); ?>">サイトマップ</a>
          </li>
        </ul>
        <ul class="p-footer__menu">
          <li class="p-footer__menuItem"><a href="<?php echo home_url("/aboutUs"); ?>">会社情報</a></li>
          <li class="p-footer__menuItem">
            <a href="<?php echo home_url("/service"); ?>">事業内容</a>
            <ul class="p-footer__listBox">
              <li class="p-footer__item">
                <a href="<?php echo home_url("/service/hrd"); ?>">&#045;人材育成</a>
              </li>
              <li class="p-footer__item">
                <a href="<?php echo home_url("/service/sales"); ?>">&#045;営業支援</a>
              </li>
              <li class="p-footer__item">
                <a href="<?php echo home_url("/service/consultant"); ?>">&#045;組織コンサル</a>
              </li>
            </ul>
          </li>
          <li class="p-footer__menuItem"><a href="<?php echo home_url("/recruit"); ?>">採用情報</a></li>
          <li class="p-footer__menuItem"><a href="<?php echo home_url("/works"); ?>">導入事例</a></li>
          <li class="p-footer__menuItem"><a href="<?php echo home_url("/news"); ?>">お知らせ</a></li>
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