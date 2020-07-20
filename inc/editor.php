<?php
/**
 * diagrid modify editor
 *
 * @package diagrid
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

add_filter( 'gform_validation_message_1', 'change_message', 10, 2 );

function change_message( $message, $form ) {

	return "<div class='validation_error'>Please provide a valid email address to get started</div>";

}