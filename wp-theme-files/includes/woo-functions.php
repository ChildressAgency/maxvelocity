<?php
if(!defined('ABSPATH')){ exit; }

remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);
remove_action('woocommerce_sidebar', 'woocommerce_get_sidebar', 10);

add_action('woocommerce_before_main_content', 'maxvelocity_wrapper_start', 10);
function maxvelocity_wrapper_start(){
  echo '<main id="main">
          <div class="container">
            <article class="woocomm">';
}

add_action('woocommerce_after_main_content', 'maxvelocity_wrapper_end', 10);
function maxvelocity_wrapper_end(){
  echo '</article</div></main>';
}

add_action('woocommerce_before_shop_loop', 'maxvelocity_shop_loop_wrapper_open', 15);
function maxvelocity_shop_loop_wrapper_open(){
  echo '<div class="row">
          <div class="col-md-8 col-lg-9 order-md-12">';
}

add_action('woocommerce_after_shop_loop', 'maxvelocity_shop_loop_wrapper_close', 15);
function maxvelocity_shop_loop_wrapper_close(){
  echo '</div>'; //close col-md-8
  echo '<div class="col-md-4 col-lg-3 order-md-1">';
    get_sidebar('shop');
  echo '</div>';
  echo '</div>'; //close row
}

add_action('woocommerce_before_shop_loop', 'maxvelocity_show_featured_section', 40);
function maxvelocity_show_featured_section(){
  if(is_shop()){
    $featured_section_shortcode = get_field('featured_section_shortcode', 'option');
    if($featured_section_shortcode){
      echo '<div class="shop-featured-section">';
        echo '<h2 class="shop-cat-title">' . esc_html(get_field('featured_section_title', 'option')) . '</h2>';
        echo do_shortcode($featured_section_shortcode);
      echo '</div>';
    }

    echo '<h2 class="shop-cat-title">' . esc_html__('Categories', 'maxvelocity') . '</h2>'; 
  }
}

add_action('woocommerce_after_shop_loop_item', 'maxvelocity_remove_add_to_cart_button', 1);
function maxvelocity_remove_add_to_cart_button(){
  if(is_product_category() || is_shop()){
    remove_action('woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart', 10);
  }
}

add_filter('woocommerce_account_menu_items', 'maxvelocity_remove_my_account_downloads', 999);
function maxvelocity_remove_my_account_downloads($items){
  unset($items['downloads']);
  return $items;
}

//header cart
add_action('maxvelocity_show_cart_link', 'maxvelocity_cart_link');
function maxvelocity_cart_link(){
  if(in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))){
    $count = WC()->cart->cart_contents_count;
    echo '<a href="' . wc_get_cart_url() . '" class="header-cart"><span class="d-none d-sm-inline">' . esc_html__('Cart', 'maxvelocity') . ' </span><i class="fas fa-shopping-cart"></i>(' . $count . ')</a>';
  }
}

add_filter('woocommerce_add_to_cart_fragments', 'maxvelocity_update_header_cart_count');
function maxvelocity_update_header_cart_count($fragments){
  ob_start();
  $count = WC()->cart->cart_contents_count;
  echo '<a href="' . WC()->cart->get_cart_url() . '" class="header-cart"><span class="d-none d-sm-inline">' . esc_html__('My Cart', 'maxvelocity') . ' </span><i class="fas fa-shopping-cart"></i>(' . $count . ')</a>';

  $fragments['a.header-cart'] = ob_get_clean();

  return $fragments;
}