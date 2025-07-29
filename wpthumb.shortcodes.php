<?php

/**
 * The [wpthumb] shortcode is used for resizing image URLs / attachments from within the content
 *
 * The wpthumb shortcode supports all the WP Thumb arguments, for example:
 *
 * [wpthumb 4567 width=400 height=200]
 *
 * @deprecated 0.11 Use wp_get_attachment_image() or native WordPress image functions instead.
 * @since 0.1
 * @param array $args Shortcode arguments
 * @return string Empty string - function deprecated due to SSRF vulnerability (CVE-2025-49983)
 */

add_shortcode( 'wpthumb', 'wpthumb_img_shortcode' );

function wpthumb_img_shortcode( $args ) {
	
	_deprecated_function( __FUNCTION__, '0.11', 'wp_get_attachment_image() or native WordPress image functions. This shortcode has been disabled due to SSRF security vulnerability (CVE-2025-49983).' );
	
	return '';
}
