<?php if (!defined('FW')) die('Forbidden');

$shortcodes_extension = fw_ext('shortcodes');
wp_enqueue_style(
	'fw-shortcode-media-image', get_template_directory_uri() . '/framework-customizations/extensions/shortcodes/shortcodes/media-image/static/css/styles.css');

