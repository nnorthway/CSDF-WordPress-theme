<?php
/**
* The Category Template
* @since 1.0.0
* @version 1.0.0
*/

?>
<?php get_header(); ?>
<div class='container'>
  <div class='row'>
    <?php
    if (have_posts()) :
      the_post();
      echo "<h5>Category: ";
      the_category(', ');
      echo "</h5>"; 
    endif;
    ?>
  </div>
  <div class='row'>
    <div class='col s12 m8'>
      <?php
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          ?>
          <div class='card'>
            <?php if (has_post_thumbnail()) {
              ?>
              <div class='card-image'>
                <?php the_post_thumbnail(); ?>
                <span class='card-title'><?php the_title(); ?></span>
              </div>
              <?php
            }
            ?>
            <div class='card-content'>
              <?php if (!has_post_thumbnail()) : ?>
                <span class='card-title'><?php the_title(); ?></span>
              <?php endif; ?>
              <p>
                <span class='grey-text'><?php the_date(); ?></span><br />
                <?php if (has_excerpt()) :
                  the_excerpt();
                else :
                  echo wp_trim_excerpt();
                endif; ?>
              </p>
            </div>
            <div class='card-action right-align'>
              <a href='<?php the_permalink(); ?>' class='blue-text'>Read More</a>
            </div>
          </div>
          <?php
        }
        ?>
        <div class='center-align'>
          <ul class='pagination'>
            <li><?php next_posts_link("<span><i class='material-icons left'>chevron_left</i>Older Posts</span>"); ?></li>
            <li><?php previous_posts_link("<span>Newer Posts<i class='material-icons right'>chevron_right</i></span>"); ?></li>
          </ul>
        </div>
        <?php
      }
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
