<?php 
function _frontlash_custom_css() {
    if (!defined('FW')) return; // prevent fatal error when the framework is not active
    $custom_css = fw_get_db_settings_option('custom_css');
    
    if(!empty($custom_css)):
    	echo '<style>';
		echo $custom_css;
		echo '</style>';
	endif;
}
add_action('wp_footer', '_frontlash_custom_css');