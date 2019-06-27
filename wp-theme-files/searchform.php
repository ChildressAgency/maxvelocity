<form action="<?php echo esc_url(home_url()); ?>" method="get">
  <div class="input-group">
    <input type="text" id="search" name="s" class="form-control" placeholder="<?php echo esc_html__('Search', 'maxvelocity'); ?>" aria-label="Search" aria-describedby="button-search" />
    <div class="input-group-append">
      <button type="submit" id="button-search" class="btn btn-outline-secondary" aria-label="Search">
        <i class="fas fa-search"></i>
        <span class="sr-only">Search</span>
      </button>
    </div>
  </div>
</form>
