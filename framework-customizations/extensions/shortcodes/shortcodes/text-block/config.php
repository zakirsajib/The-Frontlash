<?php if (!defined('FW')) die('Forbidden');

$cfg = array(
	'page_builder' => array(
		'title'       => '   ' . esc_html__( 'Text Block', 'fw' ),
		'description' => esc_html__( 'Add a Text Block', 'fw' ),
		'tab'         => esc_html__( 'Content Elements', 'fw' ),
		'popup_size'  => 'large',
        'title_template' => '
        	<b>{{= title }}</b>
        	<div class="item-desc">
	        	{{ if( typeof o.text != "undefined" && o.text ) { }}
	        		{{- o.text.replace(/(<([^>]+)>)/ig,"").split(/\s+/, 100).join(" ") }}
	    		{{ } }}
        	</div>',
	)
);
