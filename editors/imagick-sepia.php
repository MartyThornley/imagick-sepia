<?php
/**
 * WordPress Image Editor Class that adds Sepia to Imagick
 *
 * @since 1.0
 * @uses WP_Image_Editor Extends class
 */
class WP_Image_Editor_Imagick_Sepia extends WP_Image_Editor_Imagick {

	/**
	 * Filters current in-memory image with Sepia
	 *
	 * @since 1.0
	 * @access public
	 *
	 * @param int $amount
	 * @return bool|WP_Error
	 */
	public function sepia( $amount = 80 ) {
		try {
			$this->image->sepiaToneImage( $amount );
			return true;
		}
		catch ( Exception $e ) {
			return new WP_Error( 'image_sepia_error', $e->getMessage() );
		}
	}
}
