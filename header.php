<?php
/**
* The Header Template
* @since 1.0.0
* @version 1.0.0
*/

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class='no-js'>
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php bloginfo('name'); ?></title>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <nav class='white'>
    <div class='nav-wrapper'>
      <div class='container'>
        <a href='<?php bloginfo('url'); ?>' class='brand-logo'>
          <?php
          if (get_header_image()) {
            ?>
            <img src='<?php header_image(); ?>' />
            <?php
          } else {
            bloginfo('name');
          }
          ?>
        </a>
        <a href='#' data-activates='side-menu' class='button-collapse'><i class='material-icons black-text'>menu</i></a>
        <?php
        $menu = array(
          'menu_class' => 'right hide-on-med-and-down',
          'depth' => 1
        );
        wp_nav_menu($menu);
        $smallMenu = array(
          'menu_class' => 'side-nav',
          'menu_id' => 'side-menu',
          'depth' => 1
        );
        wp_nav_menu($smallMenu);
        ?>
      </div>
    </div>
  </nav>
  <main>
