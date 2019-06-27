<?php
/**
 * General loop item
 * used by index and search template files
 */
?>

<div class="course-loop">
  <div class="course-short">
    <h3><a href="<?php the_permalink(); ?>" class="course-title-link"><?php the_title(); ?></a></h3>
    <div class="course-excerpt">
      <?php the_excerpt(); ?>
    </div>
  </div>
</div>