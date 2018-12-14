<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FrontLash
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-3 col-md-3 col-sm-6 col-xs-12 post-item'); ?>>
	
	<?php if(fw_get_db_post_option(get_the_id(),'post-video-thumbnail') || has_tag('video')):?>
		<div class="video-thumbnail">
			<div class="play-icon"><a href="<?php the_permalink()?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Play_Button.svg" alt="Video Play button"></a></div>
			<?php frontlash_post_thumbnail(); ?>
		</div>
	<?php else:?>
		<?php frontlash_post_thumbnail(); ?>
	<?php endif;?>
	
	<?php frontlash_cat_tags();?>
	
	<header class="entry-header">
		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->
	
	<div class="excerpt-readmore">
		<a href="<?php the_permalink()?>" rel="nofollow">Read More</a>
	</div><!-- .entry-summary -->
	
</article><!-- #post-<?php the_ID(); ?> -->
	