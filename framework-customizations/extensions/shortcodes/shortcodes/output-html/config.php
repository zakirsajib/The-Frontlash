<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

$cfg = array(
	'page_builder' => array(
		'title'       => esc_html__( 'Output HTML', 'fw' ),
		'description' => esc_html__( 'Add a Output HTML', 'fw' ),
		'tab'         => esc_html__( 'Content Elements', 'fw' ),
		'popup_size'  => 'large',

		'icon' => 'fa fa-code',
        'title_template' => '
        	<b>{{- title }}</b>',
	)
);
