<?php $category = get_queried_object();
	
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
	        $the_query->the_post();?>
	        <header class="entry-header col-lg-6 col-lg-offset-3">
				<?php
					frontlash_cat_tags();
					the_title( '<h1 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h1>' );?>
					<div class="entry-summary"><?php the_excerpt(); ?></div>
					<div class="excerpt-readmore"><a href="<?php the_permalink()?>" rel="nofollow">Read More</a></div>
			</header>
	    <?php endwhile;    
	else:
	    // no posts found
	endif;
	/* Restore original Post Data */
	wp_reset_postdata();