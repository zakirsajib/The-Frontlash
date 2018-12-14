<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

/**
 * @var array $atts
 */

$text_size ='';
if ( ! empty( $atts['text_size'] ) ) {
	$text_size = 'font-size:' . $atts['text_size'] . ';';
}
$line_height ='';
if ( ! empty( $atts['line_height'] ) ) {
	$line_height = 'line-height:' . $atts['line_height'] . ';';
}

//$section_style   = 'style="' . esc_attr($text_size . $line_height) .'"';

?>
<div id="text-block-<?php echo esc_attr( $atts['id'] ); ?>" class="text-block-<?php echo esc_attr($atts['text_class']); ?>">
<?php echo do_shortcode( $atts['text']); ?>
</div>