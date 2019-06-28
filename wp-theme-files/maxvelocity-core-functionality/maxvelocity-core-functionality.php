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