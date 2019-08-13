<?php
/**
 * Create post types used by the site
 */
if(!defined('ABSPATH')){ exit; }

function maxvelocity_create_post_types(){
  $reviews_labels = array(
    'name' => esc_html_X('Student Reviews', 'post type name', 'maxvelocity'),
    'singular_name' => esc_html_X('Review', 'post type singular name' , 'maxvelocity'),
    'menu_name' => esc_html_X('Student Reviews', 'post type menu name', 'maxvelocity'),
    'add_new_item' => esc_html__('Add New Review', 'maxvelocity'),
    'search_items' => esc_html__('Search Reviews', 'maxvelocity'),
    'edit_item' => esc_html__('Edit Review', 'maxvelocity'),
    'view_item' => esc_html__('View Review', 'maxvelocity'),
    'all_items' => esc_html__('All Reviews', 'maxvelocity'),
    'new_item' => esc_html__('New Review', 'maxvelocity'),
    'not_found' => esc_html__('No Reviews Found', 'maxvelocity')
  );
  $reviews_args = array(
    'labels' => $reviews_labels,
    'capability_type' => 'post',
    'public' => true,
    'menu_position' => 5,
    'menu_icon' => 'dashicons-format-quote',
    'query_var' => 'review',
    'has_archive' => false,
    'show_in_rest' => true,
    'supports' => array(
      'title',
      'editor',
      'thumbnail',
      'custom-fields',
      'revisions'
    )
  );
  register_post_type('review', $reviews_args);

  $videos_labels = array(
    'name' => esc_html_X('Videos', 'post type name', 'maxvelocity'),
    'singular_name' => esc_html_X('Video', 'post type singular name', 'maxvelocity'),
    'menu_name' => esc_html_X('Videos', 'post type menu name', 'maxvelocity'),
    'add_new_item' => esc_html__('Add New Video', 'maxvelocity'),
    'search_items' => esc_html__('Search Videos', 'maxvelocity'),
    'edit_item' => esc_html__('Edit Video', 'maxvelocity'),
    'view_item' => esc_html__('View Video', 'maxvelocity'),
    'all_items' => esc_html__('All Videos', 'maxvelocity'),
    'new_item' => esc_html__('New Video', 'maxvelocity'),
    'not_found' => esc_html__('No Videos Found', 'maxvelocity')
  );
  $videos_args = array(
    'labels' => $videos_labels,
    'capability_type' => 'post',
    'public' => true,
    'menu_position' => 6,
    'menu_icon' => 'dashicons-video-alt3',
    'query_var' => 'videos',
    'has_archive' => false,
    'show_in_rest' => true,
    'supports' => array(
      'title',
      'editor',
      'custom-fields',
      'revisions'
    )
  );
  register_post_type('videos', $videos_args);

  register_taxonomy('video_cats',
    'videos',
    array(
      'hierarchical' => true,
      'show_admin_column' => true,
      'public' => true,
      'show_in_rest' => true,
      'labels' => array(
        'name' => esc_html__('Video Categories', 'maxvelocity'),
        'singular_name' => esc_html__('Video Category', 'maxvelocity'),
        'all_items' => esc_html__('All Video Categories', 'maxvelocity'),
        'edit_items' => esc_html__('Edit Video Categories', 'maxvelocity'),
        'view_item' => esc_html__('View Video Category', 'maxvelocity'),
        'update_item' => esc_html__('Update Video Category', 'maxvelocity'),
        'add_new_item' => esc_html__('Add New Video Category', 'maxvelocity'),
        'parent_item' => esc_html__('Parent Video Category', 'maxvelocity'),
        'search_items' => esc_html__('Search Video Categories', 'maxvelocity'),
        'popular_items' => esc_html__('Popular Video Categories', 'maxvelocity'),
        'add_or_remove_items' => esc_html__('Add or Remove Video Categories', 'max-velocity'),
        'not_found' => esc_html__('No Video Categories Found', 'maxvelocity'),
        'back_to_items' => esc_html__('Back to Video Categories', 'maxvelocity')
      )
    )
  );
}