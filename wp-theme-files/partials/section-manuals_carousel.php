<?php
$manuals = get_field('manuals');
if($manuals): ?>
  <section id="hp-manuals">
    <h2><?php the_field('manuals_section_title'); ?></h2>
    <div class="container">
      <div id="manuals-carousel" class="carousel slide carousel-heights" data-ride="carousel">
        <ol class="carousel-indicators">
          <?php for($i = 0; $i < count($manuals); $i++): ?>
            <li data-target="#manuals-carousel" data-slide-to="<?php echo $i; ?>"<?php if($i == 0){ echo ' class="active"'; } ?>></li>
          <?php endfor; ?>
        </ol>

        <div class="carousel-inner">

          <?php foreach($manuals as $manual): ?>
            <div class="carousel-item active">
              <div class="row">
                <div class="col-sm-7">
                  <div class="carousel-caption">
                    <?php echo apply_filters('the_content', wp_kses_post($manual['manual_slide_content'])); ?>

                    <?php 
                      $manual_link = $manual['manual_link'];
                      if(!empty($manual_link)): ?>
                        <a href="<?php echo esc_url($manual_link['url']); ?>" class="btn-main" target="<?php echo esc_attr($manual_link['target'] ? $manual_link['target'] : '_self'); ?>"><?php echo esc_html($manual_link['title']); ?></a>
                    <?php endif; ?>
                  </div>
                </div>
                <div class="col-sm-5">
                  <?php 
                    $manual_image = $manual['manual_image'];
                    if(!empty($manual_image)): ?>
                      <img src="<?php echo esc_url($manual_image['url']); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_attr($manual_image['alt']); ?>" />
                  <?php endif; ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

        </div>
      </div>
    </div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/texture-white-2.png" class="textured-border" alt="" />
  </section>
<?php endif;