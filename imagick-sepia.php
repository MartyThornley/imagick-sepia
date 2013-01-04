<?php
/*
Plugin Name: Imagick Sepia
Plugin URI: http://github.com/getsource/imagick-sepia
Description: Enables Sepia in Imagick for WordPress
Author: Mike Schroder
Version: 1.0
Author URI: https://www.getsource.net
*/

/**
 * Add Sepia Editor to beginning of editor search array.
 *
 * The new editor doesn't need to be at beginning if specifically requesting
 * an editor with sepia() method, but it's safer overall.
 */
function gs_add_imagick_sepia( $editors ) {
	include_once 'editors/imagick-sepia.php';

	array_unshift( $editors, 'GS_Imagick_Sepia_Editor' );
	return $editors;
}
add_filter( 'wp_image_editors', 'gs_add_imagick_sepia' );
