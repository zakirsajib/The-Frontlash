<?php 
	
	$category = get_queried_object();
	
	// Get current category
	$category_id = $category->term_id;
	
	$tag_args=array(
	    'posts_per_page' => 1, 
	    'cat'	=> $category_id,
	    'tag' => 'feature'
	);
	
	// Query based on specific tag: Feature
	$the_query = new WP_Query($tag_args);
	if ( $the_query->have_posts() ):
	    while ( $the_query->have_posts() ):
	        $the_query->the_post();
	
	$cat_gallery = fw_get_db_post_option(get_the_id(),'post-gallery');?>	

<header class="page-header">
	
	<?php if( is_array($cat_gallery) && count($cat_gallery) > 0 ) :?>
	<div class="swiper-container-parent">
		<div class="swiper-container">
			<div class="swiper-wrapper">
				<?php foreach( $cat_gallery as $image ) : ?>
					<div class="swiper-slide visible-lg desktop-mode"><a href="<?php the_permalink()?>"><img class="lazyload" src="<?php echo $image['url']?>" srcset="<?php echo get_template_directory_uri()?>/static/dist/img/loaderSingle.svg" data-srcset="<?php echo $image['url']?>" alt="<?php the_title()?>"/></a></div>
					<div class="swiper-slide visible-sm tablet-mode"><a href="<?php the_permalink()?>"><img class="lazyload" src="<?php echo $image['url']?>" srcset="<?php echo get_template_directory_uri()?>/static/dist/img/loaderSingle.svg" data-srcset="<?php echo $image['url']?>" alt="<?php the_title()?>"/></a></div>
					<div class="swiper-slide visible-xs mobile-mode"><a href="<?php the_permalink()?>"><img class="lazyload" src="<?php echo $image['url']?>" srcset="<?php echo get_template_directory_uri()?>/static/dist/img/loaderSingleMobile.svg" data-srcset="<?php echo $image['url']?>" alt="<?php the_title()?>"/></a></div>
					
				<?php endforeach;?>
			</div>	
			<?php if( count($cat_gallery) > 1):?>
			<!-- If we need pagination -->
			<div class="swiper-pagination"></div>
				<!-- If we need navigation buttons -->
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			<?php endif;?>
		</div>
	</div>
	<?php endif;
	
	if(fw_get_db_post_option(get_the_id(),'post-video-thumbnail')):?>
	<div class="post-video-thumbnail">
		<div class="play-icon"><a href="<?php the_permalink()?>"><img class="lazyload" src="<?php echo get_stylesheet_directory_uri(); ?>/img/Play_Button.svg" alt="Video Play button"></a></div>
		<a href="<?php the_permalink()?>"><img class="lazyload" srcset="<?php echo fw_get_db_post_option(get_the_id(),'post-video-thumbnail')['url']?>" src="<?php echo get_template_directory_uri(); ?>/static/dist/img/loader.svg" alt="<?php the_title()?>"></a>
	</div>
	<?php endif; ?>
</header><!-- .page-header -->

<div class="container-fluid">
	<header class="entry-header col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-12 col-xs-12">
		<?php
			frontlash_cat_tags();
			the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );?>
			<div class="entry-summary"><?php the_excerpt(); ?></div>
			<div class="excerpt-readmore"><a href="<?php the_permalink()?>" rel="nofollow">Read More</a></div>
	</header>
</div>
	
	<?php endwhile; 
	endif; 
	wp_reset_postdata();