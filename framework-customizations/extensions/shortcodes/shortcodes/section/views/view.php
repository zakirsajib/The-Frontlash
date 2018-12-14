<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

$bg_color = '';
if ( ! empty( $atts['background_color'] ) ) {
	$bg_color = 'background-color:' . $atts['background_color'] . ';';
}

$bg_image = '';
if ( ! empty( $atts['background_image'] ) && ! empty( $atts['background_image']['data']['icon'] ) ) {
	$bg_image = 'background-image:url(' . $atts['background_image']['data']['icon'] . ');';
}

$section_extra_classes = '';

/* Custom code*/
//$section_class_name ='';
//if ( ! empty( $atts['section_class'] ) ) {
//	$section_class_name = $atts['section_class'];
//	$section_extra_classes .= $section_class_name;
//}
$section_id_name ='';
if ( ! empty( $atts['section_id'] ) ) {
	$section_id_name = $atts['section_id'];
}

$background_position ='';
$background_repeat ='';
$background_size ='';
$background_attachment ='';
if ( ! empty( $atts['background_image'] )):
	
	if ( ! empty( $atts['background_position'] ) ) {
	$background_position = 'background-position:' . $atts['background_position'] . ';';
	}
	
	if ( ! empty( $atts['background_repeat'] ) ) {
		$background_repeat = 'background-repeat:' . $atts['background_repeat'] . ';';
	}
	
	if ( ! empty( $atts['background_size'] ) ) {
		$background_size = 'background-size:' . $atts['background_size'] . ';';
	}
	if ( ! empty( $atts['background_attachment'] ) ) {
		$background_attachment = 'background-attachment:' . $atts['background_attachment'] . ';';
	}
endif;

$background_height ='';
if ( ! empty( $atts['background_height'] ) ) {
	$background_height = 'height:' . $atts['background_height'] . ';';
}
$padding ='';
if ( ! empty( $atts['section_style'] ) ) {
	$padding = 'padding:' . $atts['section_style'] . ';';
}
$margin ='';
if ( ! empty( $atts['margin'] ) ) {
	$margin = 'margin:' . $atts['margin'] . ';';
}

$section_style_without_bg = 'style="' . esc_attr($bg_color . $padding . $margin) . '"';

$section_style   = 'style="' . esc_attr($bg_color . $bg_image . $background_position . $background_repeat . $background_size . $background_height . $background_attachment . $padding . $margin) . '"';
$container_class = ( isset( $atts['is_fullwidth'] ) && $atts['is_fullwidth'] ) ? 'fw-container-fluid' : 'fw-container';
?>

<?php if ( ! empty( $bg_image )):?>
	<?php if ( ! empty( $atts['section_id'] ) ) :?>
	<section class="fw-main-row <?php echo esc_attr($section_extra_classes)?>" <?php echo $section_style;?> id="<?php echo esc_attr($section_id_name)?>">
		<div class="<?php echo esc_attr($container_class); ?>">
			<?php echo do_shortcode( $content ); ?>
		</div>
	</section>
	<?php else:?>
	<div class="parallax-section">
		<div class="parallax-child-section">
			<section class="fw-main-row <?php echo esc_attr($section_extra_classes)?>" <?php echo $section_style;?> id="frontlashID">
				<div class="<?php echo esc_attr($container_class); ?>">
					<?php echo do_shortcode( $content ); ?>
				</div>
<style>/* IOS background-attachment: fixed fix. */@media screen and (max-width:768px){.parallax-section{position:relative;width:100%;<?php echo $background_height?>}.parallax-child-section{clip:rect(0,auto,auto,0);position:absolute;top:0;left:0;width:100%;<?php echo $background_height?>}#frontlashID{position:fixed;display:block;top:0;left:0;width:100%;height:100%!important;transform:translateZ(0);will-change:transform;z-index:1;background-attachment:scroll!important}}</style>
			</section>
		</div>
	</div>
	<?php endif;?>
<?php elseif(empty( $bg_image )):?>
	<?php if ( ! empty( $atts['section_id'] ) ) :?>
		<section class="fw-main-row <?php echo esc_attr($section_extra_classes)?>" id="<?php echo esc_attr($section_id_name)?>" <?php echo $section_style_without_bg;?>>
		<div class="<?php echo esc_attr($container_class); ?>">
			<?php echo do_shortcode( $content ); ?>
		</div>
	</section>
	<?php else:?>
	<section class="fw-main-row <?php echo esc_attr($section_extra_classes)?>" <?php echo $section_style_without_bg;?>>
		<div class="<?php echo esc_attr($container_class); ?>">
			<?php echo do_shortcode( $content ); ?>
		</div>
	</section>
	<?php endif;?>
<?php endif;?>