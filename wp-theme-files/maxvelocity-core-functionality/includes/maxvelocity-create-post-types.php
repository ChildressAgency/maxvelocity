<?php
/**
 * Create post types used by the site
 */
if(!defined('ABSPATH')){ exit; }

function maxvelocity_create_post_types(){
  $reviews_labels = array(
    'name' => esc_html__('Student Reviews', 'post type name', 'maxvelocity'),
    'singular_name' => esc_html__('Review', 'post type singular name' , 'maxvelocity'),
    'menu_name' => esc_html__('Student Reviews', 'post type menu name', 'maxvelocity'),
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
}