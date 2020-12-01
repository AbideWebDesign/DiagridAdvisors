<?php

$current_id = get_the_id();

$terms = get_the_terms( $current_id, 'resource_category' );

$args = array(
	'posts_per_page' => 3,
	'post_type'   => 'resource',
	'exclude'     => array( $current_id ),
	'tax_query' => array (
		array (
			'taxonomy' => 'resource_category',
			'field' => 'term_id',
			'terms' => $terms[0]->term_id
		)
	)	
);

$latest_resources = get_posts( $args );

?>

<?php if ( $latest_resources ): ?>

	<div class="col-md-6 col-lg-3 mt-5 mt-xl-0">
	
		<h4><?php _e('More Resources'); ?></h4>
		
		<?php foreach ( $latest_resources as $resource ): ?>
		
			<?php if ( $resource->ID != $current_id ): ?>
			
				<?php $image = wp_get_attachment_image_src( get_field('featured_image', $resource->ID), 'Thumbnail', false ); ?>
	
				<div class="mb-3">
					
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
				
			<?php endif; ?>
		
		<?php endforeach; ?>
			
	</div>

<?php endif; ?>