<?php if (!defined('FW')) die('Forbidden');
$shortcodes_extension = fw_ext('shortcodes');

if(!function_exists('frontlash_shortcode_text_block_css')) :
	function frontlash_shortcode_text_block_css ($data) {
		$atts = frontlash_shortcode_options($data,'text-block'); ob_start(); 
		?>		
			<?php if( ( isset($atts['margin']) && $atts['margin'] ) || 
					  ( isset($atts['background_color']) && $atts['background_color'] ) ||
					  ( isset($atts['padding']) && $atts['padding'] ) ) : ?>
				#text-block-<?php echo esc_attr( $atts['id'] ); ?> {
					<?php if( $atts['margin'] ) : ?>
						margin: <?php echo esc_attr( $atts['margin'] ); ?>;
					<?php endif; ?>
					<?php if( $atts['padding'] ) : ?>
						padding: <?php echo esc_attr( $atts['padding'] ); ?>;
					<?php endif; ?>
					<?php if( $atts['background_color'] ) : ?>
						background-color: <?php echo esc_attr( $atts['background_color'] ); ?>;
					<?php endif; ?>
				}
				
				@media screen and (max-width: 767px) {
					#text-block-<?php echo esc_attr( $atts['id'] ); ?> {
						<?php if( $atts['margin'] ) : ?>
							margin: 0;
						<?php endif; ?>
						<?php if( $atts['padding'] ) : ?>
							padding: 0;
						<?php endif; ?>
					}
				}
				
			<?php endif; ?>
			
			<?php if( ( isset($atts['line_height']) && $atts['line_height'] ) ) : ?>
				#text-block-<?php echo esc_attr( $atts['id'] ); ?> li,
				#text-block-<?php echo esc_attr( $atts['id'] ); ?> p,
				#text-block-<?php echo esc_attr( $atts['id'] ); ?> {
					line-height: <?php echo esc_attr( $atts['line_height'] ); ?>;
				}
			<?php endif;
			
			if( ( isset($atts['text_size']) && $atts['text_size'] ) ||
				( isset($atts['text_color']) && $atts['text_color'] ) ||
				( isset($atts['text_weight']) && $atts['text_weight'] )) : ?>
				#text-block-<?php echo esc_attr( $atts['id'] ); ?> p,
				#text-block-<?php echo esc_attr( $atts['id'] ); ?> li,
				#text-block-<?php echo esc_attr( $atts['id'] ); ?> a{
					<?php if( $atts['text_color'] ) : ?>
						color: <?php echo esc_attr( $atts['text_color'] ); ?>;
					<?php endif;?>
					<?php if( $atts['text_size'] ) : ?>
						font-size: <?php echo esc_attr( $atts['text_size'] ); ?>;
					<?php endif;?>
					<?php if( $atts['text_weight'] ) : ?>
						font-weight: <?php echo esc_attr( $atts['text_weight'] ); ?>;
					<?php endif;?>
				}
				#text-block-<?php echo esc_attr( $atts['id'] ); ?> a{
					color:inherit;
					border-bottom-width:2px;
					border-bottom-style:solid;
					line-height:2;
					transition: all 100ms cubic-bezier(0.4, 0, 0.2, 1);
				}
			<?php endif;
			if( ( isset($atts['line_height']) && $atts['line_height'] ) ) : ?>
				#text-block-<?php echo esc_attr( $atts['id'] ); ?> li{
					list-style-type: none;line-height: <?php echo esc_attr( $atts['line_height'] ); ?>;
				}
			<?php endif;
			if( ( isset($atts['text_size']) && $atts['text_size'] ) ||
				( isset($atts['text_color']) && $atts['text_color'] ) ||
				( isset($atts['text_weight']) && $atts['text_weight'] ) ||
				( isset($atts['margin']) && $atts['margin'] )) : ?>	
				#text-block-<?php echo esc_attr( $atts['id'] ); ?> h1,
				#text-block-<?php echo esc_attr( $atts['id'] ); ?> h2,
				#text-block-<?php echo esc_attr( $atts['id'] ); ?> h3{
					<?php if( $atts['text_color'] ) : ?>
						color: <?php echo esc_attr( $atts['text_color'] ); ?>;
					<?php endif;?>
					<?php if( $atts['text_size'] ) : ?>
						font-size: <?php echo esc_attr( $atts['text_size'] ); ?>;
					<?php endif;?>
					<?php if( $atts['text_weight'] ) : ?>
						font-weight: <?php echo esc_attr( $atts['text_weight'] ); ?>;
					<?php endif;?>
					<?php if( $atts['margin'] ) : ?>
						margin: <?php echo esc_attr( $atts['margin'] ); ?>;
					<?php endif; ?>
				}
			<?php endif;			
			$custom_css = ob_get_contents(); 
			ob_end_clean();
			if( !(is_home() || is_front_page() || is_category()) ):
				wp_add_inline_style( 'frontlash-style',frontlash_compress($custom_css));
			endif;
		
	}
	add_action('fw_ext_shortcodes_enqueue_static:text_block','frontlash_shortcode_text_block_css');
endif;
?>