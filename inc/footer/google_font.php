<?php 
	
	if (!defined('FW')) return; // prevent fatal error when the framework is not active
	
	$body_font_select = fw_get_db_settings_option('body_font_select');
	$headings_font_select_one = fw_get_db_settings_option('headings_font_select_one');
	$menu_font_select_one = fw_get_db_settings_option('menu_font_select_one');
	
	
if( ($body_font_select['font_select'] == 'google_font') || 
	$headings_font_select_one['headings_font_select'] == 'headings_google_font' || 
	$menu_font_select_one['menu_font_select'] == 'menu_google_font'):?>
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.5.18/webfont.js"></script>
		
		<?php 
		// Body Google font
		if($body_font_select['font_select'] == 'google_font'):
			$google_body_font_name = $body_font_select['google_font']['styling_body']['family'];?>
		
			<script>
			  WebFont.load({
			    google: {
			      families: ['<?php echo $google_body_font_name;?>:100,200,300,400,500,600,700,800,900']
			    }
			  });
			</script>
		<?php endif;
	
	
		// Headings Google font    
		if($headings_font_select_one['headings_font_select'] == 'headings_google_font'):
			$google_font_name = $headings_font_select_one['headings_google_font']['styling_headings']['family'];?>
			<script>
			  WebFont.load({
			    google: {
			      families: ['<?php echo $google_font_name;?>:100,200,300,400,500,600,700,800,900']
			    }
			  });
			</script>
		<?php endif;
		
		// Menu type (nav,tags,label) Google Font
		if($menu_font_select_one['menu_font_select'] == 'menu_google_font'):
			$google_menu_font_name = $menu_font_select_one['menu_google_font']['styling_menu']['family'];?>
			<script>
			  WebFont.load({
			    google: {
			      families: ['<?php echo $google_menu_font_name;?>:100,200,300,400,500,600,700,800,900']
			    }
			  });
			</script>
		<?php endif;
endif;?>