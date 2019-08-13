<?php
/**
 * ACF Flexible field
 * used by Classes Template
 * Standard content on the left and img carousel and more content on the right
 */
?>

<section class="equipment-details">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <?php echo apply_filters('the_content', wp_kses_post(get_sub_field('equipment_details_content'))); ?>

        <?php $shop_link = get_sub_field('shop_now_link'); ?>
        <?php if(!empty($shop_link)): ?>
          <p class="text-center mt-5">
            <a href="<?php echo esc_url($shop_link['url']); ?>" class="btn-main"><?php echo esc_html($shop_link['title']); ?></a>
          </p>
        <?php endif; ?>
      </div>

      <div class="col-md-7">
        <?php 
          $equipment_gallery = get_sub_field('equipment_gallery');
          $carousel_id = uniqid();
          if($equipment_gallery): ?>
            <div id="equipment-carousel-<?php echo $carousel_id; ?>" class="carousel slide carousel-heights" data-ride="carousel">
              <div class="carousel-inner">
                <?php $e = 0; foreach($equipment_gallery as $image): ?>
                  <div class="carousel-item<?php if($e == 0){ echo ' active'; } ?>">
                    <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <h5 class="slide-image-caption"><?php echo esc_html($image['caption']); ?></h5>
                  </div>
                <?php $e++; endforeach; ?>
              </div>

              <div class="carousel-controls">
                <a href="#equipment-carousel-<?php echo $carousel_id; ?>" class="carousel-control-prev" role="button" data-slide="prev">
                  <span class="prev-icon" aria-hidden="true">&lt;</span>
                  <span class="sr-only"><?php echo esc_html__('Previous', 'maxvelocity'); ?></span>
                </a>
                <span class="slide-counter"></span>
                <a href="#equipment-carousel-<?php echo $carousel_id; ?>" class="carousel-control-next" role="button" data-slide="next">
                  <span class="next-icon" aria-hidden="true">&gt;</span>
                  <span class="sr-only"><?php echo esc_html__('Next', 'maxvelocity'); ?></span>
                </a>
              </div>
            </div>
        <?php endif; ?>

        <div class="other-images">
          <?php echo apply_filters('the_content', wp_kses_post(get_sub_field('other_equipment_content'))); ?>
        </div>
      </div>
    </div>
  </div>
</section>