<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	    
    'header-style' => array(
	    'type'	=> 'box',
        'title'	=> esc_html__('Header Parallax', 'jevelin'),
        'priority' => 'high',
        'options' => array(
	        'header-style-parallax'	=> array(
		        'type' => 'radio',
		        'value' => 'no',
		        'label' => esc_html__( 'Parallax', 'jevelin' ),
		        'desc' => __( '', 'jevelin' ),
		        'choices'	=> array(
			        'yes' => esc_html__('Yes', 'jevelin'),
					'no' => esc_html__('No', 'jevelin'),
		        ),
			),
        ),
    ),
    
    
    
    'post-format-gallery' => array(
        'type'     => 'box',
        'title'    => esc_html__('Gallery Settings', 'jevelin'),
        'priority' => 'high',
        'options'  => array(
            'post-gallery' => array(
                'type'  => 'multi-upload',
                'label' => esc_html__( 'Gallery', 'jevelin' ),
                'desc'  => esc_html__( 'Upload images to your gallery', 'jevelin' ),
                'images_only' => true,
            ),
            'post-image-orientation'=> array(
			    'type'  => 'radio',
			    'value' => 'no-gallery-post',
			    'label' => esc_html__('Image Orientation', 'jevelin'),
			    'desc'  => esc_html__('Choose image orientation style', 'jevelin'),
			    'choices' => array(
				    'landscape-orientation' => esc_html__( 'Landscape', 'jevelin' ),
			        'portrait-orientation' => esc_html__( 'Portrait', 'jevelin' ),
			        'no-gallery-post' => esc_html__( 'No Gallery', 'jevelin' )
			    ),
			),
        ),
        
    ),


    'post-format-video' => array(
        'type'     => 'box',
        'title'    => esc_html__('Video Settings', 'jevelin'),
        'priority' => 'high',
        'options'  => array(
            'post-video' => array(
                'type' => 'textarea',
                'label' => esc_html__( 'Video iframe code', 'jevelin' ),
                'desc' => strip_tags("Enter Vimeo or YouTube iframe code.<br>YouTube won't play automatically. You need to set <b>?rel=0&autoplay=1</b>.<br><a href='https://support.bigcommerce.com/articles/Public/How-do-I-make-a-YouTube-video-autoplay' target='_blank'>Click here to see how to add autoplay in YouTube video.</a>","<b><a><br>"),
                'help'  => __('Paste iframe code.', 'jevelin'),
            ),
            'post-video-thumbnail' => array(
				'label' => esc_html__( 'Video Thumbnail', 'jevelin' ),
				'desc'  => esc_html__( 'Upload a video thumbnail', 'jevelin' ),
				'type'  => 'upload',
				'images_only' => true,
			),
        )
    ),
    
    
    
    
    'post-alignment' => array(
	    'type'	=> 'box',
        'title'	=> esc_html__('Post Meta Alignment', 'jevelin'),
        'priority' => 'high',
        'options' => array(
	        'post-meta-alignment'	=> array(
		        'type' => 'radio',
		        'label' => esc_html__( 'Alignment', 'jevelin' ),
		        'desc' => __( 'Align <b>Credits</b>, <b>Social media</b> and <b>tags</b>', 'jevelin' ),
		        'choices'	=> array(
			        'center' => esc_html__('Center', 'jevelin'),
					'right' => esc_html__('Right', 'jevelin'),
		        ),
			),
        ),
    ),
    
    'shop_post' => array(
		'title'   => esc_html__( 'Shop the Story', 'jevelin' ),
		'type'    => 'box',
		'options' => array(
			'shop-text' => array(
				'type'  => 'text',
				'value' => '',
				'label' => esc_html__('Title', 'jevelin'),
				'desc'  => esc_html__('Enter Shop Heading', 'jevelin'),
			),
			
			'shop-gallery' => array(
                'type'  => 'multi-upload',
                'label' => esc_html__( 'Shop Gallery', 'jevelin' ),
                'desc'  => esc_html__( 'Upload images', 'jevelin' ),
                'images_only' => true,
            ),
		)
	)
);
