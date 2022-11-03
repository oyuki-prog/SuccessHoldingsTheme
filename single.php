<?php
if (in_category('works')) {
    get_template_part('single-works', false);
} else { //上記以外のカテゴリーの場合
    get_template_part('single-basic', 'basic');
}
