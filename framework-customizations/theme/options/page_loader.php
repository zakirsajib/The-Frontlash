<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'page_loader' => array(
		'title'   => esc_html__( 'Page Loader', 'jevelin' ),
		'type'    => 'tab',
		'icon'	  => 'fa fa-phone',
		'options' => array(
			'lightbox-box' => array(
				'title'   => esc_html__( 'Page Loader Settings', 'jevelin' ),
				'type'    => 'box',
				'options' => array(

					'page_loader' => array(
						'type' => 'switch',
						'label' => esc_html__( 'Page Loader', 'jevelin' ),
						'desc' => esc_html__( 'Choose page loader status', 'jevelin' ),
						'value' => 'on',
						'left-choice' => array(
							'value' => 'off',
							'label' => esc_html__('Off', 'jevelin'),
						),
						'right-choice' => array(
							'value' => 'on',
							'label' => esc_html__('On', 'jevelin'),
						),
					),
					
					'page_loader_style' => array(
					    'type'  => 'radio',
					    'value' => 'cube-folding',
					    'label' => esc_html__('Page Loader Style', 'jevelin'),
					    'desc'  => esc_html__('Choose page loader style', 'jevelin'),
					    'choices' => array(
						    'default-loader' => esc_html__( 'Default Loader', 'jevelin' ),
					        'cube-folding' => esc_html__( 'Cube Folding', 'jevelin' ),
					        'frontlash-loader' => esc_html__( 'Frontlash', 'jevelin' ),
					    ),
					),
				)
			),
		)
	)
);
