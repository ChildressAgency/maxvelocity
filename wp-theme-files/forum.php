<?php get_header(); ?>
<main id="main">
  <div class="container">
    <div class="intro-centered">
      <?php get_template_part('partials/section', 'page_title'); ?>
    </div>
    <div class="row">
      <div class="col-md-8 col-lg-9 order-md-1">
        <p class="text-right">
          <a href="<?php echo esc_url(home_url('latest-activity')); ?>" style="color:#000; font-weight:bold;">View Latest Activity</a>
        </p>
        <?php 
          if(have_posts()){
            while(have_posts()){
              the_post();
              the_content();
            }
          }
          else{
            echo '<p>' . esc_html__('Sorry, no forums were found.', 'maxvelocity') . '</p>';
          }
        ?>
      </div>

      <div class="col-md-4 col-lg-3 order-md-12">
        <?php get_sidebar('forum'); ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer();