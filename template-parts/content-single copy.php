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
		$post_gallery = fw_get_db_post_option(get_the_ID(), 'post-gallery');
		
		if( is_array($post_gallery) && count($post_gallery) > 0 ) :?>
			<div class="swiper-container-parent">
				<div class="swiper-container">
					<div class="swiper-wrapper">
						<?php foreach( $post_gallery as $image ) : ?>
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
		
		if(fw_get_db_post_option(get_the_ID(), 'post-video')):?>
			<div class="post-meta-video">
				<div class="ratio-container">
					<div class="ratio-content">
						<?php echo wp_oembed_get(fw_get_db_post_option(get_the_ID(), 'post-video'));?>
					</div>
				</div>
			</div>
		<?php endif;
	endif;?>
	
		<header class="entry-header">
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
		<?php if(has_tag(array('feature','video'))):?>
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
		<?php elseif(has_tag(array('interview','editorial'))):?>
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
		<?php else:?>
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
		<?php endif;?>
		
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
