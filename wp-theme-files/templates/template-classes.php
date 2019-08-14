<?php
/**
 * Template Name: Classes Template
 * Description: Template for Training and Classes pages
 */

get_header(); ?>
  <main id="main">
    <section class="container">
      <article class="intro-centered" style="max-width:none;">
        <?php get_template_part('partials/section', 'page_title'); ?>

        <div class="row">
          <div class="col-md-8 col-lg-9 order-md-1">
            <?php
              if(have_posts()){
                while(have_posts()){
                  the_post();

                  the_content();
                }
              }
            ?>
          </div>
          <div class="col-md-4 col-lg-3 order-md-12">
            <?php get_sidebar('classes'); ?>
          </div>
        </div>
      </article>
    </section>

    <?php
      if(have_rows('page_section')){
        while(have_rows('page_section')){
          the_row();

          if(get_row_layout() == 'more_info_links'){
            get_template_part('partials/flexible', 'more_info_links');
          }
          elseif(get_row_layout() == 'class_overview_table'){
            get_template_part('partials/flexible', 'class_overview_table');
          }
          elseif(get_row_layout() == 'bordered_box'){
            get_template_part('partials/flexible', 'bordered_box');
          }
          elseif(get_row_layout() == 'callout_section'){
            get_template_part('partials/flexible', 'callout');
          }
          elseif(get_row_layout() == 'equipment_section'){
            get_template_part('partials/flexible', 'equipment_details');
          }
          elseif(get_row_layout() == 'disclaimer_box'){
            get_template_part('partials/flexible', 'disclaimer_box');
          }
          else{
            get_template_part('partials/flexible', 'standard_content');
          }
        }
      }
    ?>
  </main>
<?php get_footer(); 