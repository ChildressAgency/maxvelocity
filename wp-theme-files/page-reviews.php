<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <div class="intro-centered">
        <h1><?php echo esc_html__('Class Reviews', 'maxvelocity'); ?></h1>
      </div>

      <div id="reviews">
        <div class="row">
          <div class="col-md-5 col-lg-4">
            <?php get_template_part('partials/sidebar', 'student_reviews'); ?>
          </div>
          <div class="col-md-7 col-lg-8 review">
            <div id="review-pane" class="tab-content">
              <div id="review-1" class="tab-pane fade show active" role="tabpanel" aria-labelledby="author-1">
                <article class="student-review">
                  <?php
                    $most_recent_review = new WP_Query(array(
                      'post_type' => 'review',
                      'posts_per_page' => 1,
                      'post_status' => 'publish'
                    ));

                    if($most_recent_review->have_posts()): while($most_recent_review->have_posts()): $most_recent_review->the_post(); ?>
                      <header>
                        <h3><?php echo esc_html__('Student Review', 'maxvelocity'); ?>: <?php echo esc_html(get_field('name_of_course_reviewed')); ?></h3>
                        <p class="review-meta">
                          <span class="review-date"><?php echo get_the_date('F, Y'); ?></span>
                          <span class="review-author"><?php echo esc_html__('Review left by', 'maxvelocity'); ?>: <?php echo esc_html(get_field('review_author')); ?></span>
                        </p>
                      </header>
                      <?php the_content(); ?>
                  <?php endwhile; endif; wp_reset_postdata(); ?>
                </article>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer();