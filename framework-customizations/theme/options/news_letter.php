<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}
$options = array(
	'news-letter' => array(
		'title'   => esc_html__( 'Newsletter', 'jevelin' ),
		'type'    => 'tab',
		'options' => array(
			'news-letter-box' => array(
				'title'   => esc_html__( 'Newsletter', 'jevelin' ),
				'type'    => 'box',
				'options' => array(
					'newsletter_heading' => array(
						'type'  => 'text',
						'label' => esc_html__('Title', 'jevelin'),
						'desc'  => esc_html__('', 'jevelin'),
					),
					'newsletter_para_1' => array(
					    'type'  => 'text',
					    'label' => esc_html__('Sentence 1', 'jevelin'),
					    'desc'  => esc_html__('', 'jevelin'),
					),
					'newsletter_para_2' => array(
					    'type'  => 'text',
					    'label' => esc_html__('Sentence 2', 'jevelin'),
					    'desc'  => esc_html__('', 'jevelin'),
					),
					'mobile_newsletter_heading' => array(
						'type'  => 'text',
						'label' => esc_html__('Mobile Newsletter Title', 'jevelin')
					),
				),
			),
		)
	)
);
