<?php get_header(); ?>
  <main id="main" class="pb-5">
    <div class="container">
      <div class="intro-centered">
        <h1><?php the_field('blog_page_title'); ?></h1>
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
          <?php endif; ?>
        </div>

        <div class="col-md-4 col-lg-3 order-md-1">
          <div id="blog-sidebar">
            <div class="sidebar-section sidebar-search">
              <?php get_search_form(); ?>
            </div>

            <div class="sidebar-section">
              <h3>Categories</h3>
              <ol class="list-unstyled">
                <li><a href="#">Gear</a></li>
                <li><a href="#">General</a></li>
                <li><a href="#">Guest Posts</a></li>
                <li><a href="#">Humor</a></li>
                <li><a href="#">Patrolling</a></li>
                <li><a href="#">Physical Training</a></li>
                <li><a href="#">Planning Exercises</a></li>
                <li><a href="#">Rightful Liberty</a></li>
                <li><a href="#">Shooting</a></li>
                <li><a href="#">Small Unit Tactics</a></li>
                <li><a href="#">Student Reviews</a></li>
                <li><a href="#">TacGun</a></li>
                <li><a href="#">Tactical Comment</a></li>
                <li><a href="#">Training</a></li>
                <li><a href="#">Training Videos</a></li>
                <Li><a href="#">Uncategorized</a></Li>
                <li><a href="#">Writing Content</a></li>
              </ol>
            </div>

            <div class="sidebar-section">
              <h3>Recent Posts</h3>
              <ol class="list-unstyled">
                <li><a href="#">PTS Mega Arms MKM AR-15</a></li>
                <li><a href="#">KWA AKG-74M</a></li>
                <li><a href="#">PTS EPM 38 Round Magazine: Black</a></li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
<?php get_footer();