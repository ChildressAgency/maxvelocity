<?php
/**
 * ACF Flexible field
 * used by Classes Template
 * full width side-by-side links with background images
 */
?>

<section id="more-info-links" class="fluid-img-links">
  <div class="row no-gutters">
    <?php $left_side_iamge = get_sub_field('left_side_image'); ?>
    <div class="col-md-6 d-flex justify-content-center align-items-center" style="background-image:url(<?php echo esc_url($left_side_iamge['url']); ?>); background-position:center center;">
      <?php $left_side_link = get_sub_field('left_side_link'); ?>
      <?php if($left_side_link): ?>
        <a href="<?php echo esc_url($left_side_link['url']); ?>"><?php echo esc_html($left_side_link['title']); ?></a>
      <?php endif; ?>
      <div class="dark-overlay"></div>
    </div>
    <?php $right_side_image = get_sub_field('right_side_image'); ?>
    <div class="col-md-6 d-flex justify-content-center align-items-center" style="background-image:url(<?php echo esc_url($right_side_image['url']); ?>); background-position:center center;">
      <?php $right_side_link = get_sub_field('right_side_link'); ?>
      <?php if($right_side_link): ?>
        <a href="<?php echo esc_url($right_side_link['url']); ?>"><?php echo esc_html($right_side_link['title']); ?></a>
      <?php endif; ?>
      <div class="dark-overlay"></div>
    </div>
  </div>
</section>