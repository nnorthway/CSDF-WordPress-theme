<?php
/**
* The Single Post Template
* @since 1.0.0
* @version 1.0.0
*/

?>
<?php get_header(); ?>
<div class='container'>
  <div class='row'>
    <div class='col s12 m10 offset-m1 post'>
      <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          ?>
          <div class='post-header center-align'>
            <?php
            if (has_post_thumbnail()) {
              the_post_thumbnail();
            }
            ?>
            <h2 class='wrap'><?php the_title(); ?></h2>
            <div class='meta'>
              <?php echo the_date(); ?> by <?php echo the_author(); ?>
            </div>
          </div>
          <div class='post-content'>
            <?php the_content(); ?>
          </div>
          <div class='post-footer'>
            <?php
            echo "<p>Filed Under: ";
            the_category(', ');
            echo "</p>";
            echo "<p>Tags: ";
            the_tags('', ', ', '');
            echo "</p>";
            ?>
          </div>
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
