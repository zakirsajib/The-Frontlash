<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

$manifest = array();
$manifest['id'] = 'frontlash';
$manifest['display'] = true;
$manifest['standalone'] = true;
$manifest['supported_extensions'] = array(
	'page-builder' => array(),
	'slider' => array(),
	'styling' => array(),
	'megamenu' => array(),
	'portfolio' => array(),
	'backups' => array(),
	'seo' => array(),
	'sidebars' => array(),
	'wp-shortcodes' => array()
);