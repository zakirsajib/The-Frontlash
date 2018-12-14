<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FrontLash
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if (defined('FW')):
			get_template_part( 'inc/home/home', 'header' );
		endif;	
		
		//if (defined('FW')):
		//	$home_story_tag = fw_get_db_settings_option('home_story_sorting');
		//	$tag = get_term_by('slug', $home_story_tag, 'post_tag');
		//	$tag_id = $tag->term_id;
		//endif;
		
		$args = array( 
			'posts_per_page' => -1, 
			'post_type' => 'post',
			'order'	=> 'DESC',
			'post__not_in' => get_option("sticky_posts")
		);
		$the_query = new WP_Query( $args ); 
		
		if ( $the_query->have_posts() ) :
		
		echo '<div class="home-style-grid">';
			echo '<div class="container">';
				echo '<div class="row">';
					while ( $the_query->have_posts() ) :
						$the_query->the_post();
						get_template_part( 'template-parts/content', 'home' );
					endwhile; // End of the loop.
				echo '</div>';
			echo '</div>';
		echo '</div>';
		
		
		
		//echo '<div class="container">';
			//frontlash_infinite_scroll();
			//the_posts_navigation();
		//echo '</div>';
		
		// Reset Query
		wp_reset_postdata();
		
		else:
			get_template_part( 'template-parts/content', 'none' );
		endif;		
		
		
		// Newsletter
		echo '<div class="home-newsletter">';
			echo '<div class="container">';
				frontlash_newsletter('home');
			echo '</div>';
		echo '</div>';

		// Show/hide Shop
		if(defined('FW')):
			$shop_display_choice = fw_get_db_settings_option('shop_display_choice');
			if($shop_display_choice == 'home_page' || $shop_display_choice == 'both_h_s'):
				echo '<div class="home_shop">';	
					get_template_part( 'inc/home/shop', 'story' );
				echo '</div>';
			endif;
		endif;
		
		
		// Instagram
		if (defined('FW')):
		$instagram_id = fw_get_db_settings_option('instagram_id');
		
		if($instagram_id):
		
			echo '<div class="home-instagram-feed">';
				echo '<div class="container">';
					echo '<div class="row">';
						echo '<h2>@'. $instagram_id. '</h2>';
						echo do_shortcode('[instagram-feed]');
					echo '</div>';
				echo '</div>';
			echo '</div>';
		endif;endif;		
		
		?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
