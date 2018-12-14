<?php 
	
	$facts_cat_gallery = fw_get_db_settings_option('facts-cat-gallery');
	
	if( is_array($facts_cat_gallery) && count($facts_cat_gallery) > 0 ) :?>
	<div class="swiper-container-parent">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php foreach( $facts_cat_gallery as $image ) : ?>
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
	
if(fw_get_db_settings_option('facts-cat-video')):?>
	<div class="post-meta-video">
		<div class="ratio-container">
			<div class="ratio-content">
				<?php echo wp_oembed_get(fw_get_db_settings_option('facts-cat-video'));?>
			</div>
		</div>
	</div>
<?php endif;