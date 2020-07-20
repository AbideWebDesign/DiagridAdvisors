<?php
/**
 * Template Name: About
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div id="page-wrapper-about">

	<div class="wrapper-sm bg-gray">
		
		<div class="container">
			
			<div class="row justify-content-center justify-content-xl-between">
				
				<div id="hero-content" class="col-md-10 col-lg-7 col-xl-6 align-self-center">
					
					<h1 class="mb-4"><?php the_field('hero_banner_text'); ?> <span class="text-primary"><?php the_field('hero_banner_sub_text'); ?></h1>
					
					<div id="hero-content-sub" class="mb-4"><?php the_field('hero_banner_small_text'); ?></div>
					
					<?php echo do_shortcode('[gravityform id="' . get_field('hero_banner_form') . '" title="false" description="false" ajax="true"]'); ?>
					
				</div>
				
				<div id="hero-image" class="col-lg-5 d-none d-lg-block">
					
					<?php echo wp_get_attachment_image( get_field('hero_banner_image'), 'Hero Banner', false, array('class'=>'img-fluid') ); ?>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div id="wrapper-about-1" class="wrapper">
		
		<div class="container">
			
			<div class="row justify-content-between">
				
				<div class="col-auto align-self-center">
					
					<h2 class="mb-5"><?php the_field('about_title'); ?></h2>
					
				</div>
				
				<div class="col-lg-6 mb-5 mb-lg-0">
					
					<?php the_field('about_content'); ?>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div id="wrapper-recommend" class="wrapper bg-primary">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-lg-9 text-center">
					
					<h2 class="text-white mb-5"><?php the_field('recommendations_title'); ?></h2>
					
					<div class="row justify-content-center">
						
						<?php while ( have_rows('recommendations') ): the_row(); ?>
						
							<div class="col-6 col-md-4 col-lg-4 mb-5">
								
								<div class="wrapper-logo bg-white px-2 px-md-5">
									
									<div class="d-flex h-100">
									
										<a class="align-self-center" href="<?php the_sub_field('url'); ?>" target="_blank"><?php echo wp_get_attachment_image( get_sub_field('logo'), 'full', false, array('class'=>'img-fluid') ); ?></a>
								
									</div>
									
								</div>
								
								<div class="mt-4">
									
									<h5 class="text-center text-white"><?php the_sub_field('company_name'); ?></h5>
									
									<p class="text-sm mb-0 text-light"><strong>Services:</strong> <?php the_sub_field('services'); ?></p>
									
								</div>
								
							</div>
						
						<?php endwhile; ?>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div id="wrapper-footer-top" class="bg-secondary">
		
		<div class="container-fluid">
			
			<div class="row">
				
				<div id="footer-top-left" class="col-md-6 bg-light">
					
					<div class="row justify-content-between">
						
						<div class="col-lg-5">

							<?php echo wp_get_attachment_image( get_field('footer_image'), 'full', false, array('class'=>'img-fluid') ); ?>
							
						</div>

						<div class="col-lg-5 wrapper align-self-center">
							
							<div class="px-3 px-lg-0 pr-lg-5 text-center text-lg-left">
								
								<p class="lead"><?php the_field('footer_left_text'); ?></p>
								
								<a href="<?php echo home_url('/get-started'); ?>" class="btn btn-secondary">Talk to an Advisor</a>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
				<div class="col-md-6 align-self-center text-center wrapper">
					
					<h2 class="text-white"><?php the_field('footer_right_title'); ?></h2>
					
					<p class="lead text-white"><?php the_field('footer_right_text'); ?></p>
					
					<a href="<?php echo home_url('/get-started'); ?>" class="btn btn-white">Get Started</a>
					
				</div>
				
			</div>
			
		</div>
		
	</div>

</div><!-- #page-wrapper -->

<?php get_footer();
