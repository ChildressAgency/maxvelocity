<?php
if(!defined('ABSPATH')){ exit; }

remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

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

add_action('after_theme_setup', 'maxvelocity_add_woocommerce_support');
function maxvelocity_add_woocommerce_support(){
  add_theme_support('woocommerce');
  add_theme_support('wc-product-gallery-zoom');
  add_theme_support('wc-product-gallery-lightbox');
  add_theme_support('wc-product-gallery-slider');
}

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