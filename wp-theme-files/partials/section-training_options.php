<?php
  $training_options = get_field('training_options');
  if($training_options): ?>
    <section id="hp-training-options">
      <div class="container">
        <h2><?php the_field('training_options_section_title'); ?></h2>

        <ul id="options-tabs" class="nav nav-pills nav-fill flex-lg-nowrap" role="tablist">
          <?php $i = 0; foreach($training_options as $option): ?>
            <li class="nav-item">
              <a href="#tab-content-<?php echo $i; ?>" id="tab-<?php echo $i; ?>" class="nav-link<?php if($i == 0){ echo ' active'; } ?>" data-toggle="pill" role="tab" aria-controls="tab-content-<?php echo $i; ?>" aria-selected="<?php echo $i == 0 ? 'true' : 'false'; ?>"><?php echo esc_html($option['training_option_title']); ?></a>
            </li>
          <?php $i++; endforeach; ?>
        </ul>
        <?php reset($training_options); ?>

        <div id="options-content" class="tab-content">

          <?php $p = 0; foreach($training_options as $option): ?>
            <div id="tab-content-<?php echo $p; ?>" class="tab-pane fade<?php if($p == 0){ echo ' show active'; } ?>" role="tabpanel" aria-labelledby="tab-<?php echo $p; ?>">
              <div class="row">
                <div class="col-sm-6">
                  <?php echo apply_filters('the_content', wp_kses_post($option['training_option_content'])); ?>

                  <?php 
                    $training_option_link = $option['training_option_link'];
                    if(!empty($training_option_link)): ?>
                      <a href="<?php echo esc_url($training_option_link['url']); ?>" class="btn-main" target="<?php echo esc_attr($training_option_link['target'] ? $training_option_link['target'] : '_self'); ?>"><?php echo esc_html($training_option_link['title']); ?></a>
                  <?php endif; ?>
                </div>
                <div class="col-sm-6">
                  <?php 
                    $training_option_img = $option['training_option_image'];
                    if(!empty($training_option_img)): ?>
                      <img src="<?php echo esc_url($training_option_img['url']); ?>" class="img-fluid d-block mt-5 mt-sm-0 mx-auto" alt="<?php echo esc_attr($training_option_img['alt']); ?>" />
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php $p++; endforeach; ?>

        </div>
      </div>
    </section>
<?php endif;