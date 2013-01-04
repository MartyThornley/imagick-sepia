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
	$new_editor = 'WP_Image_Editor_Imagick_Sepia';

	if( ! class_exists( $new_editor ) )
		include_once 'editors/imagick-sepia.php';

	if( ! in_array( $new_editor, $editors ) )
		array_unshift( $editors, $new_editor );

	return $editors;
}
add_filter( 'wp_image_editors', 'image_editors_add_imagick_sepia' );
