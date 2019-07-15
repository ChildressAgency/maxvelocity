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
            <?php echo apply_filters('the_content', wp_kses_post(get_field('newsletter_signup_text', 'option'))); ?>
          </div>
          <div class="col-md-6">
            <?php echo do_shortcode(get_field('newsletter_signup_form_shortcode', 'option')); ?>
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
              $facebook = get_field('facebook', 'option');
              $instagram = get_field('instagram', 'option');
              $twitter = get_field('twitter', 'option');
              $youtube = get_field('youtube', 'option');
              $rss = get_field('rss', 'option');

              $footer_social = '<li><div class="footer-social">';
              if($facebook){
                $footer_social .= '<a href="' . esc_url($facebook) . '" id="facebook" title="Facebook" target="_blank"><i class="fab fa-facebook"></i><span class="sr-only">Facebook</span></a>';
              }
              if($instagram){
                $footer_social .= '<a href="' . esc_url($instagram) . '" id="instagram" title="Instagram" target="_blank"><i class="fab fa-instagram"></i><span class="sr-only">Instagram</span></a>';
              }
              if($twitter){
                $footer_social .= '<a href="' . esc_url($twitter) . '" id="twitter" title="Twitter" target="_blank"><i class="fab fa-twitter"></i><span class="sr-only">Twitter</span></a>';
              }
              if($youtube){
                $footer_social .= '<a href="' . esc_url($youtube) . '" id="youtube" title="YouTube" target="_blank"><i class="fab fa-youtube"></i><span class="sr-only">YouTube</span></a>';
              }
              if($rss){
                $footer_social .= '<a href="' . esc_url($rss) . '" id="rss" title="RSS" target="_blank"><i class="fas fa-rss"></i><span class="sr-only">RSS</span></a>';
              }
              $footer_social .= '</div></li>';

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
                'items_wrap' => '<h3>' . $footer_nav_4_title . '</h3><ul id="%1$s" class="%2$s">%3$s' . $footer_social . '</ul>',
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