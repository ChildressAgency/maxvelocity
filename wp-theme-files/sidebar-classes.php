<?php
/**
 * Sidebar for class pages
 */

if(!is_active_sidebar('sidebar-classes')){ return; }
?>

<div id="classes-sidebar">
  <?php dynamic_sidebar('sidebar-classes'); ?>
</div>