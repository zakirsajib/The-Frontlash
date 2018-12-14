<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'footer' => array(
		'title'   => esc_html__( 'Footer', 'jevelin' ),
		'type'    => 'tab',
		'icon'	  => 'fa fa-phone',
		'options' => array(
			'footer-box' => array(
				'title'   => esc_html__( 'Footer Settings', 'jevelin' ),
				'type'    => 'box',
				'options' => array(
										
					'footer_newsletter' => array(
						'type' => 'switch',
						'label' => esc_html__( 'MailChimp Newsletter form', 'jevelin' ),
						'desc' => esc_html__( 'Enable or disable newsletter form', 'jevelin' ),
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
					
					'footer_social' => array(
						'type' => 'switch',
						'label' => esc_html__( 'Social Icons', 'jevelin' ),
						'desc' => esc_html__( 'Enable or disable social icons', 'jevelin' ),
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
					'footer_social_title' => array(
						'type'  => 'text',
						'value' => 'Stay In Touch',
						'label' => esc_html__('Title', 'jevelin'),
					),

					'copyright_text' => array(
						'type'   => 'wp-editor',
						'teeny'  => true,
						'reinit' => true,
						'size'   => 'large',
						'label'  => esc_html__( 'Copyright Text', 'jevelin' ),
						'desc'   => esc_html__( 'Enter some description about copyright in your website', 'jevelin' ).'
							<script>jQuery(document).ready(function ($) { setTimeout(function(){ $("#textarea_dynamic_id-tmce").trigger("click"); }, 1); });</script>',
						'editor_height' => 110,
					),
				)
			),
		)
	)
);
