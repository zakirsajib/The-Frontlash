<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'social' => array(
		'title'   => esc_html__( 'Social Media', 'jevelin' ),
		'type'    => 'tab',
		'options' => array(
			'social-box' => array(
				'title'   => esc_html__( 'Social Media Icons', 'jevelin' ),
				'type'    => 'box',
				'options' => array(

					'social_newtab' => array(
						'label' => esc_html__( 'Links In New Tab', 'jevelin' ),
						'desc'  => esc_html__( 'Enable or disable social media link opening in new tab', 'jevelin' ),
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

					'social_youtube' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_html__('YouTube URL', 'jevelin'),
						'desc'  => esc_html__('Enter your custom link to show the YouTube icon.', 'jevelin'),
					),
					
					'social_twitter' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_html__('Twitter URL', 'jevelin'),
						'desc'  => esc_html__('Enter your custom link to show the Twitter icon.', 'jevelin'),
					),

					'social_facebook' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_html__('Facebok URL', 'jevelin'),
						'desc'  => esc_html__('Enter your custom link to show the Facebook icon.', 'jevelin'),
					),

					
					'social_instagram' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_html__('Instagram URL', 'jevelin'),
						'desc'  => esc_html__('Enter your custom link to show the Instagram icon.', 'jevelin'),
					),

					'social_pinterest' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_html__('Pinterest URL', 'jevelin'),
						'desc'  => esc_html__('Enter your custom link to show the Pinterest icon.', 'jevelin'),
					),
				)
			),
		)
	)
);
