<?php
function display_title() {
    if (is_page()) {
        echo (get_the_title());
    }elseif (is_single() && is_category('works')) {
        echo '実績詳細';
    }elseif (is_single() && is_category('news')) {
        echo 'お知らせ';
    }
}

function display_subTitle() {
    $page = get_post( get_the_ID() );
    $slug = $page->post_name;

    if (is_page() && $slug === 'aboutus') { //固定ページかつ戻り値のスラッグがaboutusだったら
        echo 'About Us';
    } elseif (is_page()) { //固定ページならサブタイトルをecho
        echo $slug;
    } elseif (is_single() && is_category('works')) {//投稿ページかつカテゴリーがworksなら
        echo 'Works';
    } elseif (is_single() && is_category('news')) {//投稿ページかつカテゴリーがnewsなら
        echo 'News';
    }
}
?>
<?php 
add_theme_support('post-thumbnails');
