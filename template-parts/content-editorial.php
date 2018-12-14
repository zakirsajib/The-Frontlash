<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FrontLash
 */

?>

<?php 
	
	/*
		If width of featured image is bigger than height then its a landscape image 
		and we will set column full width
	*/
	
		$tn_id = get_post_thumbnail_id( $post->ID );
		$img = wp_get_attachment_image_src( $tn_id, $size );
		$width = $img[1];
		$height = $img[2];
	
	
if (has_post_thumbnail($post->ID )):
	if ($width > $height):?>				
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
<?php endif; endif;