<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header">
  <div class="header-inner">

    <div class="site-branding">
      <a class="site-logo" href="<?php echo esc_url(home_url('/')); ?>">
            <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/assets/img/logo-planty.webp'); ?>" alt="Planty">
        </a>
    </div>

    <nav class="site-nav" aria-label="Menu principal">
      <?php
      wp_nav_menu([
        'menu' => 'Menu Principal',
        'container' => false,
        'menu_class' => 'nav-menu',
        ]);
      ?>
    </nav>

  </div>
</header>

