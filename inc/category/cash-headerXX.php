<?php 
	
	$cash_cat_gallery = fw_get_db_settings_option('cash-cat-gallery');

	if( is_array($cash_cat_gallery) && count($cash_cat_gallery) > 0 ) :?>
	<div class="swiper-container-parent">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php foreach( $cash_cat_gallery as $image ) : ?>
					<div class="swiper-slide"><img src="<?php echo $image['url']; ?>" alt=""/></div>
				<?php endforeach;?>
			</div>	
			<!-- If we need pagination -->
			<div class="swiper-pagination"></div>
	
			<!-- If we need navigation buttons -->
			<div class="swiper-button-prev"></div>
			<div class="swiper-button-next"></div>
		</div>
	</div>
<?php endif;
	
if(fw_get_db_settings_option('cash-cat-video')):?>
	<div class="post-meta-video">
		<div class="ratio-container">
			<div class="ratio-content">
				<?php echo wp_oembed_get(fw_get_db_settings_option('cash-cat-video'));?>
			</div>
		</div>
	</div>
<?php endif;