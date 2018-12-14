<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'styling' => array(
		'title'   => esc_html__( 'Styling', 'jevelin' ),
		'type'    => 'tab',
		'options' => array(
			'styling-box' => array(
				'title'   => esc_html__( 'Body', 'jevelin' ),
				'type'    => 'box',
				'options' => array(
					
					'body_font_select' => array(
					    'type'  => 'multi-picker',
						'label' => false,
						'desc'  => false,
					    'value' => array(
					        'font_select' => 'google_font',
					    ),
					    'picker' => array(
					        'font_select' => array(
					            'label'   => esc_html__('Select Font Source', 'jevelin'),
					            'type'    => 'radio',
					            'choices' => array(
					                'google_font' => esc_html__('Google', 'jevelin'),
					                'frontlash_font' => esc_html__('Frontlash', 'jevelin'),
					            ),
					        )
					    ),
					    'choices' => array(
					        'google_font' => array(
						        'styling_body' => array(
										'type'  => 'typography-v2',
										'value'      => array(
									        'family'    => 'Source Serif Pro',
									        'subset'    => 'latin',
									        'variation' => 'regular',
									        'size'      => 14,
										),
										'components' => array(
									        'family'         => true,
									        'size'           => true,
									        'line-height'    => false,
									        'letter-spacing' => false,
									        'color'          => false
										),
										'label' => esc_html__('Body Font', 'jevelin'),
										'desc'  => esc_html__('Choose default body Google font', 'jevelin'),
									),
				
									'google_fonts_subset' => array(
										'type'  => 'checkboxes',
										'value' => array(
											'latin' => true,
										),
										'label' => esc_html__('Choose the character sets', 'jevelin'),
										'desc'  => esc_html__('Select the character sets you want to use for fonts (will be used only if available)', 'jevelin'),
										'choices' => array(
											'greek' => esc_html__('Greek ', 'jevelin'),
											'greek-ext' => esc_html__('Greek Extended', 'jevelin'),
											'latin' => esc_html__('Latin', 'jevelin'),
											'vietnamese' => esc_html__('Vietnamese', 'jevelin'),
											'cyrillic-ext' => esc_html__('Cyrillic Extended', 'jevelin'),
											'latin-ext' => esc_html__('Latin Extended', 'jevelin'),
											'cyrillic' => esc_html__('Cyrillic ', 'jevelin'),
										),
										'inline' => true,
									),
				
									'google_fonts_mini' => array(
										'label' => esc_html__( 'Only main font weights', 'jevelin' ),
										'desc'  => esc_html__( 'Improve page speed by loading only main font weights', 'jevelin' ),
										'type'  => 'switch',
										'value' => true,
										'left-choice' => array(
											'value' => false,
											'label' => esc_html__('Off', 'jevelin'),
										),
										'right-choice' => array(
											'value' => true,
											'label' => esc_html__('On', 'jevelin'),
										),
									),
					        ),
					        'frontlash_font' => array(
								'frontlash_body_font' => array(
									'type'  => 'select',
									'label' => esc_html__('Frontlash Body Font Family', 'jevelin'),
									'choices' => array(
										'Lyon Text Web' => esc_html__( 'LyonText Regular', 'jevelin' ),
										'Lyon Text Web Bold' => esc_html__( 'LyonText Bold', 'jevelin' ),
										'LyonDisplay-Medium' => esc_html__( 'Lyon Display Medium', 'jevelin' ),
										'source_serif_proregular' => esc_html__( 'Source Serif Pro Regular', 'jevelin' ),
										'source_serif_probold' => esc_html__( 'Source Serif Pro Bold', 'jevelin' ),
									),
									'value'	  => 'source_serif_proregular',
						        ),
						        
						        
						        'frontlash_body_bold_font' => array(
									'type'  => 'select',
									'label' => esc_html__('Frontlash Body BOLD Font Family', 'jevelin'),
									'choices' => array(
										'agipobold' => esc_html__( 'Agipo Bold', 'jevelin' ),
										'Lyon Text Web Bold' => esc_html__( 'LyonText Bold', 'jevelin' ),
										'source_serif_probold' => esc_html__( 'Source Serif Pro Bold', 'jevelin' ),
									),
									'value'	  => 'agipobold',
						        ),

						        
						        
					        ),
					    ),
					),
					
					
					
					
					
					
					


					'title_styling_headings' => array(
					    'type'  => 'html-full',
					    'value' => '',
					    'label' => false,
					    'html'  => '<h3 class="hndle sh-custom-group-divder"><span>'.esc_html__('Headings', 'jevelin').'</span></h3>',
					),

					
					
					
					'headings_font_select_one' => array(
					    'type'  => 'multi-picker',
						'label' => false,
						'desc'  => false,
					    'value' => array(
					        'headings_font_select' => 'headings_google_font',
					    ),
					    'picker' => array(
					        'headings_font_select' => array(
					            'label'   => esc_html__('Select Font Source', 'jevelin'),
					            'type'    => 'radio',
					            'choices' => array(
					                'headings_google_font' => esc_html__('Google', 'jevelin'),
					                'headings_frontlash_font' => esc_html__('Frontlash', 'jevelin'),
					            ),
					        )
					    ),
					    'choices' => array(
					        'headings_google_font' => array(
						        'styling_headings' => array(
									'type'  => 'typography-v2',
									'value'      => array(
								        'family'    => 'Roboto',
								        'subset'    => 'latin',
								        'variation' => '700',
									),
									'components' => array(
								        'family'         => true,
								        'size'           => false,
								        'line-height'    => false,
								        'letter-spacing' => false,
								        'color'          => false
									),
									'attr'  => array( 'class' => 'custom-class', 'data-foo' => 'bar' ),
									'label' => esc_html__('Headings', 'jevelin'),
								    'desc'  => esc_html__('Choose default Google font for all headings', 'jevelin'),
								),				
					        ),
					        'headings_frontlash_font' => array(
								'main_headings_frontlash_font' => array(
									'type'  => 'select',
									'label' => esc_html__('Frontlash Heading Font Family', 'jevelin'),
									'choices' => array(
										'agiporegular' => esc_html__( 'Agipo Regular', 'jevelin' ),
										'agipobold' => esc_html__( 'Agipo Bold', 'jevelin' ),
										'robotoblack' => esc_html__( 'Roboto Black', 'jevelin' ),
										'robotoblack_italic' => esc_html__( 'Roboto Black Italic', 'jevelin' ),
										'robotobold' => esc_html__( 'Roboto Bold', 'jevelin' ),
										'robotobold_italic' => esc_html__( 'Roboto Bold Italic', 'jevelin' ),
										'robotoitalic' => esc_html__( 'Roboto Italic', 'jevelin' ),
										'robotolight' => esc_html__( 'Roboto Light', 'jevelin' ),
										'robotolight_italic' => esc_html__( 'Roboto Light Italic', 'jevelin' ),
										'robotomedium' => esc_html__( 'Roboto Medium', 'jevelin' ),
										'robotomedium_italic' => esc_html__( 'Roboto Medium Italic', 'jevelin' ),
										'robotoregular' => esc_html__( 'Roboto Regular', 'jevelin' ),
										'robotothin' => esc_html__( 'Roboto Thin', 'jevelin' ),
										'robotothin_italic' => esc_html__( 'Roboto Thin Italic', 'jevelin' ),
									),
									'value'	  => 'robotoregular',
						        ),
						        
					        ),
					    ),
					),
					
					
					
					

					'styling_h1' => array(
					    'type'  => 'slider',
					    'value' => 42,
					    'properties' => array(
					        'min' => 1,
					        'max' => 65,
					    ),
					    'label' => esc_html__('Heading 1', 'jevelin'),
					    'desc'  => esc_html__('Select heading 1 font size (rem)', 'jevelin'),
					),

					'styling_h2' => array(
					    'type'  => 'slider',
					    'value' => 38,
					    'properties' => array(
					        'min' => 5,
					        'max' => 65,
					    ),
					    'label' => esc_html__('Heading 2', 'jevelin'),
					    'desc'  => esc_html__('Select heading 2 font size (pixels)', 'jevelin'),
					),

					'styling_h3' => array(
					    'type'  => 'slider',
					    'value' => 24,
					    'properties' => array(
					        'min' => 5,
					        'max' => 65,
					    ),
					    'label' => esc_html__('Heading 3', 'jevelin'),
					    'desc'  => esc_html__('Select heading 3 font size (pixels)', 'jevelin'),
					),

					'styling_h4' => array(
					    'type'  => 'slider',
					    'value' => 20,
					    'properties' => array(
					        'min' => 5,
					        'max' => 65,
					    ),
					    'label' => esc_html__('Heading 4', 'jevelin'),
					    'desc'  => esc_html__('Select heading 4 font size (pixels)', 'jevelin'),
					),

					'styling_h5' => array(
					    'type'  => 'slider',
					    'value' => 16,
					    'properties' => array(
					        'min' => 5,
					        'max' => 65,
					    ),
					    'label' => esc_html__('Heading 5', 'jevelin'),
					    'desc'  => esc_html__('Select heading 5 font size (pixels)', 'jevelin'),
					),

					'styling_h6' => array(
					    'type'  => 'slider',
					    'value' => 8,
					    'properties' => array(
					        'min' => 5,
					        'max' => 65,
					    ),
					    'label' => esc_html__('Heading 6', 'jevelin'),
					    'desc'  => esc_html__('Select heading 6 font size (pixels)', 'jevelin'),
					),

					
					
					'title_styling_menu' => array(
					    'type'  => 'html-full',
					    'value' => '',
					    'label' => false,
					    'html'  => '<h3 class="hndle sh-custom-group-divder"><span>'.esc_html__('Menu', 'jevelin').'</span></h3><p>This font will apply both menu in header and footer. It would also apply on label of tags, category and button.</p>',
					),

					
					
					'menu_font_select_one' => array(
					    'type'  => 'multi-picker',
						'label' => false,
						'desc'  => false,
					    'value' => array(
					        'menu_font_select' => 'menu_google_font',
					    ),
					    'picker' => array(
					        'menu_font_select' => array(
					            'label'   => esc_html__('Select Font Source', 'jevelin'),
					            'type'    => 'radio',
					            'choices' => array(
					                'menu_google_font' => esc_html__('Google', 'jevelin'),
					                'menu_frontlash_font' => esc_html__('Frontlash', 'jevelin'),
					            ),
					        )
					    ),
					    'choices' => array(
					        'menu_google_font' => array(
						        'styling_menu' => array(
									'type'  => 'typography-v2',
									'value'      => array(
								        'family'    => 'News Cycle',
								        'subset'    => 'latin',
								        'variation' => '700',
									),
									'components' => array(
								        'family'         => true,
								        'size'           => false,
								        'line-height'    => false,
								        'letter-spacing' => false,
								        'color'          => false
									),
									'label' => esc_html__('Menu', 'jevelin'),
								),				
					        ),
					        'menu_frontlash_font' => array(
								'main_menu_frontlash_font' => array(
									'type'  => 'select',
									'label' => esc_html__('Frontlash Menu Font Family', 'jevelin'),
									'choices' => array(
										'news_cycleregular' => esc_html__( 'News Cycle Regular', 'jevelin' ),
										'news_cyclebold' => esc_html__( 'News Cycle Bold', 'jevelin' ),
									),
									'value'	  => 'news_cyclebold',
						        ),
						        
					        ),
					    ),
					),
					
					
					
					
					
					
					
					
					
					
					
					
					
					'title_footer_styling' => array(
					    'type'  => 'html-full',
					    'value' => '',
					    'label' => false,
					    'html'  => '<h3 class="hndle sh-custom-group-divder"><span>'.esc_html__('Footer Styling', 'jevelin').'</span></h3>',
					),

					'footer_background_color' => array(
					    'type'  => 'rgba-color-picker',
					    'value' => '#ededed',
					    'label' => esc_html__('Footer Background Color', 'jevelin'),
					    'desc'  => esc_html__('Select footer background color', 'jevelin'),
					),

					'footer_text_color' => array(
					    'type'  => 'color-picker',
					    'value' => '#9e9e9e',
					    'label' => esc_html__('Footer Text Color', 'jevelin'),
					    'desc'  => esc_html__('Select footer text color', 'jevelin'),
					),

										


					'title_copyright_styling' => array(
					    'type'  => 'html-full',
					    'value' => '',
					    'label' => false,
					    'html'  => '<h3 class="hndle sh-custom-group-divder"><span>'.esc_html__('Copyright Styling', 'jevelin').'</span></h3>',
					),

					
					'copyright_text_color' => array(
					    'type'  => 'color-picker',
					    'value' => '#ffffff',
					    'label' => esc_html__('Copyright Text Color', 'jevelin'),
					    'desc'  => esc_html__('Select copyright text color', 'jevelin'),
					),

					

				)
			),
		)
	)
);
