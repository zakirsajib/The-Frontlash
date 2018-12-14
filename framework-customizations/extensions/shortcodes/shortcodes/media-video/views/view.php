<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

global $wp_embed;

$width  = ( is_numeric( $atts['width'] ) && ( $atts['width'] > 0 ) ) ? $atts['width'] : '516';
$height = ( is_numeric( $atts['height'] ) && ( $atts['height'] > 0 ) ) ? $atts['height'] : '315';
$iframe = $wp_embed->run_shortcode( '[embed  width="' . $width . '" height="' . $height . '"]' . trim( $atts['url'] ) . '[/embed]' );
?>
<div class="post-meta-video">
	<div class="ratio-container">
		<div class="ratio-content">
			<?php echo do_shortcode( $iframe ); ?>
		</div>
	</div>
</div>
