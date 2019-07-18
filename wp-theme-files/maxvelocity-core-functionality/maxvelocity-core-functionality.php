<?php
/**
 * Plugin Name: maxvelocitytactical.com Core Functionality
 * Description: This contains all your site's core functionality so that it is theme independent. <strong>It should always be activated.</strong>
 * Author: The Childress Agency
 * Author URI: https://childressagency.com
 * Version: 1.0
 * Text Domain: maxvelocity
 */
if(!defined('ABSPATH')){ exit; }

define('MAXVELOCITY_PLUGIN_DIR', dirname(__FILE__));
define('MAXVELOCITY_PLUGIN_URL', plugin_dir_url(__FILE__));

/**
 * Load ACF if not already loaded
 */
if(!class_exists('acf')){
  require_once MAXVELOCITY_PLUGIN_DIR . '/vendors/advanced-custom-fields-pro/acf.php';
  add_filter('acf/settings/path', 'maxvelocity_acf_settings_path');
  add_filter('acf/settings/dir', 'maxvelocity_acf_settings_dir');
}

function maxvelocity_acf_settings_path($path){
  $path = plugin_dir_path(__FILE__) . 'vendors/advanced-custom-fields-pro/';
  return $path;
}

function maxvelocity_acf_settings_dir($dir){
  $dir = plugin_dir_url(__FILE__) . 'vendors/advanced-custom-fields-pro/';
  return $dir;
}

add_action('plugins_loaded', 'maxvelocity_load_textdomain');
function maxvelocity_load_textdomain(){
  load_plugin_textdomain('maxvelocity', false, basename(MAXVELOCITY_PLUGIN_DIR) . '/languages');
}

require_once MAXVELOCITY_PLUGIN_DIR . '/includes/maxvelocity-create-post-types.php';
add_action('init', 'maxvelocity_create_post_types');

add_action('acf/init', 'maxvelocity_acf_options_page');
function maxvelocity_acf_options_page(){
  acf_add_options_page(array(
    'page_title' => esc_html__('General Settings', 'maxvelocity'),
    'menu_title' => esc_html__('General Settings', 'maxvelocity'),
    'menu_slug' => 'general-settings',
    'capability' => 'edit_posts',
    'redirect' => false
  ));
}

add_action('acf/init', 'maxvelocity_register_blocks');
function maxvelocity_register_blocks(){
  if(function_exists('acf_register_block_type')){
    acf_register_block_type(array(
      'name' => 'bordered_box',
      'title' => esc_html__('Bordered Box', 'maxvelocity'),
      'description' => esc_html__('A custom border box block.', 'maxvelocity'),
      'render_template' => MAXVELOCITY_PLUGIN_DIR . '/blocks/bordered_box.php',
      'category' => 'formatting',
      'mode' => 'auto',
      'align' => 'full',
      'enqueue_style' => MAXVELOCITY_PLUGIN_URL . '/blocks/bordered_box.css'
    ));
  }
}

add_filter( 'wp_kses_allowed_html', 'maxvelocity_allow_iframes' );
function maxvelocity_allow_iframes($allowedposttags){
	// Allow iframes and the following attributes
	$allowedposttags['iframe'] = array(
		'align' => true,
		'width' => true,
		'height' => true,
		'frameborder' => true,
		'name' => true,
		'src' => true,
		'id' => true,
		'class' => true,
		'style' => true,
		'scrolling' => true,
		'marginwidth' => true,
		'marginheight' => true,
  );
  
	return $allowedposttags;
}

require_once MAXVELOCITY_PLUGIN_DIR . '/includes/custom-fields/general-settings.php';
require_once MAXVELOCITY_PLUGIN_DIR . '/includes/custom-fields/blocks.php';
require_once MAXVELOCITY_PLUGIN_DIR . '/includes/custom-fields/hero-section.php';
require_once MAXVELOCITY_PLUGIN_DIR . '/includes/custom-fields/newsletter-signup.php';
require_once MAXVELOCITY_PLUGIN_DIR . '/includes/custom-fields/page-title.php';
require_once MAXVELOCITY_PLUGIN_DIR . '/includes/custom-fields/homepage-settings.php';
require_once MAXVELOCITY_PLUGIN_DIR . '/includes/custom-fields/classes-sections.php';
require_once MAXVELOCITY_PLUGIN_DIR . '/includes/custom-fields/contact-page.php';
require_once MAXVELOCITY_PLUGIN_DIR . '/includes/custom-fields/locations-settings.php';
require_once MAXVELOCITY_PLUGIN_DIR . '/includes/custom-fields/reviews-settings.php';
require_once MAXVELOCITY_PLUGIN_DIR . '/includes/custom-fields/team-settings.php';
require_once MAXVELOCITY_PLUGIN_DIR . '/includes/custom-fields/videos-settings.php';