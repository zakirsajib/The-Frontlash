<?php if (defined('FW')):
	$back_to_top_button = fw_get_db_settings_option('back_to_top_button');
	if($back_to_top_button):?>
		<a href="#page" id="scrollToTop" class="scroll" title="Back to Top">
		<i class="fa fa-angle-up fa-2x" aria-hidden="true"></i></a>
	<?php endif;?>
<?php endif;?>