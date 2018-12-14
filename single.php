<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package FrontLash
 */

get_header();
?>

	<div id="primary" class="content-area single-template">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'single' );

			
			// show/hide shop carousel
			if (defined('FW')):
				$shop_display_choice = fw_get_db_settings_option('shop_display_choice');
				if($shop_display_choice == 'story_page' || $shop_display_choice == 'both_h_s'):
					get_template_part( 'inc/templates/shop', 'story' );
				endif;
			endif;
			
			
			echo '<div class="container">';
			
			// Navigation			
			if (defined('FW')):
			$post_elements = fw_get_db_settings_option('post_elements');
				if($post_elements['prev_next']):
					the_post_navigation( array(
			            'prev_text'	=> __( '<img src="'. get_template_directory_uri() . '/img/prev.svg" alt="">&nbsp;&nbsp;&nbsp;Previous' ),
			            'next_text'	=> __( 'Next&nbsp;&nbsp;&nbsp;<img src="'. get_template_directory_uri() . '/img/next.svg" alt="">' ),
			            'in_same_term'	=> false,
			            'taxonomy'	=> __( 'post_tag' ),
			            'screen_reader_text' => __( 'Continue Reading' ),
					) );
				endif;
			endif;
						
			// Newsletter
			if (defined('FW')):
				$post_elements = fw_get_db_settings_option('post_elements');
					if($post_elements['newsletter']):
						frontlash_newsletter('single');
					endif;
			endif;
				
			echo '</div>';	
				
			
				
				
			// Related Posts
			if (defined('FW')):
				$related_posts_display = fw_get_db_settings_option('related_posts_display');
				if($related_posts_display == 'on'):
					frontlash_related_posts();
				endif;
			endif;
			
			// Comments
			if (defined('FW')):
			$post_elements = fw_get_db_settings_option('post_elements');
				if($post_elements['comments']):
					echo '<div class="container">';	
						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;
					echo '</div>';
				endif;
			endif;

		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->
	
<?php
get_footer();
