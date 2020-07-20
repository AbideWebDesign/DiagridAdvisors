<?php
/**
 * diagrid functions and definitions
 *
 * @package diagrid
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$diagrid_includes = array(
	'/setup.php',                           // Theme setup and custom theme supports.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/pagination.php',                      // Custom pagination for this theme.
	'/class-wp-bootstrap-navwalker.php',    
	'/editor.php',                          // Load Editor functions.
	'/page-blocks.php',						// Load ACF page blocks.
);

foreach ( $diagrid_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}
