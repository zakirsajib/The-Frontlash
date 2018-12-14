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
					<li><a href="<?php echo $social_instagram ?>" target="_blank" class="instagram"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a></li>
					<li><a href="<?php echo $social_facebook ?>" target="_blank" class="facebook"><i class="fa fa-facebook-official fa-2x" aria-hidden="true"></i></a></li>
					<li><a href="<?php echo $social_youtube ?>" target="_blank" class="youtube"><i class="fa fa-youtube-play fa-2x" aria-hidden="true"></i>
</a></li>
					<li><a href="mailto:<?php echo get_option('admin_email')?>" target="_blank"><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i>
</a></li>
				</ul>
			</div>
	<?php endif;
endif;?>