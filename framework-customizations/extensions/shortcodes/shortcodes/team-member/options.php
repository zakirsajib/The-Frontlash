<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'name'  => array(
		'label' => __( 'Team Member Name', 'fw' ),
		'desc'  => __( 'Name of the person', 'fw' ),
		'type'  => 'text',
		'value' => ''
	),
	'job'   => array(
		'label' => __( 'Team Member Job Title', 'fw' ),
		'desc'  => __( 'Job title of the person.', 'fw' ),
		'type'  => 'text',
		'value' => ''
	),
	'linkedin_image' => array(
		'label' => __( 'Social Image/Icon', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' ),
		'type'  => 'upload',
		'help'  => esc_html__( 'Example: Recommended size 34px x 34px', 'fw' )
	),
	'linkedin_url'   => array(
		'label' => __( 'Social URL', 'fw' ),
		'desc'  => __( 'Full Social URL.', 'fw' ),
		'type'  => 'text',
		'value' => ''
	),
	'desc'  => array(
		'label' => __( 'Team Member Description', 'fw' ),
		'desc'  => __( 'Enter a few words that describe the person', 'fw' ),
		'type'  => 'textarea',
		'value' => ''
	),
	'image' => array(
		'label' => __( 'Team Member Image', 'fw' ),
		'desc'  => __( 'Either upload a new, or choose an existing image from your media library', 'fw' ),
		'type'  => 'upload',
		'help'  => esc_html__( 'Example: Recommended size 300px x 300px', 'fw' )
	),
	'image_hover'  => array(
		'label'   => __( 'Image Hover effect', 'fw' ),
		'desc'    => __( 'Add a mouse hover effect to the image', 'fw' ),
		'type'    => 'select',
		'choices' => array(
			'no'      => __('No', 'fw'),
			'yes' => __( 'Yes, slightly increase the image size', 'fw' ),
		)
	),
	'margin'   => array(
		'label' => esc_html__( 'Margin for Image', 'fw' ),
		'desc'  => __( 'Enter your custom margin (<b>top right bottom left</b>)', 'fw' ),
		'type'  => 'text',
		'value' => '',
		'help'  => esc_html__( 'Example: 0px 0px 15px 0px', 'fw' ), 
	)
);