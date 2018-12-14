<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'id' => array( 'type' => 'unique' ),
	'general' => array(
		'title'   => esc_html__( 'General', 'fw' ),
		'type'    => 'tab',
		'options' => array(
			'text' => array(
				'type'   => 'wp-editor',
				'size'   => 'large',
				'label'  => __( 'Content', 'fw' ),
				'desc'   => __( 'Enter some content for this texblock', 'fw' ),
				'editor_height' => 260
			),
		),
	),
	'styling' => array(
		'title'   => esc_html__( 'Styling', 'fw' ),
		'type'    => 'tab',
		'options' => array(
			'text_class' => array(
				'label' => __('Text Block Class', 'fw'),
				'desc'  => __('Enter custom css class name', 'fw'),
				'type'  => 'text',
			),
			'text_style'	=> array(
				'label' => __('Text Block Style', 'fw'),
				'desc'  => __('Example: For <b>interview</b> or <b>Editorial</b> select <b>Default alignment</b>; <br/>For <b>Feature</b> or <b>Video</b> select <b>Center alignment</b>', 'fw'),
				'help'  => esc_html__( 'Example: For interview or Editorial select Default alignment; For Feature or Video select Center alignment', 'fw' ),
				'type'    => 'select',
				'choices' => array(
					'col-lg-12' => __( 'Default Alignment', 'fw' ),
					'col-lg-6 col-lg-offset-3'	=> __('Center Alignment', 'fw'),
					'col-lg-6' => __( 'Left Alignment', 'fw' ),
					'col-lg-6 col-lg-offset-6' => __( 'Right Alignment', 'fw' ),
				)
			),
			'text_size'   => array(
				'type'  => 'text',
				'label' => esc_html__( 'Font Size', 'fw' ),
				'desc'  => __( 'Enter title size (with <b>px</b>)', 'fw' ),
				'help'  => esc_html__( 'Example: 16px;', 'fw' ), 
			),
			'text_weight'   => array(
				'label' => esc_html__( 'Font Weight', 'fw' ),
				'help'  => esc_html__( 'Example: 400;', 'fw' ), 
				'type'    => 'select',
				'value' => '400',
				'choices' => array(
					'400' => __( 'Regular', 'fw' ),
					'600' => __( 'Medium', 'fw' ),
					'700' => __( 'Bold', 'fw' ),
				)
			),
			'line_height'   => array(
				'type'  => 'text',
				'label' => esc_html__( 'Line height', 'fw' ),
				'desc'  => __( 'Enter line height (with <b>px</b>)', 'fw' ),
				'help'  => esc_html__( 'Example: 30px;', 'fw' ), 
			),
		
			'text_color' => array(
			    'label' => esc_html__('Text Color', 'fw'),
			    'desc' => esc_html__( 'Select text color', 'fw' ),
			    'type'  => 'color-picker',
			),
		
			'margin'   => array(
				'label' => esc_html__( 'Margin', 'fw' ),
				'desc'  => __( 'Enter your custom margin (<b>top right bottom left</b>)', 'fw' ),
				'type'  => 'text',
				'value' => '',
				'help'  => esc_html__( 'Example: 0px 0px 15px 0px', 'fw' ), 
			),
			'padding'   => array(
				'label' => esc_html__( 'Padding', 'fw' ),
				'desc'  => __( 'Enter your custom padding (<b>top right bottom left</b>)', 'fw' ),
				'type'  => 'text',
				'value' => '',
				'help'  => esc_html__( 'Example: 0px 0px 15px 0px', 'fw' ), 
			),
			'background_color' => array(
				'label' => __('Background Color', 'fw'),
				'desc'  => __('Please select the background color', 'fw'),
				'type'  => 'color-picker',
			),
		),
	),
);
