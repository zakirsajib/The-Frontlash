<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

if ( empty( $atts['image'] ) ) {
	return;
}

$width  = ( is_numeric( $atts['width'] ) && ( $atts['width'] > 0 ) ) ? $atts['width'] : '';
$height = ( is_numeric( $atts['height'] ) && ( $atts['height'] > 0 ) ) ? $atts['height'] : '';

if ( ! empty( $width ) && ! empty( $height ) ) {
	$image = fw_resize( $atts['image']['attachment_id'], $width, $height, true );
	$class = $atts['image_class'];
} else {
	$image = $atts['image']['url'];
	$class = $atts['image_class'];
}

$image_alignment = !empty($atts['image_alignment']) ? "{$atts['image_alignment']}" : '';

$alt = get_post_meta($atts['image']['attachment_id'], '_wp_attachment_image_alt', true);

$lazyload = 'lazyload';

$img_attributes = array(
	'src' => get_template_directory_uri() . '/static/dist/img/loader.svg',
	'data-srcset'	=> $image,
	'alt' => $alt ? $alt : $image,
	'class'	=> $class .' '. $image_alignment .' ' . $lazyload,
);

if(!empty($width)){
	$img_attributes['width'] = $width;
}

if(!empty($height)){
	$img_attributes['height'] = $height;
}

$margin = '';
$section_style ='';
if ( ! empty( $atts['margin'] ) ) {
	$margin = 'margin:' . $atts['margin'] . ';';
	$section_style = 'style="' . esc_attr($margin) . '"';
}

$img_hover = !empty($atts['image_hover']) ? "{$atts['image_hover']}" : '';

/*
$image_caption = '';
if ( ! empty( $atts['image_caption'] ) ) {
	$image_caption = $atts['image_caption'];
}

$image_caption_color = '';
$image_caption_alignment = '';
if ( ! empty( $atts['image_caption_color'] ) ) {
	$image_caption_color = 'color:' . $atts['image_caption_color']. ';';
	$caption_style = 'style="' . esc_attr($image_caption_color) . '"';
}
if ( ! empty( $atts['image_caption_alignment'] ) ) {
	$image_caption_alignment = 'text-align:' . $atts['image_caption_alignment']. ';';
	$caption_style = 'style="' . esc_attr($image_caption_alignment) . '"';
}
if (! empty( $atts['image_caption_alignment'] )  && (! empty( $atts['image_caption_color'] ) ) ){
	$image_caption_color = 'color:' . $atts['image_caption_color']. ';';
	$image_caption_alignment = 'text-align:' . $atts['image_caption_alignment']. ';';
	$caption_style = 'style="' . esc_attr($image_caption_alignment) . ' ' . esc_attr($image_caption_color) . '"';
}
*/

if ( ! empty( $atts['image_animation'] ) ) {
	$image_animation = 	$atts['image_animation'];

}
if ( ! empty( $atts['image_animation_duration'] ) ) {
	$image_animation_duration = $atts['image_animation_duration'];
}

if ( empty( $atts['link'] ) ) {
	
	if ( empty( $atts['image_animation'] ) && empty( $atts['image_animation_duration'] ) ) {
		echo '<div data-aos="fade-up" data-aos-once="false" data-aos-easing="ease-in-out" class="fw-image-hover '.$img_hover.'" '.$section_style.' >';
			echo fw_html_tag('img', $img_attributes);
		echo '</div>';
	}else{
		echo '<div data-aos="'.$image_animation.'" data-aos-once="false" data-aos-offset="-250" data-aos-easing="ease-in-out" data-aos-duration="'.$image_animation_duration.'" class="fw-image-hover '.$img_hover.'" '.$section_style.' >';
		echo fw_html_tag('img', $img_attributes);
		echo '</div>';
	}
	
} else {
	
	if ( empty( $atts['image_animation'] ) && empty( $atts['image_animation_duration'] ) ) {
		echo '<div data-aos="fade-up" data-aos-once="false" data-aos-easing="ease-in-out" class="fw-image-hover '.$img_hover.'" '.$section_style.' >';
		echo fw_html_tag('a', array(
			'href' => $atts['link'],
			'target' => $atts['target']
			), fw_html_tag('img',$img_attributes));
		echo '</div>';
	}else{
		echo '<div data-aos="'.$image_animation.'" data-aos-once="false" data-aos-offset="-250" data-aos-easing="ease-in-out" data-aos-duration="'.$image_animation_duration.'" class="fw-image-hover '.$img_hover.'" '.$section_style.' >';
		echo fw_html_tag('a', array(
			'href' => $atts['link'],
			'target' => $atts['target']
			), fw_html_tag('img',$img_attributes));
		echo '</div>';
	}
	
}