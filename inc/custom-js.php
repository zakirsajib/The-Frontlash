<?php 
function _frontlash_custom_js() {
    if (!defined('FW')) return; // prevent fatal error when the framework is not active
    $custom_js = fw_get_db_settings_option('custom_js');
    if(!empty($custom_js)):
    	echo '<script type="text/javascript">';
			echo '$ = jQuery.noConflict();';
			echo '$(function ($) {';
				echo '$(document).ready(function(){';
					echo $custom_js;
				echo '});';
			echo '});';
		echo '</script>';
	endif;
}
add_action('wp_footer', '_frontlash_custom_js');