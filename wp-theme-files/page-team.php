<?php get_header(); ?>
  <main id="main">
    <div class="container">
      <article class="intro-centered">
        <?php get_template_part('partials/section', 'page_title'); ?>
        <?php
          if(have_posts()){
            while(have_posts()){
              the_post();

              the_content();
            }
          }
        ?>
      </article>

      <?php if(have_rows('team_members')): while(have_rows('team_members')): the_row(); ?>
        <div class="row team-member">
          <div class="col-md-4">
            <?php $team_member_img = get_sub_field('team_member_image'); ?>
            <img src="<?php echo esc_url($team_member_img['url']); ?>" class="img-fluid d-block mx-auto" alt="<?php esc_attr($team_member_img['alt']); ?>" />
          </div>
          <div class="col-md-8">
            <div class="team-bio">
              <h4><?php echo esc_html(get_sub_field('team_member_name_and_title')); ?></h4>
              <?php echo wp_kses_post(get_sub_field('team_member_bio')); ?>
            </div>
          </div>
        </div>
      <?php endwhile; endif; ?>

    </div>
  </main>
<?php get_footer();