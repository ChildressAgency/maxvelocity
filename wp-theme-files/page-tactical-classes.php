<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <article class="intro-centered">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();

              echo '<h1>' . esc_html(get_the_title()) . '</h1>';
              the_content();
            }
          }
        ?>
      </article>
    </div>

    <section id="training-options" class="callout-section">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/texture-white-top.png" class="textured-border-top" alt="" />
      <div class="container">
        <?php get_template_part('partials/section', 'training_options'); ?>
      </div>
      <a href="#" class="view-below d-block mx-auto text-center">
        <p><?php echo esc_html__('View Classes Below', 'maxvelocity'); ?></p>
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/chevron-streak.png" class="img-fluid d-block mx-auto" alt="" />
      </a>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/texture-white-2.png" class="textured-border" alt="" />
    </section>

    <?php if(have_rows('classes_offered')): ?>
      <section id="classes-offered">
        <div class="container">

          <div class="intro-centered">
            <?php echo apply_filters('the_content', wp_kses_post(get_field('classes_offered_section_intro'))); ?>
          </div>
          
          <?php while(have_rows('classes_offered')): the_row(); ?>
            <div class="class-category">

              <div class="class-category-title">
                <h3><?php echo esc_html(get_sub_field('class_category')); ?></h3>
              </div>

              <?php if(have_rows('classes')): ?>
                <div class="classes-category-loop d-flex flex-wrap justify-content-between">
                  <?php while(have_rows('classes')): the_row(); ?>

                    <div class="offered-class">
                      <?php $class_image = get_sub_field('class_image'); ?>
                      <div class="offered-class-card" style="background-image:url(<?php echo esc_url($class_image['url']); ?>); background-position:center center;">
                        <div class="offered-class-lede d-flex flex-column justify-content-center">
                          <p><?php echo esc_html(get_sub_field('class_description')); ?></p>
                          <hr />
                          <?php $class_link = get_sub_field('class_link'); if(!empty($class_link)): ?>
                            <a href="<?php echo esc_url($class_link['url']); ?>"><?php echo esc_html($class_link['title']); ?></a>
                          <?php endif; ?>
                        </div>
                      </div>
                      <h4><?php echo esc_html(get_sub_field('class_title')); ?></h4>
                    </div>

                  <?php endwhile; ?>
                </div>

              <?php endif; ?>
            </div>
          <?php endwhile; ?>
        </div>
      </section>
    <?php endif; ?>

    <section id="class-info" class="icon-cards">
      <div class="container">
        <div class="d-flex flex-wrap justify-content-between">

          <div class="icon-card">
            <div class="icon-card-icon d-flex align-items-center">
              <?php $prerequisites_image = get_field('prerequisites_image'); ?>
              <img src="<?php echo esc_url($prerequisites_image['url']); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_attr($prerequisites_image['alt']); ?>" />
            </div>
            <div class="icon-card-body">
              <h3 class="icon-card-title"><?php echo esc_html(get_field('prerequisites_title')); ?></h3>
              <?php echo apply_filters('the_content', wp_kses_post(get_field('prerequisites_description'))); ?>
            </div>
          </div>

          <div class="icon-card">
            <div class="icon-card-icon d-flex align-items-center">
              <?php $accommodations_image = get_field('accommodations_image'); ?>
              <img src="<?php echo esc_url($accommodations_image['url']); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_attr($accommodations_image['alt']); ?>" />
            </div>
            <div class="icon-card-body">
              <h3 class="icon-card-title"><?php echo esc_html(get_field('accommodations_title')); ?></h3>
              <?php echo apply_filters('the_content', wp_kses_post(get_field('accommodations_description'))); ?>
            </div>
          </div>

          <div class="icon-card">
            <div class="icon-card-icon d-flex align-items-center">
              <?php $camping_image = get_field('camping_image'); ?>
              <img src="<?php echo esc_url($camping_image['url']); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_attr($camping_image['alt']); ?>" />
            </div>
            <div class="icon-card-body">
              <h3 class="icon-card-title"><?php echo esc_html(get_field('camping_title')); ?></h3>
              <?php echo apply_filters('the_content', wp_kses_post(get_field('camping_description'))); ?>
            </div>
          </div>

        </div>
      </div>
    </section>

    <?php if(get_field('classes_disclaimer')): ?>
      <section id="disclaimer">
        <div class="container">
          <div class="disclaimer-box">
            <?php echo apply_filters('the_content', wp_kses_post(get_field('classes_disclaimer'))); ?>
          </div>
        </div>
      </section>
    <?php endif; ?>
  </main>
<?php get_footer();