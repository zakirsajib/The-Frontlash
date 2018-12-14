<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	    
    'shop_page' => array(
		'title'   => esc_html__( 'Shop the Story', 'jevelin' ),
		'type'    => 'box',
		'options' => array(
			'page-shop-text' => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__('Title', 'jevelin'),
				'desc'  => esc_html__('Enter Shop Heading', 'jevelin'),
			),
			
			'page-shop-gallery' => array(
                'type'  => 'multi-upload',
                'label' => esc_html__( 'Shop Gallery', 'jevelin' ),
                'desc'  => esc_html__( 'Upload images', 'jevelin' ),
                'images_only' => true,
            ),
		)
	),
    
    
    'page-format-gallery' => array(
        'type'     => 'box',
        'title'    => esc_html__('Gallery Settings', 'jevelin'),
        'priority' => 'high',
        'options'  => array(
            'page-gallery' => array(
                'type'  => 'multi-upload',
                'label' => esc_html__( 'Gallery', 'jevelin' ),
                'desc'  => esc_html__( 'Upload images to your gallery', 'jevelin' ),
                'images_only' => true,
            ),
            'image-orientation'=> array(
			    'type'  => 'radio',
			    'value' => 'landscape-orientation',
			    'label' => esc_html__('Image Orientation', 'jevelin'),
			    'desc'  => esc_html__('Choose image orientation style', 'jevelin'),
			    'choices' => array(
				    'landscape-orientation' => esc_html__( 'Landscape', 'jevelin' ),
			        'portrait-orientation' => esc_html__( 'Portrait', 'jevelin' ),
			        'no-gallery' => esc_html__( 'No Gallery', 'jevelin' ),
			    ),
			),
        )
    ),


    'page-format-video' => array(
        'type'     => 'box',
        'title'    => esc_html__('Video Settings', 'jevelin'),
        'priority' => 'high',
        'options'  => array(
            'page-video' => array(
                'type' => 'textarea',
                'label' => esc_html__( 'Video URL', 'jevelin' ),
                'desc' => strip_tags("Enter Vimeo or YouTube iframe code.<br>YouTube won't play automatically. You need to set <b>?rel=0&autoplay=1</b>.<br><a href='https://support.bigcommerce.com/articles/Public/How-do-I-make-a-YouTube-video-autoplay' target='_blank'>Click here to see how to add autoplay in YouTube video.</a>","<b><a><br>"),
                'help'  => __('Paste iframe code.', 'jevelin'),
            ),
        )
    ),
    
);
