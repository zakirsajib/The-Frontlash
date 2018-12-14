<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

$options = array(
	'content' => array(
	    'type'  => 'textarea',
	    'label' => esc_html__('Content', 'fw'),
	    'desc'  => esc_html__('Enter your custom JavaScript content', 'fw'),
	    'value' => 'alert("This is simple JavaScript output!");'
	),
);
