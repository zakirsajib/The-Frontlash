<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'titlebar' => array(
		'title'   => esc_html__( 'Titlebar', 'jevelin' ),
		'type'    => 'tab',
		'icon'	  => 'fa fa-phone',
		'options' => array(
			'titlebar-box' => array(
				'title'   => esc_html__( 'Titlebar Settings', 'jevelin' ),
				'type'    => 'box',
				'options' => array(
					
					'titlebar_sample' => array(
					    'type'  => 'html',
					    'value' => 'default hidden value',
					    'label' => __('Titlebar Heading Example', 'fw'),
					    'html'  => '<img src="'.get_template_directory_uri() .'/img/titlebar.jpg" alt="titlebar"/>',
					),
					
					
					'titlebar_title_size' => array(
					    'type'  => 'slider',
					    'value' => 40,
					    'properties' => array(
					        'min' => 12,
					        'max' => 65,
					    ),
					    'label' => esc_html__('Titlebar Heading Size', 'jevelin'),
					    'desc'  => esc_html__('Select heading font size (pixels)', 'jevelin'),
					),
					
					'titlebar_body_sample' => array(
					    'type'  => 'html',
					    'value' => 'default hidden value',
					    'label' => __('Titlebar Body Example', 'fw'),
					    'html'  => '<img src="'.get_template_directory_uri() .'/img/titlebar_body.jpg" alt="titlebar body"/>',
					),
					
					
					'titlebar_body_size' => array(
					    'type'  => 'slider',
					    'value' => 1.5,
					    'properties' => array(
					        'min' => 0,
					        'max' => 5,
					        'step' => 0.1,
					    ),
					    'label' => esc_html__('Titlebar Body Size', 'jevelin'),
					    'desc'  => esc_html__('Select body font size (rem)', 'jevelin'),
					    'help'  => __('<a href="https://www.ninjaunits.com/converters/pixels/pixels-rem/" target="_blank">Pixels to REM converter</a>', '{domain}'),
					),

				)
			),
		)
	)
);
