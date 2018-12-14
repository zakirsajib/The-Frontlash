<?php if (!defined('FW')) die('Forbidden');

$class = fw_ext_builder_get_item_width('page-builder', $atts['width'] . '/frontend_class');

/* Custom code*/
$section_class_name ='';
$section_extra_classes ='';
if ( ! empty( $atts['section_class'] ) ) {
	$section_class_name = $atts['section_class'];
	$section_extra_classes .= $section_class_name;
}
$bg_color = '';
if ( ! empty( $atts['background_color'] ) ) {
	$bg_color = 'background-color:' . $atts['background_color'] . ';';
}
$padding = '';
if ( ! empty( $atts['padding'] ) ) {
	$padding = 'padding:' . $atts['padding'] . ';';
}
$border = '';
if ( ! empty( $atts['border'] ) ) {
	$border = 'border:' . $atts['border'] . ';';
}
$section_style ='';
if($bg_color || $padding || $border):
$section_style   = 'style="' . esc_attr($bg_color . $padding . $border) . '"';
endif;
?>


<div class="<?php echo esc_attr($class); ?> <?php echo esc_attr($section_extra_classes) ?>" <?php echo $section_style; ?>>
	<?php echo do_shortcode($content); ?>
</div>
