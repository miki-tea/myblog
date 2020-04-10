<?php
// カスタムヘッダー
$custom_header = array(
'random-default' => false,
'default-text-color' => '',
'header-text' => false,
'uploads' => true,
'default-image' => get_stylesheet_directory_uri() . '/img/default_img.png',
'width' => 960,
'height' => 250,
'flex-height' => true,
'flex-width' => false,
);
add_theme_support( 'custom-header', $custom_header );
?>

