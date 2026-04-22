<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.ico')); ?>">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="site_header">
    <div class="header_inner">

      <!-- ロゴ -->
      <div class="site_logo">
        <a class="logo_link" href="<?php echo home_url(); ?>">
          <?php bloginfo('name'); ?>
        </a>
      </div>

      <!-- ナビゲーション -->
      <nav class="site_nav">
        <?php wp_nav_menu(
          [
            'theme_location' => 'header-menu', // どの登録メニューを使うか」
            'menu_class' => 'nav_list'   // ulタグのクラス　ここまでしか出力できない。
          ]
        ); ?>
      </nav>

    </div>
  </header>