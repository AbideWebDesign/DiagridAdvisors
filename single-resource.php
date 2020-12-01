<?php
/**
 * The template for displaying all single posts
 *
 * @package diagrid
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('simple');

$user = wp_get_current_user();

?>

<div id="single-wrapper" class="wrapper-sm border-bottom">

	<div class="container" id="content" tabindex="-1">

		<?php get_template_part( 'loop-templates/content', 'resource-top' ); ?>
		
		<div class="row">
			
			<div class="col-12 d-none d-md-block">
				
				<p class="mb-4"><a href="<?php echo home_url('/resource'); ?>"><i class="fa fa-chevron-left"></i> <?php _e('Back to Resources'); ?></a></p>
				
			</div>
			
		</div>
				
		<div class="row">
			
			<div class="col-lg-9">	

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'resource' ); ?>

				<?php endwhile; // end of the loop. ?>

			</div>
			
			<?php get_template_part( 'loop-templates/content', 'resource-sidebar' ); ?>	

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer();
