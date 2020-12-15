<?php
/**
 * Template Name: Subscribe Template
 *
 * @package diagrid
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('simple');

?>

<div id="page-wrapper">

	<div class="wrapper-sm border-bottom bg-light">
		
		<div class="container">
		
			<div class="row justify-content-center">
		
				<div class="col-md-6 col-xl-6">
		
					<div class="mp_wrapper wrapper-box bg-white p-4 border">
		
						<?php while ( have_posts() ) : the_post(); ?>
				
							<?php the_content(); ?>
				
						<?php endwhile; // end of the loop. ?>
						
					</div>
					
				</div>
				
			</div>
			
		</div>
		
	</div>

</div>

<?php get_footer();
