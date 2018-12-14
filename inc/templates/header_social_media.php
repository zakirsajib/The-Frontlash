<div class="social-media-header hidden-sm hidden-xs">
<?php if (defined('FW')): // prevent fatal error when the framework is not active 
	$social_youtube = fw_get_db_settings_option('social_youtube');
	$social_facebook = fw_get_db_settings_option('social_facebook');
	$social_instagram = fw_get_db_settings_option('social_instagram');?>
	<ul class="list-inline text-right col-lg-3 col-md-3">
		<?php if( is_404() || is_home() || is_front_page() || is_page() || is_search() || 
			is_tag() ):?>
		<li><a href="<?php echo $social_instagram ?>" target="_blank" class="instagram"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/poppy/Instagram_Icon.svg" alt=""></a></li>
		<li><a href="<?php echo $social_facebook ?>" target="_blank" class="facebook"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/poppy/Facebook_Icon.svg" alt=""></a></li>
		<li><a href="<?php echo $social_youtube ?>" target="_blank" class="youtube"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/poppy/YouTube_Poppy.svg" alt=""></a></li>
		<li><a href="mailto:<?php echo get_option('admin_email')?>" target="_blank"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/poppy/Email_Icon.svg" alt=""></a></li>
		
		<?php elseif(is_category(array(4,'cash-all-the-deals')) || in_category(array(4,'cash-all-the-deals')) && is_single()):?>
		<li><a href="<?php echo $social_instagram ?>" target="_blank" class="instagram"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/saffron/Instagram.svg" alt=""></a></li>
		<li><a href="<?php echo $social_facebook ?>" target="_blank" class="facebook"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/saffron/Facebook.svg" alt=""></a></li>
		<li><a href="<?php echo $social_youtube ?>" target="_blank" class="youtube"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/saffron/YouTube_Saffron.svg" alt=""></a></li>
		<li><a href="mailto:<?php echo get_option('admin_email')?>" target="_blank"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/saffron/Email.svg" alt=""></a></li>
		
		<?php elseif(is_category(array(5,'progress-a-new-way')) ||
            in_category(array(5,'progress-a-new-way')) && is_single() ):?>
		<li><a href="<?php echo $social_instagram ?>" target="_blank" class="instagram"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/earth/Instagram.svg" alt=""></a></li>
		<li><a href="<?php echo $social_facebook ?>" target="_blank" class="facebook"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/earth/Facebook.svg" alt=""></a></li>
		<li><a href="<?php echo $social_youtube ?>" target="_blank" class="youtube"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/earth/YouTube_Earth.svg" alt=""></a></li>
		<li><a href="mailto:<?php echo get_option('admin_email')?>" target="_blank"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/earth/Email.svg" alt=""></a></li>
		
		<?php elseif(is_category(array(7,'fashion-get-inspired')) || 
            in_category(array(7,'fashion-get-inspired')) && is_single() ):?>
		<li><a href="<?php echo $social_instagram ?>" target="_blank" class="instagram"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/moss/Instagram.svg" alt=""></a></li>
		<li><a href="<?php echo $social_facebook ?>" target="_blank" class="facebook"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/moss/Facebook.svg" alt=""></a></li>
		<li><a href="<?php echo $social_youtube ?>" target="_blank" class="youtube"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/moss/YouTube_Moss.svg" alt=""></a></li>
		<li><a href="mailto:<?php echo get_option('admin_email')?>" target="_blank"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/moss/Email.svg" alt=""></a></li>

	 <?php endif;?>
	</ul>
<?php endif;?>
</div>