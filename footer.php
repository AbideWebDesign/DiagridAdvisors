<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package diagrid
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<div class="wrapper-sm" id="wrapper-footer">

	<div class="container">

		<div class="row justify-content-between">

			<div class="col-md-7 order-1 order-md-0">

				<div class="d-flex flex-column flex-md-row">
					
					<div class="pr-md-3 pb-3 pb-md-0 text-center text-md-left"><a href="<?php echo home_url(); ?>"><?php echo wp_get_attachment_image( get_field('logo_dark', 'options'), 'full', false, array('class'=>'img-fluid', 'style'=>'width:150px') ); ?></a></div>
					
					<div class="align-self-center text-center text-md-left"><a class="btn-text text-lg mb-2 d-block" href="<?php echo home_url('/about'); ?>">About</a>© <?php echo date('Y'); ?> Diagrid Advisors. All Rights Reserved.<br><a href="https://abidewebdesign.com" target="_blank">Website Design and Maintenance by Abide Web Design</a></div>
					
				</div>
				
			</div><!--col end -->
			
			<div class="col-md-5 align-self-center text-center text-md-right mb-4 mb-md-0">

				<ul class="list-inline mb-0">
														
					<li class="list-inline-item"><a href="tel:619-752-0885" class="btn btn-text"><i class="fa fa-phone-square"></i> 619-752-0885</a></li>
										
				</ul>

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

