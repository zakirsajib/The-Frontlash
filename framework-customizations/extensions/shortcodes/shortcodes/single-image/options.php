<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'single_image' => array(
		'type'  => 'upload',
		'label' => __( 'Choose Image (Portrait)', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
	),
	'single_image_width'  => array(
		'type'  => 'text',
		'label' => __( 'Width', 'fw' ),
		'desc'  => __( 'Set image width', 'fw' ),
		'value' => '500'
	)
);