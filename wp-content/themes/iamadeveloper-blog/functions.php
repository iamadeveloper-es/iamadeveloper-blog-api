<?php
/**
 * custom functions and definitions
 *
 * @package custom
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// $custom_includes = array(
// 	'/enqueue.php',
// 	'/setup.php',
// 	'/entradas.php',
// 	'/custom-post-types.php',
// 	'/shortcode.php',
// 	'/modulesv2.php'
	
// );

$custom_includes = array(
	'/setup.php',
	'/api/posts.php'
	
);


foreach ( $custom_includes as $file ) {
	$filepath = locate_template( 'includes' . $file );
	if ( !$filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}
