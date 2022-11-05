<?php
function display_title() {
    if (is_page()) {
        echo (get_the_title());
    } elseif (is_single() && is_category('works')) {
        echo '実績詳細';
    } elseif (is_single() && is_category('news')) {
        echo 'お知らせ';
    }
}

function display_subTitle() {
    $page = get_post( get_the_ID() );
    $slug = $page->post_name;
    $upper_camel_slug = ucfirst($slug);

    if (is_page() && $slug === 'aboutus') { //固定ページかつ戻り値のスラッグがaboutusだったら
        echo 'About Us';
    } else { //固定ページならサブタイトルをecho
        echo "$upper_camel_slug";
    }
}

function display_tabTitle() {
    if (is_page()) {
        echo get_the_title() . " | 株式会社サクセスホールディングス";
    }
}
add_theme_support('post-thumbnails');
