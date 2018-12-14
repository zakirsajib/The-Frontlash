<?php if (!defined('FW')) die('Forbidden');

$cfg = array();

$cfg['page_builder'] = array(
	'title'         => __('Single Image', 'fw'),
	'description'   => __('Add an Image', 'fw'),
	'tab'           => __('Media Elements', 'fw'),
	'title_template' => '
    	<b>{{- title }}</b>
        <div class="image_one" style="text-align:center">
            {{ if( typeof o.single_image != "undefined" && o.single_image ) { }}
                <img src="{{- o.single_image.url }}" width="50%" height="50%"/>
            {{ } }}
    	</div>'
);?>