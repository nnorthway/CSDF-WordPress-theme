<?php
/**
* The Functions
* @since 1.0.0
* @version 1.0.0
*/

function csdf_assets() {
  /*
    Style and Script Stack
    Google Fonts
    Theme Styles
    jQuery
    FontAwesome
    Theme Scripts
  */
  wp_enqueue_style('gfonts', 'https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500|Slabo+27px|Material+Icons');
  wp_enqueue_style('csdf', get_stylesheet_uri());
  wp_enqueue_script('jquery');
  wp_enqueue_script('fa', 'https://use.fontawesome.com/9b0da6ddab.js', null, null);
  wp_enqueue_script('materialize', get_template_directory_uri() . '/js/materialize.js', null, null);
  wp_enqueue_script('csdf', get_template_directory_uri() . '/js/scripts.js', null, null);
}
add_action('wp_enqueue_scripts', 'csdf_assets');

add_theme_support('custom-header', array(
  'default-image' => '',
  'width' => 0,
  'height' => 0,
  'flex-height' => false,
  'flex-width' => false,
  'uploads' => true,
  'random-default' => false,
  'header-text' => true,
  'default-text-color' => '#000'
));

?>
