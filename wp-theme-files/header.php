<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <meta http-equiv="cache-control" content="public">
  <meta http-equiv="cache-control" content="private">

  <title><?php echo esc_html(bloginfo('name')); ?></title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <header id="header">
    <div id="masthead">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <div class="email">
            <?php $email_address = get_field('email', 'option'); ?>
            <a href="mailto:<?php echo esc_html($email_address); ?>"><?php echo esc_html($email_address); ?></a>
          </div>
          <?php
            $masthead_social_cart = maxvelocity_get_social_cart();
            echo $masthead_social_cart;
          ?>
        </div>
      </div>
    </div>
    <nav id="header-nav" class="navbar navbar-dark navbar-expand-lg navbar-clear">
      <div class="container">
        <a href="<?php echo esc_url(home_url()); ?>" class="navbar-brand">
          <span class="navbar-logo"></span>
          <?php echo esc_html(bloginfo('name')); ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle Navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <?php
          $header_menu_extra = '<li class="header_menu_extra">';
          $header_menu_extra .= $masthead_social_cart;
          $header_menu_extra .= '</li>';

          $header_nav_args = array(
            'theme_location' => 'header-nav',
            'menu' => '',
            'container' => 'div',
            'container_id' => 'navbar',
            'container_class' => 'collapse navbar-collapse',
            'menu_id' => '',
            'menu_class' => 'navbar-nav ml-auto',
            'echo' => true,
            'fallback_cb' => 'maxvelocity_header_fallback_menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s' . $header_menu_extra . '</ul>',
            'depth' => 2,
            'walker' => new WP_Bootstrap_NavWalker()
          );
          wp_nav_menu($header_nav_args);
        ?>
      </div>
    </nav>
  </header>

  <?php
    $page_id = get_the_ID();
    
    if(is_front_page()){
      $home_page = get_page_by_path('home');
      $page_id = $home_page->ID;
    }
    if(is_home()){
      $blog_page = get_page_by_path('blog');
      $page_id = $blog_page->ID;
    }

    if(is_woocommerce()){
      $shop_page = get_page_by_path('shop');
      $page_id = $shop_page->ID;
    }

    $hero_image_id = get_post_meta($page_id, 'hero_background_image', true);
    $hero_image = wp_get_attachment_image_src($hero_image_id, 'full');
    $hero_image_css = '';

    if($hero_image){
      $hero_image_url = $hero_image[0];
      $hero_image_css = get_post_meta($page_id, 'hero_background_image_css', true);
    }
    else{
      $hero_image_id = get_option('options_default_hero_background_image');
      $hero_image = wp_get_attachment_image_src($hero_image_id, 'full');
      $hero_image_url = $hero_image[0];

      $hero_image_css = get_option('options_default_hero_background_image_css');
    }

    $hero_title = get_field('hero_title', $page_id);
    $hero_caption = get_field('hero_caption', $page_id);
    if(is_home() || is_singular('post')){
      $hero_title = 'Blog';
    }
  ?>
  <section id="hero" class="<?php if(is_front_page()){ echo 'hp-hero '; } ?>d-flex align-items-center" style="background-image:url(<?php echo esc_url($hero_image_url); ?>); <?php echo esc_attr($hero_image_css); ?>">
    <div class="container">
      <div class="hero-caption">
        <p class="text-stroke"><?php echo wp_kses_post($hero_title); ?></p>
        <p><?php echo esc_html($hero_caption); ?></p>
      </div>
    </div>
    <div class="dark-overlay"></div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/texture-white.png" class="textured-border" alt="" />
  </section>
