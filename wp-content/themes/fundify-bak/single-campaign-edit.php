<?php
/**
 * The Template for displaying all single campaigns.
 *
 * @package Fundify
 * @since Fundify 1.0
 */

get_header(); ?>

	<?php while ( have_posts() ) : the_post(); $campaign = new ATCF_Campaign( $post->ID ); ?>
	<div class="title title-two pattern-<?php echo rand(1,4); ?>">
		<div class="container">
			<h1><?php the_title() ;?></h1>
			<h3><?php _e( 'Edit', 'fundify' ); ?></h3>
		</div>
		<!-- / container -->
	</div>
	<div id="content">
		<div class="container">
			<div class="entry-content">
				<?php echo atcf_shortcode_submit(true); ?>
			</div>
		</div>
		<!-- / container -->
	</div>
	<!-- / content -->
	<?php endwhile; ?>

<?php get_footer(); ?>