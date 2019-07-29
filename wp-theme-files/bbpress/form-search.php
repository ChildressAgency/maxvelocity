<?php

/**
 * Search 
 *
 * @package bbPress
 * @subpackage Theme
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

if ( bbp_allow_search() ) : ?>

	<div class="bbp-search-form">
		<form role="search" method="get" id="bbp-search-form" class="search-form">
			<div class="input-group">
				<label class="screen-reader-text hidden" for="bbp_search"><?php esc_html_e( 'Search for:', 'bbpress' ); ?></label>
				<input type="hidden" name="action" value="bbp-search-request" />
        <input type="text" class="form-control" value="<?php bbp_search_terms(); ?>" name="bbp_search" id="bbp_search" />
        <div class="input-group-append">
          <button type="submit" id="bbp_search_submit" value="<?php esc_attr_e('Search', 'bbpress'); ?>" aria-label="<?php esc_attr_e('Search', 'bbpress'); ?>">
            <i class="fas fa-search"></i>
            <span class="sr-only"><?php echo esc_html__('Search', 'bbpress'); ?></span>
          </button>
        </div>
			</div>
		</form>
	</div>

<?php endif;
