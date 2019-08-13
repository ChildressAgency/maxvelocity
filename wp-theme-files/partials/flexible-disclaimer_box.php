<?php
/**
 * ACF Flexible field
 * used by Classes Template
 */
?>

<section id="disclaimer">
  <div class="container">
    <div class="disclaimer-box">
      <?php echo wp_kses_post(get_sub_field('disclaimer')); ?>
    </div>
  </div>
</section>