<?php
/**
 * The template for displaying archive pages
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package diagrid
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$terms = get_terms( array ( 'taxonomy' => 'resource_category', 'hide_empty' => true ) );

?>

<div class="wrapper-sm" id="archive-wrapper">

	<div class="container" id="content" tabindex="-1">

		<?php get_template_part( 'loop-templates/content', 'resource-top' ); ?>

		<?php if ( ! empty( $terms ) ): ?>
				
			<?php foreach( $terms as $term ): ?>

				<div class="row">
					
					<div class="col-lg-8">
						
						<h4 class="text-dark"><?php echo $term->name; ?></h4>
						
					</div>
					
				</div>
				
				<div class="row mb-5">
			
					<?php 
						
						$args = array( 
							'post_type' => 'resource', 
							'posts_per_page' => -1,
							'tax_query' => array(
								array(
									'taxonomy' => 'resource_category',
									'field' => 'term_id',
									'terms' => $term->term_id
								)
							)		
						);
						
						$resources = get_posts( $args );
						
					?>
					
					<?php foreach ( $resources as $resource ): ?>
					
						<?php $image = wp_get_attachment_image_src( get_field('featured_image', $resource->ID), 'Thumbnail', false ); ?>
					
						<div class="col-lg-4">
							
							<a href="<?php the_permalink( $resource->ID ); ?>">
				
								<div class="loop-resource-image s d-flex justify-content-center" style="background-image: url(<?php echo $image[0]; ?>);">
									
									<div class="bg-overlay"></div>
									
									<div class="loop-resource-image-icon align-self-center">
										
										<i class="fa fa-play-circle fa-2x text-white"></i>
										
									</div>
									
								</div>
								
							</a>
							
							<p class="loop-resource-title mt-3 mb-1"><?php echo get_the_title( $resource->ID ); ?></p>
							
							<?php if ( get_field('brief_description', $resource->ID ) ): ?>
							
								<p class="text-sm text-gray"><?php the_field('brief_description', $resource->ID ); ?></p>
							
							<?php endif; ?>
	
						</div>
					
					<?php endforeach; ?>
					
				</div>
									
			<?php endforeach; ?>
		
		<?php endif; ?>		

	</div><!-- #content -->

	</div><!-- #archive-wrapper -->

<?php get_footer();
