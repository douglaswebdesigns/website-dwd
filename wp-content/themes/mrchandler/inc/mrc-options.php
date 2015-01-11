<?php
/**
 * @package bootstrapwp
 */
 
if ( ! function_exists('mrc_option') ) {
	function mrc_option($id, $fallback = false, $param = false ) {
		global $mrc_options;
		if ( $fallback == false ) $fallback = '';
		$output = ( isset($mrc_options[$id]) && $bswp_options[$id] !== '' ) ? $mrc_options[$id] : $fallback;
		if ( !empty($mrc_options[$id]) && $param ) {
			$output = $mrc_options[$id][$param];
		}
		return $output;
	}
}