<?php
/**
 * Sidebar for Blog and general archive pages
 */

if(!is_active_sidebar('sidebar-blog')){ return; }
?>

<div id="blog-sidebar">
  <div class="sidebar-section sidebar-search">
    <?php get_search_form(); ?>
  </div>
  <?php dynamic_sidebar('sidebar-blog'); ?>
</div>
