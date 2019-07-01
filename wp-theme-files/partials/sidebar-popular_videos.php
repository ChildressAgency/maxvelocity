<?php
/**
 * Sidebar to list popular videos
 * used on the videos page and videos single
 */
?>

<?php 
  $videos_page = get_page_by_path('videos');
  $videos_page_id = $videos_page->ID;
?>

<h3><?php echo esc_html__('Subscribe', 'maxvelocity'); ?>&nbsp;
  <a href="<?php echo esc_url(get_field('youtube_channel_link', $videos_page_id)); ?>">
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/youtube-subscribe-btn.jpg" class="img-fluid" alt="<?php echo esc_attr__('YouTube Icon', 'maxvelocity'); ?>" />
  </a>
</h3>

<hr class="video-separator" />
<h2><?php echo esc_html__('Popular', 'maxvelocity'); ?></h2>

<?php
  $popular_vids = new WP_Query(array(
    'post_type' => 'videos',
    'posts_per_page' => -1,
    'post_status' => 'publish',
    'tax_query' => array(
      array(
        'taxonomy' => 'video_cats',
        'field' => 'slug',
        'terms' => 'popular'
      )
    )
  ));

  if($popular_vids->have_posts()): ?>
    <ul class="list-unstyled">
      <?php while($popular_vids->have_posts()): $popular_vids->the_post(); ?>
        <?php 
          $video_placeholder = get_field('video_placeholder_image');
          if(empty($video_placeholder)){
            $video_placeholder = get_field('default_video_placeholder_image', $videos_page_id);
          }
        ?>
        <li>
          <a href="<?php the_permalink(); ?>">
            <img src="<?php echo esc_url($video_placeholder['url']); ?>" class="img-fluid d-block mx-auto" alt="<?php echo esc_attr($video_placeholder['alt']); ?>" />
          </a>
        </li>
      <?php endwhile; ?>
    </ul>
<?php endif; wp_reset_postdata(); 