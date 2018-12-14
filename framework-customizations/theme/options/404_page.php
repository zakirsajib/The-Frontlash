<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'404-page' => array(
		'title'   => esc_html__( '404 Page', 'jevelin' ),
		'type'    => 'tab',
		'options' => array(
			'404-page-box' => array(
				'title'   => esc_html__( '404 Page Settings', 'jevelin' ),
				'type'    => 'box',
				'options' => array(
					'404_title' => array(
						'type'  => 'text',
						'value' => 'Oops, This Page Could Not Be Found!',
						'label' => esc_html__('Title', 'jevelin'),
						'desc'  => esc_html__('Enter 404 page title', 'jevelin'),
					),

					'404_text' => array(
						'type'  => 'text',
						'value' => 'The page you are looking for might have been removed, had its name changed, or is temporarily unavailable.',
						'label' => esc_html__('Message', 'jevelin'),
						'desc'  => esc_html__('Enter 404 page message', 'jevelin'),
					),

					'404_image' => array(
						'label' => esc_html__( 'Image', 'jevelin' ),
						'desc'  => esc_html__( 'Upload a background image for 404 page', 'jevelin' ),
						'type'  => 'upload'
					),
				)
			),
		)
	)
);
