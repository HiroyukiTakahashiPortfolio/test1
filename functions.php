<?php 

add_theme_support( 'post-thumbnails'); 
add_image_size( 'post-thumbnails', 400, 200, true);

function titles()
{
$title = wp_title(' | ', true, 'right');
if (is_home()){
// トップページ
echo 'サイト名 | サイトのキャッチコピー';
}else{
// トップページ以外
echo $title . 'サイト名';
}
};
