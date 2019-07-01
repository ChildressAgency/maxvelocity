<?php get_header(); ?>
<main id="main">
  <div class="container">
    <article class="intro-centered">
      <?php 
        get_template_part('partials/section', 'page_title');
        
        if(have_posts()){
          while(have_posts()){
            the_post();

            the_content();
          }
        }
      ?>
    </article>
  </div>

  <?php 
    if(get_field('emergency_phone')){
      echo '<div class="emergency-phone">';
      echo apply_filters('the_content', wp_kses_post(get_field('emergency_phone')));
      echo '</div>';
    }
  ?>
</main>
<?php get_footer();