<?php if (!defined('FW')) die('Forbidden');

$cfg = array();

$cfg['page_builder'] = array(
	'title'         => __('Image', 'fw'),
	'description'   => __('Add an Image', 'fw'),
	'tab'           => __('Media Elements', 'fw'),
	'title_template' => '
    	<b>{{- title }}</b>
        <div class="image">
            {{ if( typeof o.image != "undefined" && o.image ) { }}
                <img src="{{- o.image.url }}" width="50%" height="50%" class="{{-o.image_alignment}}"/>
            {{ } }}
    	</div>',
);?>