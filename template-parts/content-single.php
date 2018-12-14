<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FrontLash
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
	<?php if (defined('FW')):
		
		$header_style_parallax = fw_get_db_post_option(get_the_ID(),'header-style-parallax');
		$post_gallery = fw_get_db_post_option(get_the_ID(), 'post-gallery');
		
		//echo $header_style_parallax;
		if($header_style_parallax == 'no'):
			
			if( is_array($post_gallery) && count($post_gallery) > 0 ) :?>
				<div class="swiper-container-parent">
					<div class="swiper-container">
						<div class="swiper-wrapper">
							<?php foreach( $post_gallery as $image ) : ?>
								<div class="swiper-slide"><a href="<?php the_permalink()?>"><img class="lazyload" src="<?php echo $image['url']?>" srcset="<?php echo get_template_directory_uri()?>/static/dist/img/loaderHome.svg" data-srcset="<?php echo $image['url']?>" alt="<?php the_title()?>"/></a></div>
							<?php endforeach;?>
						</div>	
						<?php if( count($post_gallery) > 1):?>
						<!-- If we need pagination -->
						<div class="swiper-pagination"></div>
							<!-- If we need navigation buttons -->
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>
						<?php endif;?>
					</div>
				</div>
			<?php endif;
		
			if(fw_get_db_post_option(get_the_ID(), 'post-video')):?>
				<div class="container">
					<div class="post-meta-video">
						<div class="ratio-container">
							<div class="ratio-content">
								<?php echo fw_get_db_post_option(get_the_ID(), 'post-video');?>
							</div>
						</div>
					</div>
				</div>
			<?php endif;
			
		elseif($header_style_parallax == 'yes'):		
			if( is_array($post_gallery) && count($post_gallery) > 0 ) :?>
				<div class="swiper-container-parent" id="parallax-parent">
					<div class="swiper-container" id="parallax-container">
						<div class="swiper-wrapper" id="parallax-wrapper">
							<?php foreach( $post_gallery as $image ) : ?>
								<div class="swiper-slide"><img class="lazyload" data-src="<?php echo get_template_directory_uri(); ?>/static/dist/img/loader.svg" data-srcset="<?php echo $image['url']; ?>" alt=""/></div>
							<?php endforeach;?>
						</div>	
						<?php if( count($post_gallery) > 1):?>
						<!-- If we need pagination -->
						<div class="swiper-pagination"></div>
							<!-- If we need navigation buttons -->
							<div class="swiper-button-prev"></div>
							<div class="swiper-button-next"></div>
						<?php endif;?>
					</div>
				</div>
			<?php endif;
			
			if(fw_get_db_post_option(get_the_ID(), 'post-video')):?>
				<div class="container">
					<div class="post-meta-video" id="parallax-parent">
						<div class="ratio-container" id="parallax-container">
							<div class="ratio-content" id="parallax-wrapper">
								<?php echo fw_get_db_post_option(get_the_ID(), 'post-video');?>
							</div>
						</div>
					</div>
				</div>
			<?php endif;	
		endif;
	endif;?>
	
		
		<div class="container-fluid">
			<header class="entry-header col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
			<?php
			if ( is_singular() ) :
				frontlash_cat();
				the_title( '<h1 class="entry-title">', '</h1>' );?>
				<div class="entry-summary">
					<?php the_excerpt(); ?>					
				</div>
			<?php else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;?>
			</header><!-- .entry-header -->
		</div>
	
	
	<?php //frontlash_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'frontlash' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'frontlash' ),
			'after'  => '</div>',
		) );
		?>
		
		<?php if (defined('FW')):
		$post_meta_alignment = fw_get_db_post_option(get_the_ID(), 'post-meta-alignment');
		
		if($post_meta_alignment == 'center'):?>
			<div class="container">
				<div class="col-md-6 col-md-offset-3">
					<div class="single-custom-fields"><?php get_template_part( 'inc/custom', 'fields' ); ?></div>
					<?php if (defined('FW')):
						$post_elements = fw_get_db_settings_option('post_elements');
						if($post_elements['share']):?>
						<div class="single-social-media"><?php get_template_part( 'inc/social', 'media' ); ?></div>
						<?php endif;?>
					<?php endif;?>
					<div class="single-cat-tags"><?php frontlash_tags();?></div>
				</div>
			</div>
		<?php endif;
		if($post_meta_alignment == 'right'):?>
			<div class="container">
				<div class="col-md-6 col-md-offset-6">
					<div class="single-custom-fields"><?php get_template_part( 'inc/custom', 'fields' ); ?></div>
					<?php if (defined('FW')):
						$post_elements = fw_get_db_settings_option('post_elements');
						if($post_elements['share']):?>
						<div class="single-social-media"><?php get_template_part( 'inc/social', 'media' ); ?></div>
						<?php endif;?>
					<?php endif;?>
					<div class="single-cat-tags"><?php frontlash_tags();?></div>
				</div>
			</div>
		<?php endif; endif;?>
		
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->

<style>
.section-reveal-container{position:relative;width:100%;clear:both}.full-reveal{position:relative;left:50%;width:100vw}.full-reveal .reveal-image .reveal-fixed-wrap{clip:rect(0,auto,auto,0);position:absolute;top:0;left:0;width:100%;height:100%}.full-reveal .reveal-image .reveal-fixed-wrap .reveal-fixed{position:fixed;display:block;top:0;width:100%;max-width:1800px;height:100%;-webkit-transform:translateZ(0);transform:translateZ(0)}.full-reveal .reveal-image .reveal-fixed-wrap .reveal-fixed img{position:absolute;top:0;left:0;right:0;bottom:0;width:65%;margin:auto;overflow-x:hidden}.section-container img{max-width:100%}.full-reveal .reveal-image.landscape{max-width:1800px;margin:0 auto}.full-reveal .reveal-image{position:relative;left:-50vw;width:100%;height:100vh}.img-parallax{position:relative;margin-top:-250px;z-index:1}@media only screen and (min-width:761px){.section-container.full-width{width:720px}}@media only screen and (min-width:1221px){.section-container.section-asset-container{margin:48px auto}}@media (orientation:landscape){.section-reveal-container .full-reveal .reveal-image.landscape{display:block}}@media (orientation:landscape){.section-reveal-container .full-reveal .reveal-image.portrait{display:none}}@media only screen and (max-width:768px){.full-reveal .reveal-image .reveal-fixed-wrap .reveal-fixed img{top:0;width:100%}.full-reveal .reveal-image{height:40vh}.img-parallax{margin-top:-150px}.img-parallax>img{width:180px}}
</style>
