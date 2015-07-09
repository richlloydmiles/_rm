<?php
/**
 * Template Name: Full Width Page
 *
 * @package _tk
 */

get_header('alt'); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<?php if ( have_posts() ) : ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php	get_template_part( 'content', get_post_format() );	?>

				<?php endwhile; ?>

				<?php _tk_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<?php get_template_part( 'no-results', 'index' ); ?>

			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer('alt'); ?>