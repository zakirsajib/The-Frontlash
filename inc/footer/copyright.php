<?php if (defined('FW')):
$copyright_text = fw_get_db_settings_option('copyright_text');
	if($copyright_text):?>
	<div class="site-copyright col-lg-12 col-md-12">
		<?php echo $copyright_text;?>
	</div>
	<?php else:?>
	<div class="site-copyright col-lg-12 col-md-12"> 
		<?php
			$site_name = get_bloginfo( 'name' );
			$current_year = date('Y');
			printf( 'Copyright %s %s.', $site_name, $current_year);
			printf( esc_html__( ' All Rights Reserved.', 'frontlash' ));
			?>
	</div>
	<?php endif;?>
<?php endif;?>