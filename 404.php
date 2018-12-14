<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package FrontLash
 */

get_header();
?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php if (!defined('FW')) return; // prevent fatal error when the framework is not active 
				$four_zero_four_title = fw_get_db_settings_option('404_title');
				$four_zero_four_text = fw_get_db_settings_option('404_text');
				$four_zero_four_image = fw_get_db_settings_option('404_image');
			?>
			<section class="error-404 not-found padding container">
				<div class="col-lg-12 col-md-12">
					<?php if($four_zero_four_image):?>
						<img src="<?php echo $four_zero_four_image['url'];?>" alt="404 Error Image" class="aligncenter"/>
					<?php endif;?>
					
					<?php if($four_zero_four_title):?>
						<header class="page-header">
						<h1 class="page-title"><?php echo $four_zero_four_title;?></h1>
						</header>
					<?php else:?>
						<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'frontlash' ); ?></h1>
						</header><!-- .page-header -->
					<?php endif;?>
					
					<?php if($four_zero_four_text):?>
						<div class="page-content text-center">
							<p><?php echo $four_zero_four_text;?></p>
						</div><!-- .page-content -->
					<?php else:?>
						<div class="page-content text-center">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'frontlash' ); ?></p>
						</div><!-- .page-content -->
					<?php endif;?>
				</div>
			</section><!-- .error-404 -->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer();