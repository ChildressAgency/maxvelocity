<?php
/**
 * Blog post loop item
 * used on Home and blog pages
 */
?>

<?php
$post_thumb = '';
if(has_post_thumbnail()){
  $post_thumb = get_the_post_thumbnail_url('full');
}
else{
  $default_image = get_field('default_blog_post_featured_image', 'option');
  $post_thumb = $default_image['url'];
}
?>

<div class="post-link" style="background-image:url(<?php echo esc_url($post_thumb); ?>); background-position:center center;">
  <div class="post-link-content d-flex flex-column justify-content-between">
    <h3><?php the_title(); ?></h3>
    <a href="<?php the_permalink(); ?>" class="btn-alt align-self-center"><?php echo esc_html__('READ MORE', 'maxvelocity'); ?></a>
  </div>
</div>