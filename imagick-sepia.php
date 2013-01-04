<?php
/*
Plugin Name: Imagick Sepia
Plugin URI: http://github.com/getsource/imagick-sepia
Description: Enables Sepia in Imagick for WordPress
Author: Mike Schroder
Version: 1.0
Author URI: https://www.getsource.net
*/

function image_editors_add_imagick_sepia( $editors ) {
	if( ! class_exists('WP_Image_Editor_Imagick_Sepia') )
		include_once 'editors/imagick-sepia.php';

	if( ! in_array( 'WP_Image_Editor_Imagick_Sepia', $editors ) )
		array_unshift( $editors, 'WP_Image_Editor_Imagick_Sepia' );

	return $editors;
}
add_filter( 'wp_image_editors', 'image_editors_add_imagick_sepia' );
