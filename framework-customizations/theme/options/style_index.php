<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$options = array(
	'style-index' => array(
		'title'   => esc_html__( 'Style Index', 'jevelin' ),
		'type'    => 'tab',
		'options' => array(
			'social-box' => array(
				'title'   => esc_html__( 'Style Index', 'jevelin' ),
				'type'    => 'box',
				'options' => array(
					'social_custom' => array(
					    'type' => 'addable-popup',
					    'label' => esc_html__('Style Index', 'jevelin'),
					    'desc'  => esc_html__('Add values to brands', 'jevelin'),
					    'template' => '{{- style_index_brand_name }}',
					    'popup-title' => null,
					    'size' => 'small',
					    'limit' => 100,
					    'sortable' => true,
					    'popup-options' => array(
						    
						    'style_index_brand_name' => array(
								'type'  => 'select',
							    'label' => __('Brand Name', 'jevelin'),
							    'choices' => array(
							        'All Sisters' => __('All Sisters', 'jevelin'),
							        'Alternative Apparel' => __('Alternative Apparel', 'jevelin'),
							        'Amour Vert' => __('Amour Vert', 'jevelin'),
							        'Anaak' => __('Anaak', 'jevelin'),
							        'AANDD' => __('AANDD', 'jevelin'),
							        'Apiece Apart' => __('Apiece Apart', 'jevelin'),
							        'A Peace Treaty' => __('A Peace Treaty', 'jevelin'),
							        'Arcana' => __('Arcana', 'jevelin'),
							        'Awave Awake' => __('Awave Awake', 'jevelin'),
							        'Baserange' => __('Baserange', 'jevelin'),
							        'Bassike' => __('Bassike', 'jevelin'),
							        "Beacon's Closet" => __("Beacon's Closet", "jevelin"),
							        'Behno' => __('Behno', 'jevelin'),
							        'Bluma Project' => __('Bluma Project', 'jevelin'),
							        'Brook There' => __('Brook There', 'jevelin'),
							        'Brother Vellies' => __('Brother Vellies', 'jevelin'),
							        'Christy Dawn' => __('Christy Dawn', 'jevelin'),
							        'Datura' => __('Datura', 'jevelin'),
							        'The Deep End Club' => __('The Deep End Club', 'jevelin'),
							        'Dinosaur Designs' => __('Dinosaur Designs', 'jevelin'),
							        'Doen' => __('Doen', 'jevelin'),
							        'Everlane' => __('Everlane', 'jevelin'),
							        'Faherty' => __('Faherty', 'jevelin'),
							        'Indego Africa' => __('Indego Africa', 'jevelin'),
							        'Kaelen' => __('Kaelen', 'jevelin'),
							        'Kempton & Co.' => __('Kempton & Co.', 'jevelin'),
							        'Kowtow' => __('Kowtow', 'jevelin'),
							        'Lem Lem' => __('Lem Lem', 'jevelin'),
							        'Maison De Mode' => __('Maison De Mode', 'jevelin'),
							        'Maiyet' => __('Maiyet', 'jevelin'),
							        'Mansur Gavriel' => __('Mansur Gavriel', 'jevelin'),
							        'Matt and Nat' => __('Matt and Nat', 'jevelin'),
							        'Monique Pean' => __('Monique Pean', 'jevelin'),
							        'Naadam' => __('Naadam', 'jevelin'),
							        'New York Vintage' => __('New York Vintage', 'jevelin'),
							        'Nisolo' => __('Nisolo', 'jevelin'),
							        'Nude the Label' => __('Nude the Label', 'jevelin'),
							        'Nudie Jeans' => __('Nudie Jeans', 'jevelin'),
							        'Organic by John Patrick' => __('Organic by John Patrick', 'jevelin'),
							        'Osklen' => __('Osklen', 'jevelin'),
							        'Pansy Lingerie' => __('Pansy Lingerie', 'jevelin'),
									'Patagonia Inc.' => __('Patagonia Inc.', 'jevelin'),
							        'Peony Swimwear' => __('Peony Swimwear', 'jevelin'),
							        'Pima Doll' => __('Pima Doll', 'jevelin'),
							        'Prabal' => __('Prabal', 'jevelin'),
							    ),
							),
						    
						    
						    'style_index_value_name' => array(
							    'type'  => 'multi-select',
							    'label' => __('Value Name', 'jevelin'),
							    'population' => 'array',
							    'source' => '',
							    'choices' => array(
							        'recycled' => __('Recycled', 'jevelin'),
							        'organic' => __('Organic', 'jevelin'),
							        'livingwage' => __('Living Wage', 'jevelin'),
							        'transparency' => __('Transparency', 'jevelin'),
							        'vegan' => __('Vegan', 'jevelin'),
							        'philanthropic' => __('Philanthropic', 'jevelin'),
							        'sustainable' => __('Sustainable', 'jevelin'),
							        'locallymade' => __('Locally Made', 'jevelin'),
							        'fairtrade' => __('Fair Trade', 'jevelin'),
							        'representation' => __('Representation', 'jevelin'),
							    ),
							    'limit' => 100,
						    ),
					    ),
					),

				)
			),
		)
	)
);
