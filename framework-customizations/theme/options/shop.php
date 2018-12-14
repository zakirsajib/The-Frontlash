<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'shop_editorial' => array(
		'title'   => esc_html__( 'Shop the Story', 'jevelin' ),
		'type'    => 'tab',
		'options' => array(
			'header-box' => array(
				'title'   => esc_html__( 'Shop the Story Gallery', 'jevelin' ),
				'type'    => 'box',
				'options' => array(
					'shop-gallery' => array(
		                'type'  => 'multi-upload',
		                'label' => esc_html__( 'Gallery', 'jevelin' ),
		                'desc'  => esc_html__( 'Upload images', 'jevelin' ),
		                'images_only' => true,
		            ),
		            'shop-text' => array(
						'type'  => 'text',
						'value' => '',
						'label' => esc_html__('Title', 'jevelin'),
						'desc'  => esc_html__('Enter Shop Heading', 'jevelin'),
					),
				)
			),
		)
	)
);
