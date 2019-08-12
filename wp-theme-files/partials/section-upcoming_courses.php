<section id="upcoming-courses">
  <div class="container">
    <div class="intro-centered">
      <?php //echo apply_filters('the_content', wp_kses_post(get_field('upcoming_courses_intro'))); ?>
      <?php echo wp_kses_post(get_field('upcoming_courses_intro')); ?>
    </div>
    <?php echo EM_Events::output(array('limit' => 4)); ?>

    <p class="text-center mt-4">
      <a href="<?php echo esc_url(home_url('events')); ?>" class="btn-main"><?php echo esc_html__('View Calendar', 'maxvelocity'); ?></a>
    </p>
  </div>
</section>