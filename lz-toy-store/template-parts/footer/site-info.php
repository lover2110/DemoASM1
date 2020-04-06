<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage lz-toy-store
 * @since 1.0
 * @version 1.4
 */

?>
<div class="site-info  white-border">
	<p><?php echo esc_html(get_theme_mod('lz_toy_store_footer_copy',__('Copyright 2018 -','lz-toy-store'))); ?> <?php lz_toy_store_credit(); ?></p>
</div>