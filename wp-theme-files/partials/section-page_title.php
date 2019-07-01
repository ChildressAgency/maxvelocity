<?php
/**
 * Show the ACF defined title or the WP title
 */

if(is_search()){
  echo '<h1>' . sprintf(esc_html__('Showing results for %s', 'maxvelocity'), get_search_query()) . '</h1>';
}
else{
  $page_id = get_the_ID();
  if(is_home()) {
    $blog_page = get_page_by_path('blog');
    $page_id = $blog_page->ID;
  }

  $page_title = get_the_title($page_id);
  if(get_field('page_title', $page_id)){
    $page_title = get_field('page_title', $page_id);
  }

  echo '<h1>' . esc_html($page_title) . '</h1>';
}