<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'blog' => array(
		'title'	=> esc_html__( 'Story', 'jevelin' ),
		'type'	=> 'tab',
		'icon'	=> 'fa fa-phone',
		'options' => array(
			'blog-box' => array(
				'title'   => esc_html__( 'Story / Article Settings', 'jevelin' ),
				'type'    => 'box',
				'options' => array(
					'post_elements' => array(
					    'type'  => 'checkboxes',
					    'value' => array(
					        'share' => true,
					        'prev_next' => true,
					        'newsletter' => true,
					        'comments' => true,
					    ),
					    'label' => esc_html__('Story Elements', 'jevelin'),
					    'desc'  => esc_html__('Select elements you want to see in story page', 'jevelin'),
					    'choices' => array(
					        'share' => esc_html__('Share', 'jevelin'),
					        'prev_next' => esc_html__('Prev/next links', 'jevelin'),
					        'newsletter' => esc_html__('Newsletter', 'jevelin'),
					        'comments' => esc_html__('Comments', 'jevelin'),
					    ),
					    'inline' => false,
					),
					
					'shop_the_story' => array(
					    'type'  => 'html-full',
					    'value' => '',
					    'label' => false,
					    'html'  => '<h3 class="hndle sh-custom-group-divder"><span>'.esc_html__('Shop the Story', 'jevelin').'</span></h3>',
					),
					
					'shop_display_choice' => array(
						'type'  => 'radio',
					    'value' => 'story_page',
					    'label' => __('Placement', 'jevelin'),
					    'desc'  => esc_html__('Choose where you want to show Shop', 'jevelin'),
					    'choices' => array(
					        'home_page' => __('Home page', 'jevelin'),
					        'story_page' => __('Story page', 'jevelin'),
					        'both_h_s' => __('Both in Home and Story page', 'jevelin'),
					        'shop_off' => __('Off', 'jevelin'),
					    ),
					    'inline' => false,
					),
					
					'related_posts' => array(
					    'type'  => 'html-full',
					    'value' => '',
					    'label' => false,
					    'html'  => '<h3 class="hndle sh-custom-group-divder"><span>'.esc_html__('Related Story', 'jevelin').'</span></h3>',
					),
					
					'related_posts_display' => array(
						'type' => 'switch',
						'label' => esc_html__( 'Related Story', 'jevelin' ),
						'desc' => esc_html__( 'Enable or disable related story', 'jevelin' ),
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
					
					
					'related_posts_title' => array(
						'type'  => 'text',
						'value' => 'You Might Also Like',
						'label' => esc_html__('Related story title', 'jevelin'),
						'desc'  => esc_html__('Enter Related story title', 'jevelin'),
					),

				)
			),
		)
	)
);
