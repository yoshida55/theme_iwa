<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php wp_title(); ?></title>
  <mete name="description" content="<?php bloginfo('description'); ?>">
    <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('img/favicon.ico')); ?>">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <header class="site-header">
    <div class="header-inner">

      <!-- ロゴ -->
      <div class="site-logo">
        <a href="<?php echo home_url(); ?>">
          <?php bloginfo('name'); ?>
        </a>
      </div>

      <!-- ナビゲーション -->
      <nav class="site-nav">
        <?php wp_nav_menu(['theme_location' => 'header-menu']); ?>
      </nav>

    </div>
  </header>