<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'post_category' => array(
		'title'   => esc_html__( 'Category', 'jevelin' ),
		'type'    => 'tab',
		'options' => array(
			'header-box' => array(
				'title'   => esc_html__( 'Category Gallery and Video', 'jevelin' ),
				'type'    => 'box',
				'options' => array(
					
					// Cash category
					'cash_cat_settings' => array(
					    'type'  => 'html-full',
					    'value' => '',
					    'label' => false,
					    'html'  => '<h3 class="hndle sh-custom-group-divder"><span>'.esc_html__('CASH Category', 'jevelin').'</span></h3>',
					    'desc'	=> 'Use either Gallery or Video.',
					),
					'cash-cat-gallery' => array(
		                'type'  => 'multi-upload',
		                'label' => esc_html__( 'Gallery', 'jevelin' ),
		                'desc'  => esc_html__( 'Upload images to your gallery', 'jevelin' ),
		                'images_only' => true,
		            ),
				    
				    'cash-cat-video' => array(
		                'type' => 'text',
		                'label' => esc_html__( 'Video URL', 'jevelin' ),
		                'desc' => esc_html__( 'Enter Vimeo or YouTube link', 'jevelin' ),
		            ),
					
					
					// Facts category
					'facts_cat_settings' => array(
					    'type'  => 'html-full',
					    'value' => '',
					    'label' => false,
					    'html'  => '<h3 class="hndle sh-custom-group-divder"><span>'.esc_html__('PROGRESS Category', 'jevelin').'</span></h3>',
					    'desc'	=> 'Use either Gallery or Video.',
					),
					
		            'facts-cat-gallery' => array(
		                'type'  => 'multi-upload',
		                'label' => esc_html__( 'Gallery', 'jevelin' ),
		                'desc'  => esc_html__( 'Upload images to your gallery', 'jevelin' ),
		                'images_only' => true,
		            ),
				    
		            'facts-cat-video' => array(
		                'type' => 'text',
		                'label' => esc_html__( 'Video URL', 'jevelin' ),
		                'desc' => esc_html__( 'Enter Vimeo or YouTube link', 'jevelin' ),
		            ),
					
					// Fashion category
					'fashion_cat_settings' => array(
					    'type'  => 'html-full',
					    'value' => '',
					    'label' => false,
					    'html'  => '<h3 class="hndle sh-custom-group-divder"><span>'.esc_html__('FASHION Category', 'jevelin').'</span></h3>',
					    'desc'	=> 'Use either Gallery or Video.',
					),
			        'fashion-cat-gallery' => array(
		                'type'  => 'multi-upload',
		                'label' => esc_html__( 'Gallery', 'jevelin' ),
		                'desc'  => esc_html__( 'Upload images to your gallery', 'jevelin' ),
		                'images_only' => true,
		            ),
				    'fashion-cat-video' => array(
		                'type' => 'text',
		                'label' => esc_html__( 'Video URL', 'jevelin' ),
		                'desc' => esc_html__( 'Enter Vimeo or YouTube link', 'jevelin' ),
		            ),
				)
			),
		)
	)
);
