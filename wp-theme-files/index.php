<?php get_header(); ?>
<main id="main">
  <div class="container">
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
            echo '<div class="course-loop"><div class="course-short">';
            echo '<h3><a href="' . esc_url(get_permalink()) . '" class="course-title-link">' . esc_html(get_the_title()) . '</a></h3>';
            echo '</div></div>';
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