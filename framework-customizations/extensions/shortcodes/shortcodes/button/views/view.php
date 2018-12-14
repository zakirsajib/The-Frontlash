<?php if (!defined('FW')) die( 'Forbidden' ); ?>
<?php $color_class = !empty($atts['color']) ? "fw-btn-{$atts['color']}" : ''; ?>

<?php 
	$btn_class_name ='';
	if ( ! empty( $atts['class'] ) ) {
		$btn_class_name = $atts['class'];
	}?>
<a href="<?php echo esc_attr($atts['link']) ?>" target="<?php echo esc_attr($atts['target']) ?>" class="fw-btn fw-btn-1 <?php echo esc_attr($color_class); ?> <?php echo esc_attr($btn_class_name); ?>">
	<span><?php echo $atts['label']; ?></span>
</a>