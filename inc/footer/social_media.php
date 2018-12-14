<?php if (defined('FW')):
	$footer_social = fw_get_db_settings_option('footer_social');
	$footer_social_title = fw_get_db_settings_option('footer_social_title');

	if($footer_social == 'on'):?>
			<h2 class="footer-widget-title"><?php echo $footer_social_title;?></h2>
			<?php $social_youtube = fw_get_db_settings_option('social_youtube');
			$social_facebook = fw_get_db_settings_option('social_facebook');
			$social_instagram = fw_get_db_settings_option('social_instagram');?>
			<div class="social-media-footer">
				<ul class="list-inline">
					<li><a href="<?php echo $social_instagram ?>" target="_blank"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer/Instagram_Icon.svg" alt=""></a></li>
		<li><a href="<?php echo $social_facebook ?>" target="_blank"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer/Facebook_Icon.svg" alt=""></a></li>
		<li><a href="<?php echo $social_youtube ?>" target="_blank"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer/YouTube_Footer.svg" alt=""></a></li>
		<li><a href="mailto:<?php echo get_option('admin_email')?>" target="_blank"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer/Email_Icon.svg" alt=""></a></li>
				</ul>
			</div>
	<?php endif;
endif;?>