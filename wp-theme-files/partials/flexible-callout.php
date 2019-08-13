<?php
/**
 * ACF Flexible field
 * used by Classes Template
 * full width with brand color background and standard content
 */
?>

<section class="callout-section">
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/texture-white-top.png" class="textured-border-top" alt="" />
  <article class="narrow">
    <?php echo apply_filters('the_content', wp_kses_post(get_sub_field('callout_section_content'))); ?>
  </article>
  <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/texture-white-2.png" class="textured-border" alt="" />
</section>