<?php 
	if (defined('FW')):
	$social_youtube = fw_get_db_settings_option('social_youtube');
	$social_facebook = fw_get_db_settings_option('social_facebook');
	$social_pinterest = fw_get_db_settings_option('social_pinterest');?>
	<div class="social-media-footer">
		<ul class="list-inline">
		<?php if( is_home() || is_front_page() || is_page() || is_search() || 
			is_tag(array('interview', 'editorial', 'feature', 'video')) ):?>
		<li><a href="<?php echo $social_pinterest ?>" target="_blank" class="pinterest"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/poppy/pinterest.svg" alt=""></a></li>
		<li><a href="<?php echo $social_facebook ?>" target="_blank" class="facebook"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/poppy/Facebook_Icon.svg" alt=""></a></li>
		<li><a href="<?php echo $social_youtube ?>" target="_blank" class="youtube"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/poppy/YouTube_Icon.svg" alt=""></a></li>
		<li><a href="mailto:<?php echo get_option('admin_email')?>" target="_blank"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/poppy/Email_Icon.svg" alt=""></a></li>
		
		<?php elseif(is_category(array(4,'cash-all-the-deals')) || in_category(array(4,'cash-all-the-deals')) && is_single()):?>
		<li><a href="<?php echo $social_pinterest ?>" target="_blank" class="pinterest"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/saffron/pinterest.svg" alt=""></a></li>
		<li><a href="<?php echo $social_facebook ?>" target="_blank" class="facebook"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/saffron/Facebook.svg" alt=""></a></li>
		<li><a href="<?php echo $social_youtube ?>" target="_blank" class="youtube"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/saffron/YouTube_Icon.svg" alt=""></a></li>
		<li><a href="mailto:<?php echo get_option('admin_email')?>" target="_blank"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/saffron/Email.svg" alt=""></a></li>
		
		<?php elseif(is_category(array(5,'progress-a-new-way')) ||
            in_category(array(5,'progress-a-new-way')) && is_single() ):?>
		<li><a href="<?php echo $social_pinterest ?>" target="_blank" class="pinterest"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/earth/pinterest.svg" alt=""></a></li>
		<li><a href="<?php echo $social_facebook ?>" target="_blank" class="facebook"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/earth/Facebook.svg" alt=""></a></li>
		<li><a href="<?php echo $social_youtube ?>" target="_blank" class="youtube"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/earth/YouTube_Icon.svg" alt=""></a></li>
		<li><a href="mailto:<?php echo get_option('admin_email')?>" target="_blank"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/earth/Email.svg" alt=""></a></li>
		
		<?php elseif(is_category(array(7,'fashion-get-inspired')) || 
            in_category(array(7,'fashion-get-inspired')) && is_single() ):?>
		<li><a href="<?php echo $social_pinterest ?>" target="_blank" class="pinterest"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/moss/pinterest.svg" alt=""></a></li>
		<li><a href="<?php echo $social_facebook ?>" target="_blank" class="facebook"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/moss/Facebook.svg" alt=""></a></li>
		<li><a href="<?php echo $social_youtube ?>" target="_blank" class="youtube"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/moss/YouTube_Icon.svg" alt=""></a></li>
		<li><a href="mailto:<?php echo get_option('admin_email')?>" target="_blank"><img class="lazyload" data-src="<?php echo get_stylesheet_directory_uri(); ?>/img/moss/Email.svg" alt=""></a></li>

		<?php endif;?>
		</ul>
	</div>
<?php endif;?>