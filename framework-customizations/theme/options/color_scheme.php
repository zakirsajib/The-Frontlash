<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'color' => array(
		'title'   => esc_html__( 'Color Palette', 'jevelin' ),
		'type'    => 'tab',
		'options' => array(
			'color-styling-box' => array(
				'title'   => esc_html__( 'Color Palette', 'jevelin' ),
				'type'    => 'box',
				'options' => array(
					'home_styling_body' => array(
					    'type'  => 'html-full',
					    'value' => '',
					    'label' => false,
					    'html'  => '<h3 class="hndle sh-custom-group-divder"><span>'.esc_html__('Home Page', 'jevelin').'</span></h3>',
					),
					'home_background_color' => array(
					    'type'  => 'rgba-color-picker',
					    'value' => '#FFDEC3',
					    'label' => esc_html__('Background Color', 'jevelin'),
					    'desc'  => esc_html__('Select background color', 'jevelin'),
					),
					
					'home_accent_color' => array(
					    'type'  => 'rgba-color-picker',
					    'value' => '#F7522F',
					    'label' => esc_html__('Accent Color', 'jevelin'),
					    'desc'  => esc_html__('Select page accent color', 'jevelin'),
					),

					'cash_styling_header' => array(
					    'type'  => 'html-full',
					    'value' => '',
					    'label' => false,
					    'html'  => '<h3 class="hndle sh-custom-group-divder"><span>'.esc_html__('CASH Category', 'jevelin').'</span></h3>',
					),

					'cash_background_color' => array(
					    'type'  => 'rgba-color-picker',
					    'value' => '#EBDBF5',
					    'label' => esc_html__('Background Color', 'jevelin'),
					    'desc'  => esc_html__('Select background color', 'jevelin'),
					),

					'cash_accent_color' => array(
					    'type'  => 'rgba-color-picker',
					    'value' => '#925640',
					    'label' => esc_html__('Text Color', 'jevelin'),
					    'desc'  => esc_html__('Select text color', 'jevelin'),
					),
					
					'facts_styling_header' => array(
					    'type'  => 'html-full',
					    'value' => '',
					    'label' => false,
					    'html'  => '<h3 class="hndle sh-custom-group-divder"><span>'.esc_html__('PROGRESS Category', 'jevelin').'</span></h3>',
					),

					'facts_background_color' => array(
					    'type'  => 'rgba-color-picker',
					    'value' => '#DCF0F9',
					    'label' => esc_html__('Background Color', 'jevelin'),
					    'desc'  => esc_html__('Select background color', 'jevelin'),
					),

					'facts_accent_color' => array(
					    'type'  => 'rgba-color-picker',
					    'value' => '#FEAE02',
					    'label' => esc_html__('Text Color', 'jevelin'),
					    'desc'  => esc_html__('Select text color', 'jevelin'),
					),
					
					'fashion_styling_header' => array(
					    'type'  => 'html-full',
					    'value' => '',
					    'label' => false,
					    'html'  => '<h3 class="hndle sh-custom-group-divder"><span>'.esc_html__('FASHION Category', 'jevelin').'</span></h3>',
					),

					'fashion_background_color' => array(
					    'type'  => 'rgba-color-picker',
					    'value' => '#F5DDDF',
					    'label' => esc_html__('Background Color', 'jevelin'),
					    'desc'  => esc_html__('Select background color', 'jevelin'),
					),

					'fashion_accent_color' => array(
					    'type'  => 'rgba-color-picker',
					    'value' => '#A5B039',
					    'label' => esc_html__('Text Color', 'jevelin'),
					    'desc'  => esc_html__('Select text color', 'jevelin'),
					),
				)
			),
		)
	)
);
