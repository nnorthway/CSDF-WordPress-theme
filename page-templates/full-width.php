<?php
/**
* Template Name: Full Width
* @since 1.0.0
* @version 1.0.0
*/

?>
<?php get_header(); ?>
<?php
if (have_posts()) {
  while (have_posts()) {
    the_post();
    ?>
    <?php the_content(); ?>
    <?php
  }
} else {
  echo "We're sorry, there was an error loading this page. Please refresh your browser";
}
?>
<?php get_footer(); ?>
