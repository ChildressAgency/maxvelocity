<?php get_header(); ?>
<main id="main">
  <div class="container">
    <div class="intro-centered">
      <h1><?php echo sprintf(esc_html__('Showing results for %s', 'maxvelocity'), get_search_query()); ?></h1>
    </div>

    <div class="row">
      <div class="col-md-8 col-lg-9 order-md-12">
        <?php 
          if(have_posts()){
            while(have_posts()){
              the_post();
              get_template_part('partials/loop', 'general_item');
            }
          }
          else{
            echo '<p>' . esc_html__('Sorry, we could not find what you were looking for.', 'maxvelocity') . '</p>';
          }
        ?>
      </div>
      <div class="col-md-4 col-lg-3 order-md-1">
        <?php get_sidebar('blog'); ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer();