<?php if (!defined('FW')) {
	die('Forbidden');
}

$options = array(
	'section_id' => array(
		'label' => __('Section ID', 'fw'),
		'desc'  => __('CSS ID name', 'fw'),
		'type'  => 'text',
	),
	'section_style'	=> array(
		'label' => __('Section Style', 'fw'),
		'desc'  => __('Section padding: Top and Bottom', 'fw'),
		'type'    => 'select',
		'choices' => array(
			'5rem 0'	=> __('Huge Padding', 'fw'),
			'4rem 0' => __( 'Medium Padding', 'fw' ),
			'2rem 0' => __( 'Small Padding', 'fw' ),
			'3rem 0' => __( 'Default Padding', 'fw' ),
			'0rem' => __( 'No Padding', 'fw' ),
		)
	),
	'margin'   => array(
		'label' => esc_html__( 'Margin', 'fw' ),
		'desc'  => __( 'Enter your custom margin (<b>top right bottom left</b>)', 'fw' ),
		'type'  => 'text',
		'value' => '',
		'help'  => esc_html__( 'Example: 0px 0px 15px 0px', 'fw' ), 
	),
	'is_fullwidth' => array(
		'label'        => __('Full Width', 'fw'),
		'type'         => 'switch',
	),
	'background_color' => array(
		'label' => __('Background Color', 'fw'),
		'desc'  => __('Please select the background color', 'fw'),
		'type'  => 'color-picker',
	),
	'background_image' => array(
		'label'   => __('Background Image', 'fw'),
		'desc'    => __('Please select the background image', 'fw'),
		'type'    => 'background-image',
		'choices' => array(//	in future may will set predefined images
		)
	),
	'background_position' => array(
		'label' => __('Background Position', 'fw'),
		'desc'  => __('Background Position. For parallax image select center center', 'fw'),
		'type'  => 'select',
		'choices'	=> array(
			'' => '',
			'center center'	=>'Center Center',
			'center bottom'	=>'Center Bottom',
			'center top'	=>'Center Top',
			'left center'	=>'Left Center',
			'left bottom'	=>'Left Bottom',
			'left top'	=>'Left Top',
			'right center'	=>'Right Center',
			'right bottom'	=>'Right Bottom',
			'right top'	=>'Right Top',
			'50% 35%'	=>'Custom'
		)
	),
	'background_repeat' => array(
		'label' => __('Background Repeat', 'fw'),
		'desc'  => __('Background Repeat', 'fw'),
		'type'  => 'select',
		'choices'	=> array(
			'' => '',
			'repeat'	=>'Repeat',
			'no-repeat'	=>'No Repeat',
			'repeat-x'	=>'Repeat X',
			'repeat-y'	=>'Repeat Y',
		)
	),
	'background_size' => array(
		'label' => __('Background Size', 'fw'),
		'desc'  => __('Background Size', 'fw'),
		'type'  => 'select',
		'choices'	=> array(
			'' => '',
			'auto'	=>'Auto',
			'contain'	=>'Contain',
			'cover'	=>'Cover',
		)
	),
	'background_attachment' => array(
		'label' => __('Background Attachment', 'fw'),
		'desc'  => __('Background Attachment', 'fw'),
		'type'  => 'select',
		'choices'	=> array(
			'' => '',
			'fixed'	=>'Fixed',
			'scroll'	=>'Scroll',
		)
	),
	'background_height' => array(
		'label' => __('Background Height', 'fw'),
		'desc'  => __('Background Height in % or px or vh', 'fw'),
		'type'  => 'text',
	),	
);
