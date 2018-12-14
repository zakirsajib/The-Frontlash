<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
	'section_class' => array(
		'label' => __('Column Class', 'fw'),
		'desc'  => __('CSS class name', 'fw'),
		'type'  => 'text',
	),
	'background_color' => array(
		'label' => __('Background Color', 'fw'),
		'desc'  => __('Please select the background color', 'fw'),
		'type'  => 'color-picker',
	),
	'padding'   => array(
		'label' => esc_html__( 'Padding', 'fw' ),
		'desc'  => __( 'Enter your custom padding (<b>top right bottom left</b>)', 'fw' ),
		'type'  => 'text',
		'value' => '',
		'help'  => esc_html__( 'Example: 0px 0px 0px 0px', 'fw' ), 
	),
	'border'   => array(
		'label' => esc_html__( 'Border', 'fw' ),
		'desc'  => __( 'Enter your custom border', 'fw' ),
		'type'  => 'text',
		'value' => '',
		'help'  => esc_html__( 'Example: 1px solid #ccc', 'fw' ), 
	)
);