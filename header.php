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

		<nav id="main-nav" class="navbar navbar-expand-sm navbar-dark" aria-labelledby="main-nav-label">

			<h2 id="main-nav-label" class="sr-only">
				<?php esc_html_e( 'Main Navigation', 'diagrid' ); ?>
			</h2>

			<div class="container">
				
				<a class="navbar-brand" href="<?php echo home_url(); ?>"><?php echo wp_get_attachment_image( get_field('logo', 'options'), 'full', false, array('class'=>'img-fluid', 'style'=>'width:250px') ); ?></a>
				
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'diagrid' ); ?>">
					<span class="navbar-toggler-icon"></span>
				</button>
				
				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav mr-auto ml-5',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 1,
						'walker'          => new diagrid_WP_Bootstrap_Navwalker(),
					)
				); ?>
				
				<div class="phone mr-3"><a href="tel:619-752-0885"><i class="fa fa-phone-square"></i> 619-752-0885</a></div>
				<div class="ml-sm-auto d-none d-sm-block">
					
					<a href="<?php echo home_url('/get-started'); ?>" class="btn btn-primary">Get Started</a>
					
				</div>
			
			</div><!-- .container -->

		</nav><!-- .site-navigation -->

	</div><!-- #wrapper-navbar end -->
