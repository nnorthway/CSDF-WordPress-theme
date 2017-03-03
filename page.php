<?php
/**
* The Single Page Template
* @since 1.0.0
* @version 1.0.0
*/

?>
<?php get_header(); ?>
<div class='container'>
  <div class='row'>
    <div class='col s12 m10 offset-m1'>
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
    </div>
  </div>
</div>
<?php get_footer(); ?>
