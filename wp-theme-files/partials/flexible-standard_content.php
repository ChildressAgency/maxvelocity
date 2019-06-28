<?php
/**
 * ACF Flexible field
 * used by Classes Template
 * Standard wysiwyg editor section
 */
?>

<section class="container">
  <article class="intro-centered">
    <?php echo apply_filters('the_content', wp_kses_post(get_sub_field('content_standard'))); ?>
  </article>
</section>
