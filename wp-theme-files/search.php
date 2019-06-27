<?php get_header(); ?>
<main id="main">
  <div class="container">
    <div class="search-page-form">
      <?php get_search_form(); ?>
    </div>

    <?php
      if(have_posts()){
        while(have_posts()){
          the_post();

          if(is_singular()){
            echo '<article class="intro-centered">';
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
      }
    ?>
  </div>
</main>
<?php get_footer();