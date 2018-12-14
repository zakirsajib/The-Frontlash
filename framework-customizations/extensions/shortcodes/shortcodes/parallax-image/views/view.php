<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

if ( empty( $atts['image_desktop_one'] ) ) {
	return;
}
if ( empty( $atts['image_desktop_two'] ) ) {
	return;
}
if ( empty( $atts['image_portrait'] ) ) {
	return;
}



$image_desktop_one = $atts['image_desktop_one']['url'];
$image_desktop_two = $atts['image_desktop_two']['url'];
$image_portrait = $atts['image_portrait']['url'];


$alt_one = get_post_meta($atts['image_desktop_one']['attachment_id'], '_wp_attachment_image_alt', true);
$alt_two = get_post_meta($atts['image_desktop_two']['attachment_id'], '_wp_attachment_image_alt', true);
$alt_three = get_post_meta($atts['image_portrait']['attachment_id'], '_wp_attachment_image_alt', true);


$img_attributes_one = array(
	'src' => $image_desktop_one,
	'alt' => $alt_one ? $alt_one : $image_desktop_one,
	'class' => 'landscape-img'
);
$img_attributes_two = array(
	'src' => $image_desktop_two,
	'alt' => $alt_two ? $alt_two : $image_desktop_two,
	'class' => 'landscape-img'
);
$img_attributes_three = array(
	'src' => $image_portrait,
	'alt' => $alt_three ? $alt_three : $image_portrait,
	'class' => 'portrait-img'
);


?>

<div class="section-outer-container">
	<div class="section-container section-asset-container full-width">
		<div>
			<div class="section-reveal-container">
				<div class="full-reveal">
					<div class="reveal-image landscape">
						<div class="reveal-fixed-wrap">
							<div class="reveal-fixed">
								<?php echo fw_html_tag('img', $img_attributes_one);	?>	
							</div>
						</div>
					</div>
					<div class="reveal-image portrait">
						<div class="reveal-fixed-wrap">
						<div class="reveal-fixed">
								<?php echo fw_html_tag('img', $img_attributes_two);	?>
						</div>
					</div>
					</div>
				</div>
				<div class="full-reveal">
					<div class="reveal-image landscape">
						<div class="reveal-fixed-wrap">
							<div class="reveal-fixed">
								<?php echo fw_html_tag('img', $img_attributes_three);	?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>