<?php
/*
add_action('wp_footer', 'show_template');
function show_template() {
	global $template;
	print_r($template);
}
*/
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

  wp_localize_script('maxvelocity-scripts', 'maxvelocity_settings', array(
    'maxvelocity_ajaxurl' => admin_url('admin-ajax.php')
  ));
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

  //woocommerce support
  add_theme_support('woocommerce');
  add_theme_support('wc-product-gallery-zoom');
  add_theme_support('wc-product-gallery-lightbox');
  add_theme_support('wc-product-gallery-slider');
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
  if(wp_style_is('google-fonts', 'queue') && 'preconnect' == $relation_type){
    $urls[] = array(
      'href' => 'https://fonts.gstatic.com',
      'crossorigin'
    );
  }

  return $urls;
}

add_action('login_enqueue_scripts', 'maxvelocity_login_logo');
function maxvelocity_login_logo(){
  ?>
    <style type="text/css">
      #login h1 a,
      .login h1 a{
        background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png);
        background-size:unset;
        height:auto;
        width:100%;
        text-indent:unset;
        padding-top:81px;
        overflow:visible;
        text-transform:uppercase;
        font-weight:bold;
        margin-bottom:0;
      }
    </style>
  <?php
}
add_filter('login_headerurl', 'maxvelocity_login_logo_url');
function maxvelocity_login_logo_url(){
  return home_url();
}
add_filter('login_headertext', 'maxvelocity_login_logo_url_title');
function maxvelocity_login_logo_url_title(){
  return 'Max Velocity Tactical';
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

  register_sidebar(array(
    'name' => esc_html__('Shop Sidebar', 'maxvelocity'),
    'id' => 'sidebar-shop',
    'description' => esc_html__('Add widgets here to appear in your sidebar on the shop pages.', 'maxvelocity'),
    'before_widget' => '<div class="sidebar-section">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

  register_sidebar(array(
    'name' => esc_html__('Forum Sidebar', 'maxvelocity'),
    'id' => 'sidebar-forum',
    'description' => esc_html__('Add widgets here to appear in your sidebar on the forum pages.', 'maxvelocity'),
    'before_widget' => '<div class="sidebar-section">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));

  register_sidebar(array(
    'name' => esc_html__('Classes Sidebar', 'maxvelocity'),
    'id' => 'sidebar-classes',
    'description' => esc_html__('Add widgets here to appear in your sidebar on the class pages.', 'maxvelocity'),
    'before_widget' => '<div class="sidebar-section">',
    'after_widget' => '</div>',
    'before_title' => '<h3>',
    'after_title' => '</h3>'
  ));
}

require_once dirname(__FILE__) . '/includes/woo-functions.php';

add_action('wp_ajax_nopriv_maxvelocity_get_review', 'maxvelocity_get_review');
add_action('wp_ajax_maxvelocity_get_review', 'maxvelocity_get_review');
function maxvelocity_get_review(){
  if(!isset($_POST['review_id']) || $_POST['review_id'] == ''){
    wp_send_json_error('<p>' . esc_html__('There was a problem processing your request. Please refresh the page and try again.', 'maxvelocity') . '</p>');
  }

  $review_id = $_POST['review_id'];

  $the_review = new WP_Query(array(
    'post_type' => 'review',
    'page_id' => $review_id
  ));

  $review = '';
  if($the_review->have_posts()){
    while($the_review->have_posts()){
      $the_review->the_post();

      $review .= '<header><h3>' . esc_html__('Student Review', 'maxvelocity') . ': ' . esc_html(get_field('name_of_course_reviewed')) . '</h3>';
      $review .= '<p class="review-meta"><span class="review-date">' . get_the_date('F, Y') . '</span>';
      $review .= '<span class="review-author">' . esc_html__('Review left by', 'maxvelocity') . ': ' . esc_html(get_field('review_author')) . '</span></p></header>';

      $review .= apply_filters('the_content', get_the_content());
    }
  }
  else{
    wp_send_jason_error('<p>' . esc_html__('There was a problem processing your request. Please refresh the page and try again.', 'maxvelocity') . '</p>');
  }
  wp_reset_postdata();

  wp_send_json_success($review);
}

function maxvelocity_get_social_cart(){
  $facebook = get_field('facebook', 'option');
  $instagram = get_field('instagram', 'option');
  $twitter = get_field('twitter', 'option');
  $youtube = get_field('youtube', 'option');
  $rss = get_field('rss', 'option');

  $social_cart = '';
  $social_cart .= '<div class="social">';

  if($facebook){
    $social_cart .= '<a href="' . esc_url($facebook) . '" id="facebook" title="Facebook" target="_blank"><i class="fab fa-facebook"></i><span class="sr-only">Facebook</span></a>';
  }
  if($twitter){
    $social_cart .= '<a href="' . esc_url($twitter) . '" id="twitter" title="Twitter" target="_blank"><i class="fab fa-twitter"></i><span class="sr-only">Twitter</span></a>';
  }
  if($instagram){
    $social_cart .= '<a href="' . esc_url($instagram) . '" id="instagram" title="Instagram" target="_blank"><i class="fab fa-instagram"></i><span class="sr-only">Instagram</span></a>';
  }
  if($youtube){
    $social_cart .= '<a href="' . esc_url($youtube) . '" id="youtube" title="YouTube" target="_blank"><i class="fab fa-youtube"></i><span class="sr-only">YouTube</span></a>';
  }
  if($rss){
    $social_cart .= '<a href="' . esc_url($rss) . '" id="rss" title="RSS" target="_blank"><i class="fas fa-rss"></i><span class="sr-only">RSS</span></a>';
  }

  $social_cart .= '</div>';

  $social_cart .= '<div class="cart">';
    if(is_user_logged_in()){
      $social_cart .= '<a href="' . esc_url(home_url('my-account')) . '">' . esc_html__('My Account', 'maxvelocity') . '</a>';
    }
    else{
      $social_cart .= '<a href="' . esc_url(home_url('login')) . '">' . esc_html__('Login', 'maxvelocity') . '</a>';
    }
  $social_cart .= '<span class="divider">|</span>';
  //$social_cart .= sprintf(do_action('maxvelocity_show_cart_link'));
  ob_start();
    maxvelocity_cart_link();
  $social_cart .= ob_get_clean();
  $social_cart .= '</div>';

  return $social_cart;
}