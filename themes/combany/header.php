<?php

/**
 * The header for our theme
 *
 * @package combany
 * @subpackage combany
 * @since 1.0.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<?php wp_head(); ?>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title><?php bloginfo('name'); ?></title>
</head>

<body class="combany">
  <nav id="navbar">
    <ul class="combany__navbar navbar">
      <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name')); ?>" rel="home">
        <li class="combany__navbar-item">
          <?php
          $custom_logo_id = get_theme_mod('custom_logo');
          $custom_logo_data = wp_get_attachment_image_src($custom_logo_id, 'full');
          $custom_logo_url = $custom_logo_data[0];
          ?>
          <img src="<?= esc_url($custom_logo_url) != '' ? esc_url($custom_logo_url) : get_template_directory_uri() . '/images/logo.png' ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />
        </li>
      </a>
      <div class="combany__navbar-menu">
        <?php
        $menuLocations = get_nav_menu_locations();
        $menuID = $menuLocations['header'];
        $primaryNav = wp_get_nav_menu_items($menuID);

        $i = 1;
        foreach ($primaryNav as $navItem) {
          echo '<a class="" href="' . $navItem->url . '" data-menuItemOrder="' . $i++ . '" title="' . $navItem->title . '">
                    <li class="combany__navbar-menu-item">' . $navItem->title . '</li>
                     </a>';
        } ?>

      </div>
    </ul>
  </nav>
  <nav class="combany__mobile-nav" role="navigation">
    <div id="menuToggle">
      <input type="checkbox" />
      <span></span>
      <span></span>
      <span></span>
      <ul id="menu">
        <a href="#">
          <li>Home</li>
        </a>
        <a href="#">
          <li>News</li>
        </a>
        <a href="#">
          <li>Careers</li>
        </a>
        <a href="#">
          <li>People</li>
        </a>
        <a href="#">
          <li>About Us</li>
        </a>
        <a href="#">
          <li>Contact</li>
        </a>
      </ul>
    </div>
  </nav>
  <div class="<?= is_front_page() ? "combany-home" : "" ?>" id="top">
    <?php if (is_front_page()) : ?>
      <header style="background-image: url(<?= get_theme_mod('combany_first_image') != '' ? get_theme_mod('combany_first_image') : get_template_directory_uri() . '/images/background.png' ?>);">
      <?php else : ?>
        <header class="combany-header-other">
        <?php endif; ?>