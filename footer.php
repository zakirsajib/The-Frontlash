<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package FrontLash
 */

?>

	</div><!-- #content -->
</div><!-- end parallax content -->
<div class="footer">	
	<footer id="colophon" class="site-footer clearfix padding-top padding-bottom container">
			<div class="row">
				<div class="site-info">
					<div class="col-lg-3 col-md-12">
						<?php 
							// First column: Menu
							get_template_part('inc/footer/first_column_menu');?>
					</div>
					<div class="col-lg-3 col-md-12">
						<?php 
							// Second column: Menu
							get_template_part('inc/footer/second_column_menu');?>
					</div>
					<div class="col-lg-6 col-md-12">
						<?php 
							// Footer Newsletter
							get_template_part('inc/footer/newsletter');
							// Footer Social Media
							get_template_part('inc/footer/social_media');?>
					</div>
				</div><!-- .site-info -->
		</div>
			<div class="row">
				<?php get_template_part('inc/footer/copyright');?>
			</div>
	</footer><!-- #colophon -->
</div>

<?php get_template_part('inc/footer/back_to_top');?>
</div><!-- #page -->

<?php get_template_part('inc/footer/google_font');?>

<?php do_action('footer_css'); ?>

<noscript><div id="nonjsmode" style="font-family:sans-serif;position:fixed;top:0;left:0;width:100%;z-index:9999;text-align:center;font-weight:700;font-size:120%;color:#FFF;background-color:#F7522F;padding:5px 0;">JavaScript is not enabled!</div></noscript>
<?php wp_footer(); ?>
</body>
</html>