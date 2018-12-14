<?php if (defined('FW')):
	$page_loader = fw_get_db_settings_option('page_loader');
	$page_loader_style = fw_get_db_settings_option('page_loader_style');
	
	if($page_loader == 'on'):?>
	<div class="loader">
		<div class="spinner">
			<?php if($page_loader_style == 'cube-folding'):?>
				<div class="preloader-1">
				  <div>Loading</div>
				  <span class="line line-1"></span>
				  <span class="line line-2"></span>
				  <span class="line line-3"></span>
				  <span class="line line-4"></span>
				  <span class="line line-5"></span>
				  <span class="line line-6"></span>
				  <span class="line line-7"></span>
				  <span class="line line-8"></span>
				  <span class="line line-9"></span>
				</div>
			<?php elseif($page_loader_style == 'default-loader'):?>
				<div class="default-loader"></div>
				
			<?php elseif($page_loader_style == 'frontlash-loader'):?>
				<div class="frontlash-loader">
					<div>F</div>
					<span class="dot animated flash infinite" style="font-size:83px;line-height:1.5;position:absolute;left:15px;top:0">.</span>
				</div>
		    <?php endif?>
    	</div>
	 </div>   
	<?php endif;
endif;?>