<?php
/**
 * Blog post loop item
 * used on Home and blog pages
 */
?>

<div class="post-link" style="background-image:url(<?php echo esc_url(get_the_post_thumbnail_url('full')); ?>); background-position:center center;">
  <div class="post-link-content d-flex flex-column justify-content-between">
    <h3><?php the_title(); ?></h3>
    <a href="<?php the_permalink(); ?>" class="btn-alt align-self-center"><?php echo esc_html__('READ MORE', 'maxvelocity'); ?></a>
  </div>
</div>