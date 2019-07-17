<?php
/**
 * ACF Flexible field
 * used by Classes Template
 * Standard wysiwyg editor section
 */
?>

<section class="container">
  <article class="intro-centered">
    <?php echo wp_kses_post(get_sub_field('content_standard')); ?>
  </article>
</section>
