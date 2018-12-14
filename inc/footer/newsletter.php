<?php if (defined('FW')):
	$footer_newsletter = fw_get_db_settings_option('footer_newsletter');
	if($footer_newsletter == 'on'):
		if ( is_active_sidebar( 'sidebar-4' ) ): // mailchimp form
				dynamic_sidebar( 'sidebar-4' );
		endif;
	endif;
endif;?>