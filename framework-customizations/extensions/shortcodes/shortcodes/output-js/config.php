<?php if ( ! defined( 'FW' ) ) { die( 'Forbidden' ); }

$cfg = array(
	'page_builder' => array(
		'title'       => esc_html__( 'Output JS', 'fw' ),
		'description' => esc_html__( 'Add a Output JS', 'fw' ),
		'tab'         => esc_html__( 'Content Elements', 'fw' ),
		//'popup_size'  => 'medium',

		'icon' => 'fa fa-code',
        'title_template' => '
        	<b>{{- title }}</b>',
	)
);
