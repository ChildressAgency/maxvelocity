<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <article class="intro-centered">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();
              
              get_template_part('partials/section', 'page_title');
              the_content();
            }
          }
        ?>

        <div id="location-cards" class="icon-cards d-flex flex-wrap justify-content-around">
          <div class="icon-card">
            <div class="icon-card-icon d-flex align-items-center">
              <?php $wv_training_image = get_field('wv_training_image'); ?>
              <img src="<?php echo esc_url($wv_training_image['url']); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_attr($wv_training_image['alt']); ?>" />
            </div>
             <div class="icon-card-body">
               <h3 class="icon-card-title"><?php echo esc_html(get_field('wv_training_title')); ?></h3>
               <?php $wv_training_link = get_field('wv_training_link'); ?>
               <a href="<?php echo esc_url($wv_training_link['url']); ?>" class="learn-more"><?php echo esc_html($wv_training_link['title']); ?></a>
             </div>
          </div>
          <div class="icon-card">
            <div class="icon-card-icon d-flex align-items-center">
              <?php $mobile_training_image = get_field('mobile_training_image'); ?>
              <img src="<?php echo esc_url($mobile_training_image['url']); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_attr($mobile_training_image['alt']); ?>" />
            </div>
            <div class="icon-card-body">
              <h3 class="icon-card-title"><?php echo esc_html(get_field('mobile_training_title')); ?></h3>
              <?php $mobile_training_link = get_field('mobile_training_link'); ?>
              <a href="<?php echo esc_url($mobile_training_link['url']); ?>" class="learn-more"><?php echo esc_html($mobile_training_link['title']); ?></a>
            </div>
          </div>
        </div>

        <div class="disclaimer-box">
          <?php $private_classes_link = get_field('private_classes_link'); ?>
          <p><?php echo esc_html('private_classes_message'); ?>  <a href="<?php echo esc_url($private_classes_link['url']); ?>" class="btn-main"><?php echo esc_html($private_classes_link['title']); ?></a></p>
        </div>
      </article>
    </div>

    <section id="training-links" class="fluid-img-links">
      <div class="row no-gutters">
        <?php $training_classes_image = get_field('training_classes_image'); ?>
        <div class="col-md-6 d-flex justify-content-center align-items-center" style="background-image:url(<?php echo esc_url($training_classes_image['url']); ?>); background-position: center center;">
          <?php $training_classes_link = get_field('training_classes_link'); ?>
          <a href="<?php echo esc_url($training_classes_link['url']); ?>" class="large-arrow-link"><span>Training<br />Classes</span><span>&gt;</span></a>
          <div class="dark-overlay"></div>
        </div>
        <?php $training_calendar_image = get_field('training_calendar_image'); ?>
        <div class="col-md-6 d-flex justify-content-center align-items-center" style="background-image:url(<?php echo esc_url($training_calendar_image['url']); ?>); background-position:center center;">
          <?php $training_calendar_link = get_field('training_calendar_link'); ?>
          <a href="<?php echo esc_url($training_calendar_link['url']); ?>" class="large-arrow-link"><span>Training<br />Calendar</span><span>&gt;</span></a>
          <div class="dark-overlay"></div>
        </div>
      </div>
    </section>

    <?php if(have_rows('locations')): ?>
      <section id="location-details">
        <div class="container">
          <?php $l = 1; while(have_rows('locations')): the_row(); ?>
            <div class="row">
              <div class="col-lg-5<?php if($l % 2 == 0){ echo ' order-lg-last'; } ?>">
                <article>
                  <?php echo apply_filters('the_content', wp_kses_post(get_field('location_description'))); ?>
                  <p class="text-center mt-5">
                    <a href="<?php echo esc_url(home_url('tactical-classes')); ?>" class="btn-main">Classes</a>
                  </p>
                </article>
              </div>
              <div class="col-lg-7<?php if($l % 2 == 0){ echo ' order-lg-first'; } ?>">
                <?php $location_gallery = get_sub_field('location_gallery'); ?>
                <?php if($location_gallery): $i = 0; ?>
                  <div id="location-gallery-<?php echo $l; ?>" class="carousel slide carousel-heights" data-ride="carousel">
                    <div class="carousel-inner">
                      <?php foreach($location_gallery as $image): ?>
                        <div class="carousel-item<?php if($i == 0){ echo ' active'; } ?>">
                          <img src="<?php echo esc_url($image['url']); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_attr($image['alt']); ?>" />
                          <h5 class="slide-image-caption"><?php echo esc_html($image['caption']); ?></h5>
                        </div>
                      <?php $i++; endforeach; ?>
                    </div>
                  </div>
                  <div class="carousel-controls">
                    <a href="#location-gallery-<?php echo $l; ?>" class="carousel-control-prev" role="button" data-slide="prev">
                      <span class="prev-icon" aria-hidden="true">&lt;</span>
                      <span class="sr-only"><?php echo esc_html__('Previous', 'maxvelocity'); ?></span>
                    </a>
                    <span class="slide-counter"></span>
                    <a href="#location-gallery-<?php echo $l; ?>" class="carousel-control-next" role="button" data-slide="next">
                      <span class="next-icon" aria-hidden="true">&gt;</span>
                      <span class="sr-only"><?php echo esc_html__('Next', 'maxvelocity'); ?></span>
                    </a>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          <?php $l++; endwhile; ?>
        </div>
      </section>
    <?php endif; ?>

        <div class="disclaimer-box" style="margin-top:100px;">
          <?php echo apply_filters('the_content', wp_kses_post(get_field('disclaimer'))); ?>
        </div>
      </div>
    </section>
  </main>
<?php get_footer();