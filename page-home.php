<?php
/**
 * Template Name: Home
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

?>

<div id="page-wrapper">

	<div class="wrapper-sm bg-gray">
		
		<div class="container">
			
			<div class="row justify-content-center justify-content-xl-between">
				
				<div id="hero-content" class="col-md-10 col-lg-7 col-xl-6 align-self-center">
					
					<h1 class="mb-4"><?php the_field('hero_banner_text'); ?><span class="text-primary"><?php the_field('hero_banner_sub_text'); ?></h1>
					
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
			
			<div class="row justify-content-center justify-content-lg-between">
				
				<div class="col-auto">
					
					<h2 class="mb-5"><?php the_field('about_title'); ?></h2>
					
				</div>
				
			</div>
			
			<div class="row justify-content-center justify-content-lg-between">
				
				<div class="col-md-10 col-lg-6 mb-5 mb-lg-0">
					
					<?php echo wp_get_attachment_image( get_field('about_image_1'), 'Side Image', false, array('class'=>'img-fluid') ); ?>
					
				</div>
				
				<div class="col-md-8 col-lg-6 col-xl-5 align-self-center">
					
					<div class="mb-3">
						
						<?php echo wp_get_attachment_image( get_field('icon_1', 'options'), 'full', false, array('style'=>'width:50px;') ); ?>
						
					</div>
					
					<h3 class="mb-3"><?php the_field('about_sub_title_1'); ?></h3>
					
					<p><?php the_field('about_sub_text_1'); ?></p>
					
					<a href="<?php echo home_url('/get-started'); ?>" class="btn btn-primary">Get Started</a>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div id="wrapper-about-2" class="wrapper bg-primary text-white">
		
		<div class="container">
			
			<div class="row justify-content-center justify-content-lg-between">
				
				<div class="col-md-8 col-lg-6 col-xl-5 align-self-center order-1 order-lg-0">
					
					<div class="mb-3">
						
						<?php echo wp_get_attachment_image( get_field('icon_2', 'options'), 'full', false, array('style'=>'width:50px;') ); ?>
						
					</div>
					
					<h3 class="mb-3 text-white"><?php the_field('about_sub_title_2'); ?></h3>
					
					<p><?php the_field('about_sub_text_2'); ?></p>
					
					<a href="<?php echo home_url('/get-started'); ?>" class="btn btn-white">Get Started</a>
					
				</div>
				
				<div class="col-md-10 col-lg-6 mb-5 mb-lg-0 order-0 order-lg-1">
					
					<?php echo wp_get_attachment_image( get_field('about_image_2'), 'Side Image', false, array('class'=>'img-fluid') ); ?>
					
				</div>
				
			</div>
			
		</div>
		
	</div>

	<div id="wrapper-about-3" class="wrapper">
		
		<div class="container">
			
			<div class="row justify-content-center justify-content-lg-between">
				
				<div class="col-md-10 col-lg-6 mb-5 mb-lg-0">
					
					<?php echo wp_get_attachment_image( get_field('about_image_3'), 'Side Image', false, array('class'=>'img-fluid') ); ?>
					
				</div>
				
				<div class="col-md-8 col-lg-6 col-xl-5 align-self-center">
					
					<div class="mb-3">
						
						<?php echo wp_get_attachment_image( get_field('icon_1', 'options'), 'full', false, array('style'=>'width:50px;') ); ?>
						
					</div>
					
					<h3 class="mb-3"><?php the_field('about_sub_title_3'); ?></h3>
					
					<p><?php the_field('about_sub_text_3'); ?></p>
					
					<a href="<?php echo home_url('/get-started'); ?>" class="btn btn-primary">Get Started</a>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div id="wrapper-founders" class="wrapper bg-primary">
		
		<div class="container">
			
			<div class="row justify-content-center">
				
				<div class="col-auto"><h2 class="text-white text-center mb-5"><?php the_field('founders_title'); ?></h2></div>
				
			</div>
			
			<div class="row justify-content-center">
				
				<div class="col-md-6 col-lg-4 text-center">
					
					<?php echo wp_get_attachment_image( get_field('founder_image_1'), 'large', false, array( 'class' => 'img-fluid rounded-circle mb-3 border-lg' ) ); ?>
					
					<h3 class="text-white mb-4 mb-md-0"><?php the_field('founder_name_1'); ?></h3>
					
				</div>
				
				<div class="col-md-6 col-lg-4 text-center">
					
					<?php echo wp_get_attachment_image( get_field('founder_image_2'), 'large', false, array( 'class' => 'img-fluid rounded-circle mb-3 border-lg' ) ); ?>
					
					<h3 class="text-white"><?php the_field('founder_name_2'); ?></h3>
					
				</div>
				
				<div class="col-12 text-center mt-5">
					
					<a href="<?php echo home_url('/meet-the-founders'); ?>" class="btn btn-light">Meet the Founders</a>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	
	<div id="wrapper-footer-top" class="bg-secondary">
		
		<div class="container-fluid">
			
			<div class="row">
				
				<div id="footer-top-left" class="col-md-6 bg-light">
					
					<div class="row justify-content-between">
						
						<div class="col-xl-5 d-none d-xl-block">

							<?php echo wp_get_attachment_image( get_field('footer_image'), 'full', false, array('class'=>'img-fluid') ); ?>
							
						</div>

						<div class="col-xl-5 align-self-center">
							
							<div class="px-4 px-xl-0 pr-xl-5 py-5 py-xl-0 text-center text-xl-left">
																
								<h2 class="text-secondary d-xl-none">Talk to an Advisor</h2>
								
								<p class="lead"><?php the_field('footer_left_text'); ?></p>
								
								<a href="<?php echo home_url('/get-started'); ?>" class="btn btn-secondary">Talk to an Advisor</a>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
				<div class="col-md-6 align-self-center text-center wrapper">
					
					<h2 class="text-white"><?php the_field('footer_right_title'); ?></h2>
					
					<p class="lead text-white px-4 px-lg-0"><?php the_field('footer_right_text'); ?></p>
					
					<a href="<?php echo home_url('/get-started'); ?>" class="btn btn-white">Get Started</a>
					
				</div>
				
			</div>
			
		</div>
		
	</div>

</div><!-- #page-wrapper -->

<?php get_footer();