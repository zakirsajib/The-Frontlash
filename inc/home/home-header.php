<?php 
	
	//$home_story_tag = fw_get_db_settings_option('home_story_sorting');
	
	$sticky = get_option( 'sticky_posts' );

	rsort( $sticky );
	
	$sticky = array_slice( $sticky, 0, 1 );
	
	$tag_args=array(
	    'posts_per_page' => 1, 
	    //'tag' => $home_story_tag,
	    'post__in' => $sticky, 
	    'ignore_sticky_posts' => 1
	);
	
	$the_query = new WP_Query($tag_args);
	
	if ( isset($sticky[0]) ):
	
	if ( $the_query->have_posts() ):
	    while ( $the_query->have_posts() ):
	        $the_query->the_post();
	
	$page_gallery = fw_get_db_post_option(get_the_id(), 'post-gallery');?>

<header class="page-header">

	<?php if( is_array($page_gallery) && count($page_gallery) > 0 ) :?>
	<div class="swiper-container-parent">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php foreach( $page_gallery as $image ) : ?>
					<div class="swiper-slide"><a href="<?php the_permalink()?>"><img class="lazyload" src="<?php echo $image['url']?>" srcset="<?php echo get_template_directory_uri()?>/static/dist/img/loaderHome.svg" data-srcset="<?php echo $image['url']?>" alt="<?php the_title()?>"/></a></div>
				<?php endforeach;?>
			</div>	
			<?php if( count($page_gallery) > 1):?>
			<!-- If we need pagination -->
			<div class="swiper-pagination"></div>
				<!-- If we need navigation buttons -->
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			<?php endif?>
		</div>
	</div>

<?php endif;
	
if(fw_get_db_post_option(get_the_id(),'post-video-thumbnail')):?>
	<div class="post-video-thumbnail">
		<div class="play-icon"><a href="<?php the_permalink()?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/Play_Button.svg" alt="Video Play button"></a></div>
		<a href="<?php the_permalink()?>"><img class="lazyload" src="<?php echo fw_get_db_post_option(get_the_id(),'post-video-thumbnail')['url']?>" data-srcset="<?php echo fw_get_db_post_option(get_the_id(),'post-video-thumbnail')['url']?>" srcset="<?php echo get_template_directory_uri()?>/static/dist/img/loaderHome.svg" alt="<?php the_title()?>"></a>
	</div>
<?php endif;?>

</header><!-- .page-header -->

<div class="container-fluid">
	<?php // Pull selected tag or sticky article ?>
		<header class="entry-header col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
			<?php
				frontlash_cat_tags();
				the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );?>
				<div class="entry-summary"><?php the_excerpt(); ?></div>
				<div class="excerpt-readmore"><a href="<?php the_permalink()?>" rel="nofollow">Read More</a></div>
		</header>
</div>	
	
	<?php endwhile; 
	endif; endif;
	wp_reset_postdata();?>