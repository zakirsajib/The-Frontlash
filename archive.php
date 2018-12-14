<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FrontLash
 */

get_header();
?>

	<div id="primary" class="content-area v">
		<main id="main" class="site-main">

			<?php if (defined('FW')):
				get_template_part( 'inc/category/feature', 'header' );
			endif;	
						
			if ( have_posts() ) :
			/* Start the Loop */
			
			// Alter the main loop; excluding feature tag, its ID is 12
			global $wp_query;
			$args = array_merge( $wp_query->query_vars, array( 'tag__not_in' => array(12)) );
			query_posts( $args);
			
			
			echo '<div class="archive-style-grid">';
				echo '<div class="container">';
					echo '<div class="row">';
						while ( have_posts() ) :
						the_post();
							get_template_part( 'template-parts/content', get_post_type() );
						endwhile;
					echo '</div>'; 
				echo '</div>'; 
			echo '</div>';
				
				// Loop through only editorial post
				//while ( have_posts() ) :
				//	the_post();
				//	get_template_part( 'template-parts/content', 'editorial' );
				//endwhile;
			
			
			
			
			//echo '<div class="container">';
			//	frontlash_infinite_scroll();
			//	the_posts_navigation();
			//echo '</div>';
			
			
			// Reset Query
			wp_reset_query();
			
			
			
			echo '<div class="cat-newsletter">';
				echo '<div class="container">';
					if(is_category(array(4,'cash-all-the-deals'))):
						frontlash_newsletter('cash');
					elseif(is_category(array(5,'progress-a-new-way'))):
						frontlash_newsletter('progresscat');
					elseif(is_category(array(7,'fashion-get-inspired' ))):
						frontlash_newsletter('fashioncat');
					endif;
				echo '</div>';
			echo '</div>';
			
			
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();