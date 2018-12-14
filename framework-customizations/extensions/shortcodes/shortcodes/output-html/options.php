<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

$options = array(
	'content' => array(
	    'type'  => 'textarea',
	    'label' => esc_html__('Content', 'fw'),
	    'desc'  => esc_html__('Enter your custom HTML content', 'fw'),
	    'value' => '<p>This is simple <strong>HTML output</strong><br />With some <i>styling</i>.</b>'
	),
);
