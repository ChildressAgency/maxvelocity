<?php get_header(); ?>
<main id="main">
  <div class="container">
    <article class="intro-centered">
      <?php get_template_part('partials/section', 'page_title'); ?>
      <?php
        $videos_page = get_page_by_path('videos');
        $videos_page_id = $videos_page->ID;

        $videos_intro = new WP_Query(array(
          'post_type' => 'videos',
          'page_id' => $videos_page_id
        ));

        if($videos_intro->have_posts()){
          while($videos_intro->have_posts()){
            $videos_intro->the_post();

            the_content();
          }
        } wp_reset_postdata();
      ?>
    </article>

    <div class="row videos-main">
      <div class="col-md-8 video-featured">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <h3 class="video-title"><?php the_title(); ?></h3>
          <div class="embed-responsive embed-responsive-16by9">
            <?php echo get_field('video_embed_link'); ?>
          </div>

          <div class="video-description">
            <?php the_content(); ?>
          </div>
        <?php endwhile; endif; ?>
      </div>

      <div class="col-md-4 video-popular">
        <?php get_template_part('partials/sidebar', 'popular_videos'); ?>
      </div>
    </div>
    <hr class="videos-separator" />

    <?php get_template_part('partials/section', 'all_videos'); ?>
  </div>
</main>
<?php get_footer();