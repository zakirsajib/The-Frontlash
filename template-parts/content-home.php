<?php
/**
 * Template part for displaying page content in frontpage.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FrontLash
 */

?>

<?php 
	/*
	*	If width of featured image is smaller than height then its a portrait image 
	*	and we will set column half width.
	*
	*/
	
		$tn_id = get_post_thumbnail_id( $post->ID );
		$img = wp_get_attachment_image_src( $tn_id, 'full');
		$width = $img[1];
		$height = $img[2];	
		
	
 if (has_post_thumbnail($post->ID )):
 
	 if ($width < $height):?>
	 <div class="col-lg-12">
		<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-6 col-md-6 col-sm-6 post-item portrait'); ?>>
			<div class="container-fluid">
				<div class="title-thumb">
					<div class="col-title">
						<?php frontlash_cat_tags();?>	
						<header class="post-entry-header">
							<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
						</header><!-- .entry-header -->
						<div class="entry-summary">
							<?php the_excerpt();?>
						</div>	
						<div class="excerpt-readmore">
							<a href="<?php the_permalink()?>" rel="nofollow">Read More</a>
						</div>
					</div>
					<div class="col-thumb">
						<?php if(fw_get_db_post_option(get_the_id(),'post-video-thumbnail') || has_tag('video')):?>
							<div class="video-thumbnail" data-aos="fade-up" data-aos-once="false" data-aos-offset="120" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
								<a href="<?php the_permalink()?>"><div class="play-icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Play_Button.svg" alt="Video Play button" class="lazyload"></div></a>
								<?php frontlash_post_thumbnail(); ?>
							</div>
						<?php else:?>
							<div class="post-thumbnail" data-aos="fade-up" data-aos-once="false" data-aos-offset="120" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
								<?php frontlash_post_thumbnail(); ?>
							</div>
						<?php endif?>
					</div>
				</div>
			</div>
		</article><!-- #post-<?php the_ID(); ?> -->
	 </div>
	<?php else:
		/*
			If width of featured image is bigger than height then its a landscape image 
			and we will set column full width
		*/
	?>		
		<div class="row landscape">	
			<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-12 post-item'); ?>>
				<div class="landscape-section">	
					<div class="container">	
						<div class="title-thumb">
							<div class="col-title">
								<?php frontlash_cat_tags();?>	
								<header class="post-entry-header">
									<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
								</header><!-- .entry-header -->
								<div class="entry-summary">
									<?php the_excerpt();?>
								</div>	
								<div class="excerpt-readmore">
									<a href="<?php the_permalink()?>" rel="nofollow">Read More</a>
								</div>
							</div>
							<div class="col-thumb">
								<?php if(fw_get_db_post_option(get_the_id(),'post-video-thumbnail') || has_tag('video')):?>
									<div class="video-thumbnail" data-aos="fade-up" data-aos-once="false" data-aos-offset="120" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
										<a href="<?php the_permalink()?>"><div class="play-icon">
											<img class="lazyload" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Play_Button.svg" alt="Video Play button"></div></a>
										<?php frontlash_post_thumbnail_large(); ?>
									</div>
								<?php else:?>
									<div class="post-thumbnail" data-aos="fade-up" data-aos-once="false" data-aos-offset="120" data-aos-easing="ease-in-out" data-aos-anchor-placement="top-bottom">
										<?php frontlash_post_thumbnail_large(); ?>
									</div>
								<?php endif;?>
							</div>
						</div>
					</div>
				</div>
			
			<div class="home-newsletter">
				<div class="container">
					<?php frontlash_newsletter('home');?>
				</div>
			</div>				
			</article><!-- #post-<?php the_ID(); ?> -->	
		</div>
	<?php endif;
endif;?>