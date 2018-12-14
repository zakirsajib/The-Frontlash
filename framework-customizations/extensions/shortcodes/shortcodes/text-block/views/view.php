<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */
?>
<div id="text-block-<?php echo esc_attr( $atts['id'] ); ?>" class="text-block <?php echo esc_attr($atts['text_style']); ?>">
<?php echo do_shortcode( $atts['text']); ?>
</div>