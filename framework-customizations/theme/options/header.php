<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'header' => array(
		'title'   => esc_html__( 'Header', 'jevelin' ),
		'type'    => 'tab',
		'icon'	  => 'fa fa-phone',
		'options' => array(
			'header-box' => array(
				'title'   => esc_html__( 'Header Logos', 'jevelin' ),
				'type'    => 'box',
				'options' => array(
					'header_logo_size' => array(
					    'type'  => 'slider',
					    'value' => 380,
					    'properties' => array(
					        'min' => 50,
					        'max' => 500,
					    ),
					    'label' => esc_html__('Logo Size', 'jevelin'),
					    'desc'  => esc_html__('Default width: 380px.', 'jevelin'),
					),
					
					'logo' => array(
						'label' => esc_html__( 'Home Page Logo', 'jevelin' ),
						'desc'  => esc_html__( 'Upload a logo image', 'jevelin' ),
						'type'  => 'upload',
						'images_only' => true,
					),

					'logo_sticky' => array(
						'label' => esc_html__( 'Mobile Logo', 'jevelin' ),
						'desc'  => esc_html__( 'Upload a mobile version logo image', 'jevelin' ),
						'type'  => 'upload',
						'images_only' => true,
					),
					// Cash logo
					'cash_header_settings' => array(
					    'type'  => 'html-full',
					    'value' => '',
					    'label' => false,
					    'html'  => '<h3 class="hndle sh-custom-group-divder"><span>'.esc_html__('CASH Category', 'jevelin').'</span></h3>',
					),
					
					'cash_logo' => array(
						'label' => esc_html__( 'CASH category page Logo', 'jevelin' ),
						'desc'  => esc_html__( 'Upload a logo image', 'jevelin' ),
						'type'  => 'upload',
						'images_only' => true,
					),

					'cash_logo_sticky' => array(
						'label' => esc_html__( 'Mobile Logo', 'jevelin' ),
						'desc'  => esc_html__( 'Upload a mobile version logo image', 'jevelin' ),
						'type'  => 'upload',
						'images_only' => true,
					),
					// Facts logo
					'facts_header_settings' => array(
					    'type'  => 'html-full',
					    'value' => '',
					    'label' => false,
					    'html'  => '<h3 class="hndle sh-custom-group-divder"><span>'.esc_html__('PROGRESS Category', 'jevelin').'</span></h3>',
					),
					
					'facts_logo' => array(
						'label' => esc_html__( 'Progress category page Logo', 'jevelin' ),
						'desc'  => esc_html__( 'Upload a logo image', 'jevelin' ),
						'type'  => 'upload',
						'images_only' => true,
					),

					'facts_logo_sticky' => array(
						'label' => esc_html__( 'Mobile Logo', 'jevelin' ),
						'desc'  => esc_html__( 'Upload a mobile version logo image', 'jevelin' ),
						'type'  => 'upload',
						'images_only' => true,
					),
					// Fashion Logo
					'fashion_header_settings' => array(
					    'type'  => 'html-full',
					    'value' => '',
					    'label' => false,
					    'html'  => '<h3 class="hndle sh-custom-group-divder"><span>'.esc_html__('FASHION Category', 'jevelin').'</span></h3>',
					),
					
					'fashion_logo' => array(
						'label' => esc_html__( 'FASHION category page Logo', 'jevelin' ),
						'desc'  => esc_html__( 'Upload a logo image', 'jevelin' ),
						'type'  => 'upload',
						'images_only' => true,
					),

					'fashion_logo_sticky' => array(
						'label' => esc_html__( 'Mobile Logo', 'jevelin' ),
						'desc'  => esc_html__( 'Upload a mobile version logo image', 'jevelin' ),
						'type'  => 'upload',
						'images_only' => true,
					),
				)
			),
		)
	)
);
