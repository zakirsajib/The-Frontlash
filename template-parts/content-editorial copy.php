<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FrontLash
 */

?>

<?php if( has_tag(array('editorial')) ):?>	
					
	<article id="post-<?php the_ID(); ?>" <?php post_class('col-lg-12 post-item'); ?>>
		<div class="row">
			<div class="editorial-section">
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
						<div class="col-thumb"><div class="post-thumbnail"><?php frontlash_post_thumbnail(); ?></div></div>
					</div>
				</div>
			</div>
		</div>
	</article><!-- #post-<?php the_ID(); ?> -->	
<?php endif;	