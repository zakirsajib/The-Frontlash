<?php $shop_text = fw_get_db_post_option(2,'page-shop-text');
$shop_gallery = fw_get_db_post_option(2,'page-shop-gallery');

if($shop_text && $shop_gallery ):?>

<div class="container" style="position: relative;">
	<div class="shop-story">
			<h2><?php echo $shop_text;?></h2>
		<?php if( is_array($shop_gallery) && count($shop_gallery) > 0 ) :?>
			<div class="swiper-container-shop">
			    <div class="swiper-wrapper">
			      <?php foreach( $shop_gallery as $image ) : ?>
						<div class="swiper-slide" data-aos="slide-up" data-aos-once="false" data-aos-offset="-200" data-aos-easing="ease-in-out-sine" data-aos-duration="500"><a href="<?php the_field('gallery_image_url', $image['attachment_id']);?>" rel="noopener" target="_blank"><img class="lazyload shop-image" src="<?php echo $image['url']; ?>" srcset="<?php echo get_template_directory_uri()?>/static/dist/img/loader.svg" data-srcset="<?php echo $image['url']; ?>" alt="<?php echo $image['url']; ?>"/></a>
							<div class="shop-hover excerpt-readmore">
								<a href="<?php the_field('gallery_image_url', $image['attachment_id']);?>" rel="noopener" target="_blank">Click to Buy</a>
							</div>
						</div>
					<?php endforeach;?>
			    </div>
			    <?php if( count($shop_gallery) > 3):?>
			    	<!-- Add Arrows -->
			    	<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
			    <?php endif;?>
			</div>
		<?php endif;?>
	</div>
</div>
<?php endif;?>
<style>.shop-image.lazyload, .shop-image.lazyloading{min-height:100%;align-items:center;justify-content:center}</style>