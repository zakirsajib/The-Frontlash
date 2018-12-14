<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}


$options = array(
	'home' => array(
		'title'   => esc_html__( 'Home', 'jevelin' ),
		'type'    => 'tab',
		'options' => array(
			'home-box' => array(
				'title'   => esc_html__( 'Home Story', 'jevelin' ),
				'type'    => 'box',
				'options' => array(
					'home_story_sorting' => array(
					    'type'  => 'radio',
					    'value' => 'editorial',
					    'label' => __('First story type', 'jevelin'),
					    'desc'  => __('Story must be STICKY first.', 'jevelin'),
					    'choices' => array(
					        'editorial' => __('Editorial', 'jevelin'),
					        'feature' => __('Feature', 'jevelin'),
					        'interview' => __('Interview', 'jevelin'),
					        'video' => __('Video', 'jevelin'),
					    ),
					    // Display choices inline instead of list
					    'inline' => false,
					),

				)
			),
		)
	)
);
