<?php get_header(); ?>
<?php get_template_part('hero'); ?>
<div class="p-recruit">

    <div class="p-recruit__wrapper">
        <h2 class="p-recruit__title">募集要項</h2>
        <p class="p-recruit__lead"><?php the_title(); ?></p>
    </div>
    <ul class="p-recruit__list">
        <li class="p-recruit__listItem">
            <p class="p-recruit__listTitle">雇用形態</p>
            <p class="p-recruit__listText">正社員</p>
        </li>
        <li class="p-recruit__listItem">
            <p class="p-recruit__listTitle">応募資格</p>
            <p class="p-recruit__listText">業界未経験歓迎、第二新卒歓迎35歳迄（若年層キャリアアップのため）</p>
        </li>
        <li class="p-recruit__listItem">
            <p class="p-recruit__listTitle">勤務地</p>
            <p class="p-recruit__listText">
                東京都多摩市関戸2-39-16センチュリーコート5F<br>
                聖蹟桜ヶ丘&emsp;徒歩5分<br>
                転勤なし、リモートワークも応相談
            </p>
        </li>
        <li class="p-recruit__listItem">
            <p class="p-recruit__listTitle">給料</p>
            <p class="p-recruit__listText">年収2,500,000円～8,000,000円 (月給換算210,000円～700,000円)</p>
        </li>
        <li class="p-recruit__listItem">
            <p class="p-recruit__listTitle">勤務時間</p>
            <p class="p-recruit__listText">9:00～18:00&emsp;完全土日祝休み&emsp;(みなし残業45時間)</p>
        </li>
        <li class="p-recruit__listItem">
            <p class="p-recruit__listTitle">年収例</p>
            <p class="p-recruit__listText">
                年収3,200,000円 / 25歳未経験<br>
                年収4,300,000円 / 26歳&emsp;課長<br>
                年収5,000,000円 / 28歳&emsp;部長
            </p>
        </li>
        <li class="p-recruit__listItem">
            <p class="p-recruit__listTitle">福利厚生</p>
            <p class="p-recruit__listText">
                各種社会保険完備 (健康・厚生年金・労災・雇用)&emsp;通勤手当 (2万円迄/月)
                給与改定年1回&emsp;賞与年1回<br>
                各種研修制度&emsp;社員旅行
            </p>
        </li>
    </ul>
    <section class="p-form p-form__top">
        <div class="p-form__wrapper">
            <h2 class="p-form__title">採用フォーム</h2>
            <p class="p-form__lead">Recruit&thinsp;Form</p>
            <div class="p-form__precautions">
                <p class="p-form__precautionsText">以下のフォームに必要事項をご入力の上、ご登録ください。</p>
                <p>※採用以外のお問合せに関しましては<a href="">こちらへ</a></p>
            </div>
            <?php the_content(); ?>
        </div>
    </section>
    </main>
    <section class="p-contactAccess">
        <div class="p-contactAccess__image">
            <div class="p-contactAccess__item">
                <h2 class="p-contactAccess__title">お問い合わせ</h2>
                <p class="p-contactAccess__text">お問い合わせ・お見積もりはこちら</p>
                <a class="p-contactAccess__btn" href="">お問い合わせはこちら</a>
            </div>
        </div>
    </section>
</div>
<?php get_footer(); ?>
