<?php
add_action('wp_footer', 'show_template');
function show_template() {
	global $template;
	print_r($template);
}

add_action('wp_enqueue_scripts', 'jquery_cdn');
function jquery_cdn(){
  if(!is_admin()){
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://code.jquery.com/jquery-3.3.1.min.js', false, null, true);
    wp_enqueue_script('jquery');
  }
}

add_action('wp_enqueue_scripts', 'maxvelocity_scripts');
function maxvelocity_scripts(){
  wp_register_script(
    'bootstrap-popper',
    'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js',
    array('jquery'),
    '',
    true
  );

  wp_register_script(
    'bootstrap-scripts',
    'https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js',
    array('jquery', 'bootstrap-popper'),
    '',
    true
  );

  wp_register_script(
    'maxvelocity-scripts',
    get_stylesheet_directory_uri() . '/js/custom-scripts.min.js',
    array('jquery', 'bootstrap-scripts'),
    '',
    true
  );

  wp_enqueue_script('bootstrap-popper');
  wp_enqueue_script('bootstrap-scripts');
  wp_enqueue_script('maxvelocity-scripts');
}

add_filter('script_loader_tag', 'maxvelocity_add_script_meta', 10, 2);
function maxvelocity_add_script_meta($tag, $handle){
  switch($handle){
    case 'jquery':
      $tag = str_replace('></script>', ' integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>', $tag);
      break;

    case 'bootstrap-popper':
      $tag = str_replace('></script>', ' integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>', $tag);
      break;

    case 'bootstrap-scripts':
      $tag = str_replace('></script>', ' integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>', $tag);
      break;
  }

  return $tag;
}

add_action('wp_enqueue_scripts', 'maxvelocity_styles');
function maxvelocity_styles(){
  wp_register_style(
    'google-fonts',
    'https://fonts.googleapis.com/css?family=Open+Sans:400,600,600i,700,800|Teko:400,700'
  );

  wp_register_style(
    'fontawesome',
    'https://use.fontawesome.com/releases/v5.6.3/css/all.css'
  );

  wp_register_style(
    'maxvelocity-css',
    get_stylesheet_directory_uri() . '/style.css'
  );

  wp_enqueue_style('google-fonts');
  wp_enqueue_style('fontawesome');
  wp_enqueue_style('maxvelocity-css');
}

add_filter('style_loader_tag', 'maxvelocity_add_css_meta', 10, 2);
function maxvelocity_add_css_meta($link, $handle){
  switch($handle){
    case 'fontawesome':
      $link = str_replace('/>', ' integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">', $link);
      break;
  }

  return $link;
}

add_action('after_setup_theme', 'maxvelocity_setup');
function maxvelocity_setup(){
  add_theme_support('post-thumbnails');
  //set_post_thumbnail_size(320, 320);

  add_theme_support(
    'html5',
    array(
      'comment-form',
      'comment-list',
      'gallery',
      'caption'
    )
  );

  add_editor_style(array('editor-style.css', maxvelocity_fonts_urls()));
  add_theme_support('editor-styles');
  add_theme_support('wp-block-styles');
  add_theme_support('responsive-embeds');

  register_nav_menus(array(
    'header-nav' => 'Header Navigation',
    'footer-nav-1' => 'Footer Navigation 1',
    'footer-nav-2' => 'Footer Navigation 2',
    'footer-nav-3' => 'Footer Navigation 3',
    'footer-nav-4' => 'Footer Navigation 4'
  ));

  load_theme_textdomain('maxvelocity', get_stylesheet_directory_uri() . '/languages');
}

//register custom fonts for editor
function maxvelocity_fonts_urls(){
  $fonts_url = '';
  $font_families = array();

  $font_families[] = 'Open+Sans:400,600,600i,700,800';
  $font_families[] = 'Teko:400,700';

  $query_args = array(
    'family' => urlencode(implode('|', $font_families)),
    'subset' => urlencode('latin,latin-ext')
  );

  $fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');
  return esc_url_raw($fonts_url);
}

/**
 * add preconnect for google fonts
 */
add_filter('wp_resource_hints', 'maxvelocity_resource_hints', 10, 2);
function maxvelocity_resource_hints($urls, $relation_type){
  if(wp_style_id('google-fonts', 'queue') && 'preconnect' == $relation_type){
    $urls[] = array(
      'href' => 'https://fonts.gstatic.com',
      'crossorigin'
    );
  }

  return $urls;
}

require_once dirname(__FILE__) . '/includes/class-wp-bootstrap-navwalker.php';

function maxvelocity_get_menu_by_location($location){
  if(empty($location)){ return false; }

  $locations = get_nav_menu_locations();
  if(!isset($locations[$location])){ return false; }

  $menu_obj = get_term($locations[$location], 'nav_menu');
  return $menu_obj;
}

function maxvelocity_header_fallback_menu(){ ?>
  <div id="navbar" class="collapse navbar-collapse">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item<?php if(is_front_page()){ echo ' active'; } ?>">
        <a href="<?php echo esc_url(home_url()); ?>" class="nav-link"><?php echo esc_html__('Home', 'maxvelocity'); ?></a>
      </li>
      <li class="nav-item<?php if(is_page('classes') || is_singular('class')){ echo ' active'; } ?>">
        <a href="<?php echo esc_url(home_url('tactical-classes')); ?>" class="nav-link"><?php echo esc_html__('Training', 'maxvelocity'); ?></a>
      </li>
      <li class="nav-item<?php if(is_page('store') || is_woocommerce()){ echo ' active'; } ?>">
        <a href="<?php echo esc_url(home_url('store')); ?>" class="nav-link"><?php echo esc_html__('Store', 'maxvelocity'); ?></a>
      </li>
      <li class="nav-item<?php if(is_home() || is_singular('post')){ echo ' active'; } ?>">
        <a href="<?php echo esc_url(home_url('blog')); ?>" class="nav-link"><?php echo esc_html__('Blog', 'maxvelocity'); ?></a>
      </li>
      <li class="nav-item<?php if(is_page('forum')){ echo ' active'; } ?>">
        <a href="<?php echo esc_url(home_url('forum')); ?>" class="nav-link"><?php echo esc_html__('Forum', 'maxvelocity'); ?></a>
      </li>
      <li class="nav-item<?php if(is_page('videos')){ echo ' active'; } ?>">
        <a href="<?php echo esc_url(home_url('videos')); ?>" class="nav-link"><?php echo esc_html__('Videos', 'maxvelocity'); ?></a>
      </li>
      <li class="nav-item<?php if(is_page('payments')){ echo ' active'; } ?>">
        <a href="<?php echo esc_url(home_url('payments')); ?>" class="nav-link"><?php echo esc_html__('Payments', 'maxvelocity'); ?></a>
      </li>
      <li class="nav-item<?php if(is_page('contact-us')){ echo ' active'; } ?>">
        <a href="<?php echo esc_url(home_url('contact-us')); ?>" class="nav-link"><?php echo esc_html__('Contact Us', 'maxvelocity'); ?></a>
      </li>
    </ul>
  </div>
<?php }

add_action('widgets_init', 'maxvelocity_register_sidebars');
function maxvelocity_register_sidebars(){
  register_sidebar(array(
    'name' => esc_html__('Blog Sidebar', 'maxvelocity'),
    'id' => 'sidebar-blog',
    'description' => esc_html__('Add widgets here to appear in your sidebar on blog posts and archive pages.', 'maxvelocity'),
    'before_widget' => '<div class="sidebar-section">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));
}

require_once dirname(__FILE__) . '/includes/woo-functions.php';