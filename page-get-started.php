<?php
/**
 * Template Name: Get Started
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div id="page-wrapper-about">

	<div class="wrapper bg-light">
		
		<div class="container">
			
			<div class="row justify-content-center text-center">
				
				<div class="col-lg-8">
					
					<h2 class="mb-5"><?php the_field('get_started_title'); ?></h2>
					
					<p class="lead"><?php the_field('get_started_text'); ?></p>
					
				</div>
								
			</div>
			
			<div class="row justify-content-center">
				
				<div class="col-md-10 col-lg-6">
					
					<div class="bg-white border p-3 p-md-5">
					
						<?php echo do_shortcode('[gravityform id="' . get_field('get_started_form') . '" title="false" description="false" ajax="true"]'); ?>
					
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>

</div><!-- #page-wrapper -->

<?php get_footer();
