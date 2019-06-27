<form action="<?php echo esc_url(home_url()); ?>" method="get">
  <div class="input-group">
    <input type="text" id="search" name="s" class="form-control" placeholder="<?php echo esc_html__('Search', 'maxvelocity'); ?>" aria-label="<?php echo esc_html__('Search', 'maxvelocity'); ?>" aria-describedby="button-search" />
    <div class="input-group-append">
      <button type="submit" id="button-search" class="btn btn-outline-secondary" aria-label="<?php echo esc_html__('Search', 'maxvelocity'); ?>">
        <i class="fas fa-search"></i>
        <span class="sr-only"><?php echo esc_html__('Search', 'maxvelocity'); ?></span>
      </button>
    </div>
  </div>
</form>
