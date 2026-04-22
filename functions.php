<?php



// -------------------------------------------------------
// テーマの基本設定
// -------------------------------------------------------
function mytheme_setup()
{
  add_theme_support('title-tag');
  add_theme_support('post-thumbnails');

  register_nav_menus([
    'header-menu' => 'ヘッダーメニュー',
    'footer-menu' => 'フッターメニュー',
  ]);
}
add_action('after_setup_theme', 'mytheme_setup');


// -------------------------------------------------------
// CSS読み込み
// -------------------------------------------------------
function mytheme_scripts()
{


  wp_enqueue_style('reset',  get_theme_file_uri('/css/reset.css'));
  wp_enqueue_style('style',  get_theme_file_uri('/style.css'));
  wp_enqueue_style('main',   get_theme_file_uri('/css/main.css'));
  wp_enqueue_style('about',  get_theme_file_uri('/css/about.css'));
  wp_enqueue_style('works',  get_theme_file_uri('/css/works.css'));
  wp_enqueue_style('footer', get_theme_file_uri('/css/footer.css'));
  wp_enqueue_style('header', get_theme_file_uri('/css/header.css'));
  wp_enqueue_style('index', get_theme_file_uri('/css/index.css'));
  wp_enqueue_style('page-works', get_theme_file_uri('/css/page-works.css'));
  wp_enqueue_style('page-contact', get_theme_file_uri('/css/page-contact.css'));

  wp_enqueue_script('works', get_theme_file_uri('/js/works.js'));
}
add_action('wp_enqueue_scripts', 'mytheme_scripts');



// -------------------------------------------------------
// JavaScript読み込み
// -------------------------------------------------------
