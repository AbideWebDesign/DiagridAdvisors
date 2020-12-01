<div class="resource-wrap">
	
	<div class="s mb-4">
		
		<div class="embed-responsive embed-responsive-16by9">
			
			<iframe class="embed-responsive-item" src="<?php the_field('video_url'); ?>"></iframe>
	
		</div>
		
	</div>
	
	<h2 class="mb-2"><?php the_title(); ?></h2>
	
	<p class="lead-secondary"><?php the_field('brief_description'); ?></p>
	
	<?php the_field('full_description'); ?>
	
</div>