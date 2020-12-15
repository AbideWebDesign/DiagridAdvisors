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

		<div class="d-none d-md-block">
			
			<div class="row justify-content-between">

				<div class="col-md-8">
					
					<h1 class="text-primary mb-2"><?php the_title(); ?></h1>
									
					<p class="lead-secondary"><?php the_field('brief_description'); ?></p>
				
				</div>
				
				<div class="col-md-4 align-self-center d-none d-md-block text-right">
					
					<?php if ( is_user_logged_in() ): ?>
					 
						<a href="<?php echo home_url('/account'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-user"></i> <?php _e('Manage Account'); ?></a>
						
					<?php else: ?>
					
						<a href="<?php echo home_url('/login'); ?>" class="btn btn-primary btn-sm"><i class="fa fa-user"></i> <?php _e('Login to Account'); ?></a>
					
					<?php endif; ?>
					
				</div>
				
			</div>
			
			<div class="row">
						
				<div class="col-12 d-none d-md-block">
					
					<p class="mb-0"><a href="<?php echo home_url('/resource'); ?>"><i class="fa fa-chevron-left"></i> <?php _e('Back to Resources'); ?></a></p>
					
				</div>
				
			</div>
			
			<div class="row">
				
				<div class="col-12 mb-4">
					
					<hr>
					
				</div>
				
			</div>
			
		</div>
				
		<div class="row">
			
			<div class="col-lg-9">	

				<?php if ( current_user_can( 'mepr-active','membership:' . get_field('membership') ) ): ?>
				
					<div class="s mb-4">
			
						<div class="embed-responsive embed-responsive-16by9">
							
							<iframe class="embed-responsive-item" src="<?php the_field('video_url'); ?>"></iframe>
					
						</div>
						
					</div>
					
				<?php else: ?>
				
					<div class="bg-dark p-5 mb-4 text-center">
						
						<div class="d-flexf flex-row align-self-center justify-content-center w-100">
						
							<h4 class="text-white mb-2"><?php the_field('resource_purchase_title', 'options'); ?></h4>
							
							<p class="text-sm text-white mb-4"><?php the_field('resource_purchase_sub', 'options'); ?></p>
							
							<div class="btn-get-started">
								
								<?php echo do_shortcode('[mepr-membership-link id="' . get_field('membership') . '"]Get Started[/mepr-membership-link]'); ?>
								
							</div>
							
						</div>
						
					</div>
					
				<?php endif; ?>
				
				<div class="resource-wrap">
						
					<?php the_field('full_description'); ?>
					
				</div>


			</div>
			
			<?php get_template_part( 'loop-templates/content', 'resource-sidebar' ); ?>	

		</div><!-- .row -->

	</div><!-- #content -->

</div><!-- #single-wrapper -->

<?php get_footer();
