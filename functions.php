<?php
function display_title() {
    $category = get_the_category();
    $category = $category[0]->name;
    if (is_page()) {
        echo (get_the_title());
    } elseif (is_single() && $category == "works") {
        echo '実績詳細';
    } elseif (is_single() && $category == "news") {
        echo 'お知らせ';
    }
}

function display_subTitle() {
    $page = get_post( get_the_ID() );
    $slug = $page->post_name;
    $upper_camel_slug = ucfirst($slug);
    $category = get_the_category();
    $category = $category[0]->name;

    if (is_page() && $slug === 'aboutus') { //固定ページかつ戻り値のスラッグがaboutusだったら
        echo 'About Us';
    } elseif(is_single() && $category == "works") {
        echo 'Works';
    } elseif (is_single() && $category == "news") {
        echo 'News';
    } elseif(is_page()) { //固定ページならサブタイトルをecho
        echo "$upper_camel_slug";
    } else {
        echo "test";
    }
}

function display_tabTitle() {
    $category = get_the_category();
    $category = $category[0]->name;
    if (is_page()) {
        echo get_the_title() . " | 株式会社サクセスホールディングス";
    } elseif (is_single() && $category == "works") {
        echo '実績詳細 | 株式会社サクセスホールディングス';
    } elseif (is_single() && $category == "news") {
        echo 'お知らせ | 株式会社サクセスホールディングス';
    } else {
        echo '株式会社サクセスホールディングス';
    }
}

add_theme_support('post-thumbnails');
