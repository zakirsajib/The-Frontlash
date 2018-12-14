<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'image_desktop_one' => array(
		'type'  => 'upload',
		'label' => __( 'Choose Image 1 for Desktop', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
	),
	
	'image_desktop_two' => array(
		'type'  => 'upload',
		'label' => __( 'Choose Image 2 (overlap) for Desktop', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
	),
	
	'image_portrait' => array(
		'type'  => 'upload',
		'label' => __( 'Choose Image for Mobile/Tablet', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' )
	)	
);