<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$favicon = array(
    'type'  => 'hidden',
    'value' => 'outdated',
);

if ( !function_exists( 'has_site_icon' ) || ! has_site_icon() ) :
	$favicon = array(
		'label' => esc_html__( 'Favicon', 'jevelin' ),
		'desc'  => esc_html__( 'Upload a 32px x 32px (ico/png) image', 'jevelin' ),
		'type'  => 'upload'
	);
endif;

$google_api_key = 'https://developers.google.com/maps/documentation/javascript/get-api-key';

$options = array(
	'general' => array(
		'title'   => esc_html__( 'General', 'jevelin' ),
		'type'    => 'tab',
		'options' => array(
			'general-box' => array(
				'title'   => esc_html__( 'General Settings', 'jevelin' ),
				'type'    => 'box',
				'options' => array(

					'favicon' => $favicon,

					'smooth-scrooling' => array(
						'label' => esc_html__( 'Smooth Scrooling', 'jevelin' ),
						'desc'  => esc_html__( 'Enable or disable smooth scrolling for webkit browers like Chrome', 'jevelin' ),
						'type'  => 'switch',
						'value' => false,
						'left-choice' => array(
							'value' => false,
							'label' => esc_html__('Off', 'jevelin'),
						),
						'right-choice' => array(
							'value' => true,
							'label' => esc_html__('On', 'jevelin'),
						),
					),

					

					'back_to_top_button' => array(
					    'label' => esc_html__('Back To Top Button', 'jevelin'),
						'desc'  => esc_html__( 'Enable or disable back to top button', 'jevelin' ),
						'type'  => 'switch',
						'value' => true,
						'left-choice' => array(
							'value' => false,
							'label' => esc_html__('Off', 'jevelin'),
						),
						'right-choice' => array(
							'value' => true,
							'label' => esc_html__('On', 'jevelin'),
						),
					),
					
					
					'instagram_id' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_html__('Instagram ID', 'jevelin'),
						'desc'  => esc_html__('Enter Instagram ID', 'jevelin'),
					),

				)
			),
		)
	)
);
