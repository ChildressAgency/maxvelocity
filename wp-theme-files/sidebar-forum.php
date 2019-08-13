<?php
/**
 * Sidebar for forum pages
 */

if(!is_active_sidebar('sidebar-forum')){ return; }
?>

<div id="forum-sidebar">
  <?php dynamic_sidebar('sidebar-forum'); ?>
</div>