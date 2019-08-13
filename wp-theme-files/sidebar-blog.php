<?php
/**
 * Sidebar for Blog and general archive pages
 */

if(!is_active_sidebar('sidebar-blog')){ return; }
?>

<div id="blog-sidebar">
  <?php dynamic_sidebar('sidebar-blog'); ?>
</div>
