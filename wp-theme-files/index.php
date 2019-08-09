<?php get_header(); ?>
<main id="main">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-lg-9 order-md-12">
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();

              if(is_singular()){
                echo '<article class="intro-centered">';
                  get_template_part('partials/section', 'page_title');
                  the_content();
                echo '</article>';
              }
              else{
                get_template_part('partials/loop', 'general_item');
              }
            }
          }
          else{
            echo '<p>' . esc_html__('Sorry, we could not find what you were looking for.', 'maxvelocity') . '</p>';
          } wp_pagenavi();
        ?>
      </div>
      <div class="col-md-4 col-lg-3 order-md-1">
        <?php get_sidebar('blog'); ?>
      </div>
    </div>
  </div>
</main>
<?php get_footer();