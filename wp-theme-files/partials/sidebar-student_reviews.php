<?php
/**
 * Sidebar for Student Reviews pages
 */
?>

<?php
  //get first year and next 25 years 
  $review_years = array();
  $cur_year = date('Y');
  for($r = 2013; $r <= (int)$cur_year; $r++){
    $review_years[] = $r;
  }
  rsort($review_years);
?>

<div id="review-authors" class="accordion">
  <?php 
    $y = 0; 
    foreach($review_years as $year): 
      $reviews = new WP_Query(array(
        'post_type' => 'review',
        'posts_per_page' => -1,
        'post_status' => 'publish',
        'year' => $year
      ));

      if($reviews->have_posts()): ?>
        <div class="card">
          <div id="year-<?php echo $y; ?>" class="card-header">
            <h3 class="review-year">
              <button type="button" class="review-year-expander<?php if($y > 0){ echo ' collapsed'; } ?>" data-toggle="collapse" data-target="#authors-<?php echo $y; ?>" aria-expanded="<?php echo $y > 0 ? 'false' : 'true'; ?>" aria-controls="authors-<?php echo $y; ?>"><?php echo $year; ?></button>
            </h3>
          </div>

          <div id="authors-<?php echo $y; ?>" class="collapse<?php if($y == 0){ echo ' show'; } ?>" aria-labelledby="year-<?php echo $y; ?>" data-parent="#review-authors">
            <div class="card-body">
              <div class="nav flex-column nav-pills" role="tablist" aria-orientation="vertical">
                <?php $a = 0; while($reviews->have_posts()): $reviews->the_post(); ?>

                  <?php 
                    if(has_post_thumbnail()){
                      $author_image_url = get_the_post_thumbnail_url('medium');
                    }
                    else{
                      $author_image = get_field('default_review_author_image', 'option');
                      $author_image_url = $author_image['url'];
                    }

                    $review_id = get_the_ID();
                    $nonce = wp_create_nonce('review_id_' . $review_id);
                  ?>
                  <a href="#" id="author-<?php echo $a; ?>" class="nav-link tab-changer<?php if($a == 0){ echo ' active'; } ?>" data-toggle="pill" data-review_id="<?php echo $review_id; ?>" data-nonce="<?php echo $nonce; ?>" role="tab" aria-controls="review" aria-selected="<?php echo ($a == 0) ? 'true' : 'false'; ?>" style="background-image:url(<?php echo esc_url($author_image_url); ?>); background-position:center center;">
                    <div class="review-info">
                      <span class="review-type"><?php echo esc_html__('Student Review', 'maxvelocity'); ?>:</span>
                      <h4 class="course-name"><?php echo esc_html(get_field('name_of_course_reviewed')); ?></h4>
                      <span class="review-date"><?php echo get_the_date('F, Y'); ?></span>
                      <span class="review-author"><?php echo esc_html__('By', 'maxvelocity'); ?>: <?php echo esc_html(get_field('review_author')); ?></span>
                    </div>
                    <div class="dark-overlay"></div>
                  </a>

                <?php $a++; endwhile; ?>
              </div>
            </div>
          </div>
        </div>
      <?php endif; wp_reset_postdata(); ?>
  <?php $reviews = ''; $y++; endforeach; ?>
</div>