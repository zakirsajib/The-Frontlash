<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$cfg = array();

$cfg['page_builder'] = array(
	'title'       => __( 'Call To Action', 'fw' ),
	'description' => __( 'Add a Call to Action', 'fw' ),
	'tab'         => __( 'Content Elements', 'fw' ),
	'title_template' => '
		{{= title }}
		<div class="cta-title">
	    	{{ if( typeof o.title != "undefined" && o.title ) { }}
	    		{{- o.title}}
			{{ } }}
		</div>
		<div class="cta-msg">
			{{ if( typeof o.message != "undefined" && o.message ) { }}
	    		{{- o.message}}
			{{ } }}
		</div>
		<div class="cta-label">
			{{ if( typeof o.button_label != "undefined" && o.button_label ) { }}
	    		{{- o.button_label}}
			{{ } }}
		</div>	
		',
);