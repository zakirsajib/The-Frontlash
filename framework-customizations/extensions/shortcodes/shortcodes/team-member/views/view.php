<?php if ( ! defined( 'FW' ) ) {
	die( 'Forbidden' );
}

if ( empty( $atts['image'] ) ) {
	$image = fw_get_framework_directory_uri('/static/img/no-image.png');
} else {
	$image = $atts['image']['url'];
}
if ( !empty( $atts['linkedin_url'] ) ) {
	$linkedin_url = $atts['linkedin_url'];
}
if ( !empty( $atts['linkedin_image'] ) ) {
	$linkedin_image = $atts['linkedin_image']['url'];
}
?>
<div class="fw-team">
	<div class="fw-team-inner match-height">
		<div class="fw-team-name">
			<?php if ( !empty( $atts['name'] ) || ( !empty( $atts['job'] ) )):?>
			<div class="person-info pull-left">
				<h3><?php echo $atts['name']; ?></h3>
				<p class="profession"><?php echo $atts['job']; ?></p>
			</div>
			<?php endif;?>
			<?php if ( !empty( $atts['linkedin_image'] ) || 
				( !empty( $atts['linkedin_url'] ) )):?>
			<div class="person-linkedin pull-right">
				<a href="<?php echo esc_attr($linkedin_url); ?>" target="_blank"><img src="<?php echo esc_attr($linkedin_image); ?>" alt="<?php echo esc_attr($atts['name']); ?>"></a>
			</div>
			<?php endif;?>
		</div>
		<?php if ( !empty( $atts['desc'] )):?>
		<div class="fw-team-text">
			<?php echo $atts['desc']; ?>
		</div>
		<?php endif;?>
	</div>
	
	<?php $margin = '';
		$section_style ='';
		if ( ! empty( $atts['margin'] ) ) {
			$margin = 'margin:' . $atts['margin'] . ';';
			$section_style = 'style="' . esc_attr($margin) . '"';
		}
	
		$img_hover = !empty($atts['image_hover']) ? "{$atts['image_hover']}" : ''; ?>
	
	<?php if ( !empty( $atts['image'] )):?>
		<div class="fw-team-image <?php echo $img_hover?>" <?php echo $section_style; ?>>
			<img src="<?php echo esc_attr($image); ?>" alt="<?php echo esc_attr($atts['name']); ?>"/>
		</div>
	<?php endif;?>
</div>