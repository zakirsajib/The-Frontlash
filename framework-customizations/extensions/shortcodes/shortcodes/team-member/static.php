<?php if (!defined('FW')) die('Forbidden');

$shortcodes_extension = fw_ext('shortcodes');
wp_enqueue_style(
	'fw-shortcode-team-member', get_template_directory_uri() . '/framework-customizations/extensions/shortcodes/shortcodes/team-member/static/css/styles.css');
