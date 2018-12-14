<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

if ( empty( $atts['single_image'] ) ) {
	return;
}

$single_image_width  = ( is_numeric( $atts['single_image_width'] ) && ( $atts['single_image_width'] > 0 ) ) ? $atts['single_image_width'] : '';

$single_image = $atts['single_image']['url'];
$alt = get_post_meta($atts['single_image']['attachment_id'], '_wp_attachment_image_alt', true);

$img_attributes = array(
	'src' => $single_image,
	'alt' => $alt ? $alt : $single_image,
	'class' => 'aligncenter'
);

if(!empty($single_image_width)){
	$img_attributes['width'] = $single_image_width;
}
?>
<div class="img-parallax">
	<?php echo fw_html_tag('img', $img_attributes);	?>
</div>