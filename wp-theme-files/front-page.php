<?php get_header(); ?>
  <main id="hp-main">
    <section id="hp-about">
      <div class="container">
        <article class="intro-centered">
          <?php
            get_template_part('partials/section', 'page_title');

            if(have_posts()){
              while(have_posts()){
                the_post();

                the_content();
              }
            }
          ?>
        </article>
      </div>
      <div class="hp-section-image" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/soldiers-targets.jpg); background-position:center top;">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/texture-gold.png" class="textured-border" alt="" />      
      </div>
    </section>

    <?php get_template_part('partials/section', 'manuals_carousel'); ?>

    <section id="hp-training-options">
      <div class="container">
        <?php get_template_part('partials/section', 'training_options'); ?>
      </div>
    </section>

    <section id="hp-videos" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/soldiers-dark.jpg); background-position:right top;">
      <div class="container">
        <div class="row">
          <div class="col-md-5">
            <article>
              <h2><span>Lights. Camera.</span>ACTION.</h2>
              <?php echo apply_filters('the_content', wp_kses_post(get_field('videos_section_content'))); ?>
            </article>
          </div>
          <div class="col-md-7">
            <?php if(get_field('video_section_display') == 'Video'): ?>
              <div class="embed-responsive embed-responsive-16by9">
                <?php echo esc_url(get_field('video_embed_link')); ?>
              </div>
            <?php else: ?>
              <?php $video_image = get_field('video_image'); if(!empty($video_image)): ?>
                <img src="<?php echo esc_url($video_image['url']); ?>" class="img-fluid mx-auto" alt="<?php echo esc_attr($video_image['alt']); ?>" />
              <?php endif; ?>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </section>

    <section id="join-forum">
      <div class="row no-gutters">
        <div class="col-sm-6 text-side">
          <article>
            <?php echo apply_filters('the_content', wp_kses_post(get_field('join_forum_section_content'))); ?>
          </article>
        </div>
        <?php
          $join_forum_bg = get_field('join_forum_section_background_image');
          $join_forum_bg_css = get_field('join_forum_section_background_image_css');
        ?>
        <div class="col-sm-6 d-flex justify-content-center align-items-center image-side" style="background-image:url(<?php echo esc_url($join_forum_bg['url']); ?>); <?php echo esc_attr($join_forum_bg_css); ?>">
        <?php $join_forum_link = get_field('join_forum_link'); ?>
          <a href="<?php echo esc_url($join_forum_link['url']); ?>" class="large-arrow-link"><span>JOIN<br />NOW</span><span>&gt;</span></a>
          <div class="dark-overlay"></div>
        </div>
      </div>
    </section>

    <?php get_template_part('partials/section', 'upcoming_courses'); ?>

    <?php
      $new_posts = new WP_Query(array(
        'post_type' => 'post',
        'posts_per_page' => 3,
        'post_status' => 'publish'
      ));

      if($new_posts->have_posts()): ?>
        <section id="hp-blog-loop">
          <div class="container">
            <h2><?php echo esc_html__('Blog', 'maxvelocity'); ?></h2>
            <div id="blog-loop" class="d-flex flex-wrap justify-content-between">
              <?php while($new_posts->have_posts()): $new_posts->the_post(); ?>
                <?php get_template_part('partials/loop', 'post_item'); ?>
              <?php endwhile; ?>
            </div>
            <p class="text-center mt-4">
              <a href="<?php echo esc_url(home_url('blog')); ?>" class="btn-main"><?php echo esc_html__('All Posts', 'maxvelocity'); ?></a>
            </p>
      </div>
    </section>
  </main>
<?php get_footer();