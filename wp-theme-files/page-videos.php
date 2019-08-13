<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <article class="intro-centered">
        <?php get_template_part('partials/section', 'page_title'); ?>
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();
              
              the_content();
            }
          }
        ?>
      </article>

      <div class="row videos-main">
        <div class="col-md-8 video-featured">
          <h2><?php echo esc_html__('Most Recent', 'maxvelocity'); ?></h2>
          <?php
            $most_recent_vid = new WP_Query(array(
              'post_type' => 'videos',
              'posts_per_page' => 1,
              'orderby' => 'post_date',
              'order' => 'DESC'
            ));

            if($most_recent_vid->have_posts()): while($most_recent_vid->have_posts()): $most_recent_vid->the_post(); ?>

              <h3 class="video-title"><?php the_title(); ?></h3>
              <div class="embed-responsive embed-responsive-16by9">
                <?php echo get_field('video_embed_link'); ?>
              </div>

              <div class="video-description">
                <?php the_content(); ?>
              </div>
          <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>

        <div class="col-md-4 video-popular">
          <?php get_template_part('partials/sidebar', 'popular_videos'); ?>
        </div>
      </div>
      <hr class="video-separator" />

      <?php get_template_part('partials/section', 'all_videos'); ?>
    </div>
  </main>
<?php get_footer();