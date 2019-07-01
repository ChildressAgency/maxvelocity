<?php 
/**
 * Section to show all videos
 * used by videos page and videos single
 */
?>

<?php
  $videos = new WP_Query(array(
    'post_type' => 'videos',
    'posts_per_page' => -1,
    'post_status' => 'publish'
  ));

  if($videos->have_posts()): ?>
    <div class="all-videos">
      <h2><?php echo esc_html__('All Videos', 'maxvelocity'); ?></h2>
      <div id="all-videos-loop" class="d-flex flex-wrap justify-content-between">
        <?php while($videos->have-posts()): $videos->the_post(); ?>
          <div class="video-link">
            <?php 
              $videos_page = get_page_by_path('videos');
              $videos_page_id = $videos_page->ID;

              $video_placeholder = get_field('video_placeholder_image');
              if(empty($video_placeholder)){
                $video_placeholder = get_field('default_video_placeholder_image', $video_page_id);
              }
            ?>
            <a href="<?php the_permalink(); ?>">
              <img src="<?php echo esc_url($video_placeholder['url']); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_attr($video_placeholder['alt']); ?>" />
            </a>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
<?php endif; wp_reset_postdata(); ?>