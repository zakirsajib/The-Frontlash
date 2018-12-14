<?php if (!defined('FW')) die('Forbidden');
/** @internal */
function _filter_disable_shortcodes($to_disable)
{
	$to_disable[] = 'accordion';
	$to_disable[] = 'calendar';
	$to_disable[] = 'notification';
	$to_disable[] = 'tabs';
	$to_disable[] = 'team_member';
	$to_disable[] = 'widget_area';
	$to_disable[] = 'contact_form';
	$to_disable[] = 'icon_box';
	$to_disable[] = 'icon';
	$to_disable[] = 'map';
	$to_disable[] = 'icon_box';
	$to_disable[] = 'button';
	$to_disable[] = 'output_js';
	$to_disable[] = 'testimonials';
	$to_disable[] = 'call_to_action';
	$to_disable[] = 'table';
	return $to_disable;
}
add_filter('fw_ext_shortcodes_disable_shortcodes', '_filter_disable_shortcodes');
