<?php
/**
 * The header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package diagrid
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-173156962-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	
	  gtag('config', 'UA-173156962-1');
	</script>

</head>

<body <?php body_class(); ?>>
<div class="site" id="page">

	<div id="wrapper-navbar" class="bg-gray">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'diagrid' ); ?></a>

		<nav id="main-nav" class="py-2" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'diagrid' ); ?>
			</h2>

			<div class="container">
				
				<div class="row justify-content-center justify-content-md-between">
					
					<div class="col-12 col-md-6 text-center text-md-left">
						
						<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php echo wp_get_attachment_image( get_field('logo', 'options'), 'full', false, array('class'=>'img-fluid', 'style'=>'width:250px') ); ?></a>
				
					</div>
					
					<?php if ( is_user_logged_in() ): ?>
					
						<div class="col-auto col-md-6 align-self-center mt-3 mt-md-0 text-center text-md-right">
							
							<p class="mb-3"><a href="<?php echo home_url('/resource'); ?>" class="btn btn-primary btn-sm"><?php _e('View Resources'); ?></a></p>
							
						</div>
						
						<div class="col-auto d-md-none align-self-center"><a href="<?php echo home_url('/account'); ?>" class="btn btn-light btn-sm"><i class="fa fa-user"></i> Account</a></div>
						
					<?php endif; ?>
						
				</div>
						
			</div><!-- .container -->

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
