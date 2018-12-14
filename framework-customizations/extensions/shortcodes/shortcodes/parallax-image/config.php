<?php if (!defined('FW')) die('Forbidden');

$cfg = array();

$cfg['page_builder'] = array(
	'title'         => __('Parallax Image', 'fw'),
	'description'   => __('Add Image', 'fw'),
	'tab'           => __('Media Elements', 'fw'),
	'title_template' => '
    	<b>{{- title }}</b>
        <div class="image_one" style="text-align:center">
            {{ if( typeof o.image_desktop_one != "undefined" && o.image_desktop_one ) { }}
                <img src="{{- o.image_desktop_one.url }}" width="50%" height="50%"/>
            {{ } }}
    	</div>
    	<div class="image_two" style="text-align:center">
            {{ if( typeof o.image_desktop_two != "undefined" && o.image_desktop_two ) { }}
                <img src="{{- o.image_desktop_two.url }}" width="50%" height="50%"/>
            {{ } }}
    	</div>'
);?>