<?php
/**
 * The template for displaying tag pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package FrontLash
 */

get_header();
?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php if ( have_posts() ) : ?>
			<div class="container-fluid">
				<header class="entry-header col-lg-6 col-lg-offset-3">
					<h1 class="entry-title"><?php single_tag_title();?></h1>
				</header><!-- .page-header -->
			</div>
			<div class="archive-style-grid tagstylegrid">
				<div class="container">
					<div class="row">
						<?php while ( have_posts() ) :
						the_post();
							get_template_part( 'template-parts/content', get_post_type() );
						endwhile;?>
					</div>
				</div>
			</div>
		<?php else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		
		echo '<div class="tag-newsletter">';
			echo '<div class="container">';
				frontlash_newsletter('home');
			echo '</div>';
		echo '</div>';
		
		
		?>
		</main><!-- #main -->
	</section><!-- #primary -->
<?php get_footer();