<?php
/**
 * Template Name: Founders
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div id="page-wrapper-about">

	<div class="wrapper-sm">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-auto"><h2 class="text-center mb-0"><?php the_field('founders_title'); ?></h2></div>
				
			</div>
			
		</div>
		
	</div>
	
	<div class="wrapper-sm bg-primary">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-md-6 col-lg-4 text-center">
					
					<?php echo wp_get_attachment_image( get_field('founder_image_1'), 'large', false, array( 'class' => 'img-fluid rounded-circle mb-3 border-lg' ) ); ?>
					
					<h3 class="mb-4 mb-md-0 text-white"><?php the_field('founder_name_1'); ?></h3>
					
				</div>
				
				<div class="col-md-6 col-lg-4 text-center">
					
					<?php echo wp_get_attachment_image( get_field('founder_image_2'), 'large', false, array( 'class' => 'img-fluid rounded-circle mb-3 border-lg' ) ); ?>
					
					<h3 class="text-white"><?php the_field('founder_name_2'); ?></h3>
					
				</div>
				
			</div>
			
		</div>
		
	</div>

	<div class="wrapper bg-light">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-lg-7">
					
					<div class="mb-3"><?php the_field('founder_content'); ?></div>
					
					<div class="text-center">
						
						<a href="<?php echo home_url('/get-started'); ?>" class="btn btn-primary">Get Started</a>
						
					</div>
										
				</div>
				
			</div>
			
		</div>
		
	</div>

</div><!-- #page-wrapper -->

<?php get_footer();
