<?php
/**
 * Template Name: Membership Landing
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('transparent');

$image = wp_get_attachment_image_src( get_field('hero_banner_image'), 'Full', false );
?>

<div id="page-wrapper">

	<div class="hero-image" style="background-image: url(<?php echo $image[0]; ?>)">
		
		<div class="container-fluid">
			
			<div class="row">
				
				<div class="col-xl-4 offset-xl-2">
					
					<h1 class="text-white"><?php the_field('hero_banner_title'); ?></h1>
										
				</div>
				
				<div id="hero-form" class="col-xl-3">
																	
					<?php echo do_shortcode('[mepr-membership-registration-form id="147"]' ); ?>
											
				</div>
				
			</div>
			
			<div class="row no-gutters hero-stripe">
				
				<div class="col-xl-4 offset-xl-2">
					
					<div class="py-5 lead"><?php the_field('hero_banner_text'); ?></div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>
	

<?php get_footer();
