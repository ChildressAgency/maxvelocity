  <footer id="footer">
    <?php
      $newsletter_img_id = get_option('options_newsletter_background_image');
      $newsletter_img = wp_get_attachment_image_src($newsletter_img_id, 'full');
      $newsletter_img_url = $newsletter_img[0];
      $newsletter_img_css = get_option('options_newsletter_background_image_css');
    ?>
    <section id="newsletter" style="background-image:url(<?php echo esc_url($newsletter_img_url); ?>); <?php echo esc_attr($newsletter_img_css); ?>">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <?php get_field('newsletter_signup_text', 'option'); ?>
          </div>
          <div class="col-md-6">
            <?php echo do_shortcode(get_field('newsletter_signup_form_shortcode')); ?>
          </div>
        </div>
      </div>
      <div class="dark-overlay"></div>
    </section>

    <section id="footer-nav">
      <div class="container">
        <div class="row">
          <?php
            if(has_nav_menu('footer-nav-1')){
              $footer_nav_1 = maxvelocity_get_menu_by_location('footer-nav-1');
              $footer_nav_1_title = $footer_nav_1 ? esc_html($footer_nav_1->name) : '';
              $footer_nav_1_args = array(
                'theme_location' => 'footer-nav-1',
                'menu' => 'Footer Navigation 1',
                'container' => 'div',
                'container_id' => '',
                'container_class' => 'col-sm-6 col-md-3',
                'menu_id' => '',
                'menu_class' => 'footer-menu list-unstyled',
                'echo' => true,
                'fallback_cb' => false,
                'items_wrap' => '<h3>' . $footer_nav_1_title . '</h3><ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 1
              );
              wp_nav_menu($footer_nav_1_args);
            }

            if(has_nav_menu('footer-nav-2')){
              $footer_nav_2 = maxvelocity_get_menu_by_location('footer-nav-2');
              $footer_nav_2_title = $footer_nav_2 ? esc_html($footer_nav_2->name) : '';
              $footer_nav_2_args = array(
                'theme_location' => 'footer-nav-2',
                'menu' => 'Footer Navigation 2',
                'container' => 'div',
                'container_id' => '',
                'container_class' => 'col-sm-6 col-md-3',
                'menu_id' => '',
                'menu_class' => 'footer-menu list-unstyled',
                'echo' => true,
                'fallback_cb' => false,
                'items_wrap' => '<h3>' . $footer_nav_2_title . '</h3><ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 1
              );
              wp_nav_menu($footer_nav_2_args);
            }

            if(has_nav_menu('footer-nav-3')){
              $footer_nav_3 = maxvelocity_get_menu_by_location('footer-nav-3');
              $footer_nav_3_title = $footer_nav_3 ? esc_html($footer_nav_3->name) : "";
              $footer_nav_3_args = array(
                'theme_location' => 'footer-nav-3',
                'menu' => 'Footer Navigation 3',
                'container' => 'div',
                'container_id' => '',
                'container_class' => 'col-sm-6 col-md-3',
                'menu_id' => '',
                'menu_class' => 'footer-menu list-unstyled',
                'echo' => true,
                'fallback_cb' => false,
                'items_wrap' => '<h3>' . $footer_nav_3_title . '</h3><ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 1
              );
              wp_nav_menu($footer_nav_3_args);
            }

            if(has_nav_menu('footer-nav-4')){
              $footer_nav_4 = maxvelocity_get_menu_by_location('footer-nav-4');
              $footer_nav_4_title = $footer_nav_4 ? esc_html($footer_nav_4->name) : '';
              $footer_nav_4_args = array(
                'theme_location' => 'footer-nav-4',
                'menu' => 'Footer Navigation 4',
                'container' => 'div',
                'container_id' => '',
                'container_class' => 'col-sm-6 col-md-3',
                'menu_id' => '',
                'menu_class' => 'footer-menu list-unstyled',
                'echo' => true,
                'fallback_cb' => false,
                'items_wrap' => '<h3>' . $footer_nav_4_title . '</h3><ul id="%1$s" class="%2$s">%3$s</ul>',
                'depth' => 1
              );
              wp_nav_menu($footer_nav_4_args);
            }
            ?>
        </div>
      </div>
    </section>

    <div id="colophon">
      <div class="container">
        <p>&copy;<?php echo date('Y'); echo esc_html(bloginfo('name')); ?></p>
        <p>WEBSITE CREATED BY <a href="https://childressagency.com" target="_blank">THE CHILDRESS AGENCY</a></p>
      </div>
    </div>
  </footer>
  <?php wp_footer(); ?>
</body>
</html>