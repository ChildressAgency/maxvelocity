<?php get_header(); ?>
  <main id="main" class="pb-5">
    <div class="container">
      <div class="intro-centered">
        <?php get_template_part('partials/section', 'page_title'); ?>
      </div>
      <div class="row">
        <div class="col-md-8 col-lg-9 order-md-12">
          <?php if(have_posts()): ?>
            <div id="blog-loop" class="d-flex flex-wrap justify-content-between">
              <?php
                while(have_posts()){
                  the_post();
                  get_template_part('partials/loop', 'post_item');
                }
              ?>
            </div>
          <?php else: ?>
            <p><?php echo esc_html__('Sorry, no posts were found.', 'maxvelocity'); ?></p>
          <?php endif; wp_pagenavi(); ?>
        </div>

        <div class="col-md-4 col-lg-3 order-md-1">
          <?php get_sidebar('blog'); ?>
        </div>
      </div>
    </div>
  </main>
<?php get_footer();