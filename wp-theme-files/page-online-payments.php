<?php get_header(); ?>
<main id="main">
  <div class="container">
    <article class="intro-centered">
      <?php
        get_template_part('partials/section', 'page_title');

        if(have_posts()){
          while(have_posts()){
            the_post();
            the_content();
          }
        }
      ?>

      <form action="https://www.eprocessingnetwork.com/cgi-bin/wo-order.pl" method="post" class="payment-form">
        <input type="hidden" name="QB" value="" />
        <input type="hidden" name="ePNAccount" value="0615966" />
        <input type="hidden" name="ReturnToURL" value="https://www.maxvelocitytactical.com/tactical-training" />
        <input type="hidden" name="BackgroundColor" value="White" />
        <input type="hidden" name="TextColor" class="Black" />

        <div class="form-group">
          <label for="ItemQty">Quantity</label>
          <input  type="text" id="ItemQty" name="ItemQty" readonly class="form-control-plaintext" value="1" />
        </div>
        <div class="form-group">
          <label for="ItemDesc">Description</label>
          <input type="text" id="ItemDesc" name="ItemDesc" class="form-control" />
        </div>
        <div class="from-group">
          <label for="ItemCost">Price</label>
          <input type="text" id="ItemCost" name="ItemCost" class="form-control" />
        </div>
        <div class="form-group">
          <p><em><?php echo esc_html__('Please enter your payment description and amount in the boxes above and click "continue" to go to the secure credit card payment form.', 'maxvelocity'); ?></em></p>
        </div>
        <div class="form-group">
          <input type="submit" class="btn-submit" value="Continue" />
        </div>
      </form>
      
    </article>
  </div>
</main>
<?php get_footer();