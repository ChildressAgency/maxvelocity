<?php
if(!defined('ABSPATH')){ exit; }

add_action('maxvelocity_show_cart_link', 'maxvelocity_cart_link');
function maxvelocity_cart_link(){
  if(in_array('woocommerce/woocommerce.php', apply_filters('active_plugins', get_option('active_plugins')))){
    $count = WC()->cart->cart_contents_count;
    echo '<a href="' . WC()->cart->get_cart_url() . '" class="header-cart"><span class="d-none d-sm-inline">' . esc_html__('My Cart', 'maxvelocity') . ' </span><i class="fas fa-shopping-cart"></i>(' . $count . ')</a>';
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