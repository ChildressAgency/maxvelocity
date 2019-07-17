<?php
/**
 * ACF Flexible field
 * used by Classes Template
 * border box with title and standard content
 */
?>

<section class="container">
  <div class="box-callout">
    <h3 class="box-callout-title"><?php echo esc_html(get_sub_field('border_box_title')); ?></h3>
    <div class="box-callout-body">
      <?php echo apply_filters('the_content', wp_kses_post(get_sub_field('bordered_box_content'))); ?>
    </div>
  </div>
</section>