<?php
/**
 * The template for displaying search forms in Fundify
 *
 * @package Fundify
 * @since Fundify 1.0
 */
?>
	<div class="search-box">
		<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
			<input type="text" name="s" placeholder="<?php esc_attr_e( 'Search', 'fundify' ); ?>" />
			<button type="submit" class="submit" name="submit" id="searchsubmit"></button>
		</form>
	</div>