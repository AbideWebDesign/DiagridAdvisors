<?php
/**
 * Theme basic setup
 *
 * @package diagrid
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_image_size('Hero Banner', 1082, 1144, true);
add_image_size('Side Image', 1200, 830, true);

if ( function_exists( 'acf_add_options_page' ) ) {
	
	acf_add_options_page();
	
}
