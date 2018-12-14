<?php 
function _action_theme_wp_print_styles() {
    if (!defined('FW')) return; // prevent fatal error when the framework is not active
    
ob_start(); 
/**
 * LOGO SIZE
 * @package FrontLash
 */
 
	$header_logo_size = fw_get_db_settings_option('header_logo_size');

		$custom_css = "header nav.navbar.navbar-fixed .logo-display {width: {$header_logo_size}px}";
		
		
		//'header nav.navbar.navbar-fixed .logo-display { '
		//		'width: '. esc_html($header_logo_size) .'px; '
		//	'}'

/**
 * BODY TYPOGRAPHY
 * @package FrontLash
 */

	
	$body_font_select = fw_get_db_settings_option('body_font_select');
	
	if($body_font_select['font_select'] == 'google_font'):
	     $google_body_font_name = $body_font_select['google_font']['styling_body']['family'];
	     
	     $google_body_font_size = $body_font_select['google_font']['styling_body']['size'];
	     
	     echo '<style>'
         . 'body { '
         . 'font-family: "'. esc_html($google_body_font_name) .'", "Georgia"; '
         . 'font-size: '. esc_html($google_body_font_size) .'px; '
         . '}'
         
         . 'article .entry-content p,
         	.newsletter .newsletter-message p,
         	.comments-area .comment-respond textarea,
         	.comments-area .comment-respond input[type="text"],
         	.comments-area .comment-respond input[type="email"] {'
         	. 'font-family: "'. esc_html($google_body_font_name) .'", "Georgia"; '
         . '}'
         
         . 'strong, b,
         	.single-template article .entry-content strong, 
		 	.single-template article .entry-content b  {'
         	. 'font-family: "'. esc_html($google_body_font_name) .'", "Georgia"; '
         . '}'
         
         . '</style>';

    elseif($body_font_select['font_select'] == 'frontlash_font'):
	     $frontlash_body_font_name = $body_font_select['frontlash_font']['frontlash_body_font']; 
	     
	     $frontlash_body_font_name_bold = $body_font_select['frontlash_font']['frontlash_body_bold_font'];
		 		 		 
		 echo '<style>'
         . 'body { '
         	. 'font-family: "'. esc_html($frontlash_body_font_name) .'", "Georgia"; '
         . '}'
         
         . 'article .entry-content p, 
         	.newsletter .newsletter-message p,
         	.comments-area .comment-respond textarea,
         	.comments-area .comment-respond input[type="text"],
         	.comments-area .comment-respond input[type="email"] {'
         	. 'font-family: "'. esc_html($frontlash_body_font_name) .'", "Georgia"; '
         . '}'
         
         . 'strong, b, 
         	.single-template article .entry-content strong, 
		 	.single-template article .entry-content b {'
         	. 'font-family: "'. esc_html($frontlash_body_font_name_bold) .'", "Georgia"; '
         . '}'
         
         . '</style>';
     
    endif;
     
     


/**
 * HEADING TYPOGRAPHY
 * @package FrontLash
 */

     
     $headings_font_select_one = fw_get_db_settings_option('headings_font_select_one');
         
     if($headings_font_select_one['headings_font_select'] == 'headings_frontlash_font'):
	     $frontlash_font_name = $headings_font_select_one['headings_frontlash_font']['main_headings_frontlash_font'];
	     
	     
	     echo '<style>'
    		. 'h1, h2, h3, h4, h5, h6, 
    		.related-article h2.related-article-title,
	         .comments-area .comment-list li article footer.comment-meta,
	         .comments-area .comment-list li article footer.comment-meta .comment-metadata a,
	         .comments-area .comment-list li article .reply a,
	         .comments-area .comment-respond .comment-reply-title small,
	         .comments-title,
    		.home-style-grid article header.post-entry-header .entry-title a,
    		.single-template article .entry-content h2,
    		article header.entry-header .entry-title,
    		.archive-style-grid article header.post-entry-header .entry-title a, 
    		.archive header.entry-header .entry-title,
    		.single-template article header.entry-header .entry-title,
    		.footer .footer-widget-title,
    		.home header.entry-header .entry-title, 
    		article header.entry-header .entry-title,
    		.nf-form-cont .nf-field-label label,
			.archive header.entry-header .entry-title,
			.single-template article header.entry-header .entry-title,
			.search .search-template .search-style-grid article header.entry-header .entry-title,
    		.newsletter .newsletter-message h4 {'
				. 'font-family: "'. $frontlash_font_name .'", "Arial"; '
			. '}'
			. '</style>';	     
     
    elseif($headings_font_select_one['headings_font_select'] == 'headings_google_font'):
	     
	     $google_font_name = $headings_font_select_one['headings_google_font']['styling_headings']['family'];
	     $google_font_weight = $headings_font_select_one['headings_google_font']['styling_headings']['variation'];
	     
	     
	     echo '<style>'
	         . 'h1, h2, h3, h4, h5, h6, 
	         .related-article h2.related-article-title,
	         .comments-area .comment-list li article footer.comment-meta,
	         .comments-area .comment-list li article footer.comment-meta .comment-metadata a,
	         .comments-area .comment-list li article .reply a,
	         .comments-area .comment-respond .comment-reply-title small,
	         .comments-title,
	         .home-style-grid article header.post-entry-header .entry-title a,
	         .single-template article .entry-content h2,
	         .archive-style-grid article header.post-entry-header .entry-title a, 
	         .archive header.entry-header .entry-title,
	         article header.entry-header .entry-title,
	         .single-template article header.entry-header .entry-title,
	         .footer .footer-widget-title,
	         .nf-form-cont .nf-field-label label,
	         .home header.entry-header .entry-title, 
    		article header.entry-header .entry-title,
			.archive header.entry-header .entry-title,
			.single-template article header.entry-header .entry-title,
			.search .search-template .search-style-grid article header.entry-header .entry-title,
	         .newsletter .newsletter-message h4 { '
	         . 'font-family: "'. esc_html($google_font_name) .'", "Arial"; '
	         . 'font-weight: '. esc_html($google_font_weight) .'; '
	         . '}'
	         . '</style>';
     endif;
    
    


/**
 * MENU TYPOGRAPHY
 * @package FrontLash
 */

    
    $menu_font_select_one = fw_get_db_settings_option('menu_font_select_one');
     
	if($menu_font_select_one['menu_font_select'] == 'menu_google_font'):
	    
	    $google_menu_font_name = $menu_font_select_one['menu_google_font']['styling_menu']['family'];
	    
	    echo '<style>'
	    	. '	nav.navbar ul.nav>li>a,
	    		#header_top_left ul>li>a,
	    		#mobile_header_top_left ul>li>a,
	    		.footer .widget_nav_menu .menu-footer-category-menu-container ul li a, 
	    		.footer .widget_nav_menu .menu-footer-menu-container ul li a,
	    		.archive .excerpt-readmore a,
	    		.archive-style-grid article .excerpt-readmore a,
	    		.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links a, 
	    		.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links a, 
	    		.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links .tags-links,
	    		.single-template article .entry-content h4, 
	    		.single-template article .entry-content h5, 
	    		.single-template article .entry-content h6,
	    		.single-template article .single-cat-tags .cat-tags-links .frontlash-cat-links, 
	    		.single-template article .single-cat-tags .cat-tags-links .frontlash-tags-links,
	    		.single-template article header.entry-header .cat-tags-links .frontlash-cat-links a, 
	    		.single-template article header.entry-header .cat-tags-links .frontlash-tags-links a,
	    		.newsletter input[type="submit"],
	    	.related-article .related-article-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links, 
	    	.related-article .related-article-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links,
	    	.related-article .related-article-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links a, 
	    	.related-article .related-article-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links a,
	    	.related-article .related-article-style-grid article .excerpt-readmore a,
	    	.shop-hover a,
	    	.comments-area .comment-respond input[type="submit"],
	    	.footer input[type="submit"],
	    	.filter-btn,
	    	.home .excerpt-readmore a,
	    	.home header.entry-header .cat-tags-links .frontlash-cat-links a, 
	    	.home header.entry-header .cat-tags-links .frontlash-tags-links a, 
	    	.home header.entry-header .cat-tags-links .frontlash-tags-links .tags-links,
	    	.home-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links a, 
	    	.home-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links a, 
	    	.home-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links .tags-links,
	    	.home-style-grid article .excerpt-readmore a,
	    	.search .search-template .search-style-grid article .frontlash-cat-links a, 
	    	.search .search-template .search-style-grid article .frontlash-tags-links a,
	    	.search .search-template .search-style-grid article .excerpt-readmore a,
	    	.search .search-template .search-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links, 
	    	.search .search-template .search-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links,
	    	.nf-form-cont .submit-container input[type=button],
	    	.full-menu ul.full-nav li a { '
	    		. 'font-family: "'. esc_html($google_menu_font_name) .'", "Arial Narrow"; '
	    		
	    	. '}'	
	    
	    . '</style>'; 
	     
	     
	elseif($menu_font_select_one['menu_font_select'] == 'menu_frontlash_font'):
		
		$frontlash_menu_font_name = $menu_font_select_one['menu_frontlash_font']['main_menu_frontlash_font'];
	    
	    echo '<style>'
	    	. '	nav.navbar ul.nav>li>a,
	    		#header_top_left ul>li>a,
	    		#mobile_header_top_left ul>li>a,
	    		.footer .widget_nav_menu .menu-footer-category-menu-container ul li a, 
	    		.footer .widget_nav_menu .menu-footer-menu-container ul li a,
	    		.archive .excerpt-readmore a,
	    		.archive-style-grid article .excerpt-readmore a,
	    		.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links a, 
	    		.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links a, 
	    		.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links .tags-links,
	    		.archive header.entry-header .cat-tags-links .frontlash-tags-links a,
	    		.archive header.entry-header .cat-tags-links .frontlash-cat-links a,
	    		.single-template article header.entry-header .cat-tags-links .frontlash-cat-links a, 
	    		.single-template article header.entry-header .cat-tags-links .frontlash-tags-links a,
	    		.single-template article .entry-content h4, 
	    		.single-template article .entry-content h5, 
	    		.single-template article .entry-content h6,
	    		.single-template article .single-cat-tags .cat-tags-links .frontlash-cat-links, 
	    		.single-template article .single-cat-tags .cat-tags-links .frontlash-tags-links,
	    		.newsletter input[type="submit"],
	    	.related-article .related-article-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links, 
	    	.related-article .related-article-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links,
	    	.related-article .related-article-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links a, 
	    	.related-article .related-article-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links a,
	    	.related-article .related-article-style-grid article .excerpt-readmore a,
	    	.shop-hover a,
	    	.comments-area .comment-respond input[type="submit"],
	    	.footer input[type="submit"],
	    	.filter-btn,
	    	.home .excerpt-readmore a,
	    	.home header.entry-header .cat-tags-links .frontlash-cat-links a, 
	    	.home header.entry-header .cat-tags-links .frontlash-tags-links a, 
	    	.home header.entry-header .cat-tags-links .frontlash-tags-links .tags-links,
	    	.home-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links a, 
	    	.home-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links a, 
	    	.home-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links .tags-links,
	    	.home-style-grid article .excerpt-readmore a,
	    	.search .search-template .search-style-grid article .frontlash-cat-links a, 
	    	.search .search-template .search-style-grid article .frontlash-tags-links a,
	    	.search .search-template .search-style-grid article .excerpt-readmore a,
	    	.search .search-template .search-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links, 
	    	.search .search-template .search-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links,
	    	.nf-form-cont .submit-container input[type=button],
	    	.full-menu ul.full-nav li a { '
	    		. 'font-family: "'. esc_html($frontlash_menu_font_name) .'", "Arial Narrow"; '
	    		
	    	. '}'	
	    
	    . '</style>';
	
	endif;
    
    
 
 
 /**
 * TITLEBAR
 * @package FrontLash
 */    

    $titlebar_title_size = fw_get_db_settings_option('titlebar_title_size');
    $mobile_titlebar_title_size ='30';
    
    
    echo '<style>'
    	. ' .home header.entry-header .entry-title, 
    		article header.entry-header .entry-title,
			.archive header.entry-header .entry-title,
			.single-template article header.entry-header .entry-title { '
    			. 'font-size: '. esc_html($titlebar_title_size) .'px; '
    	. '}'
    	
    	. ' @media (max-width: 375px) { '
    			. ' .home header.entry-header .entry-title, 
    			article header.entry-header .entry-title,
				.archive header.entry-header .entry-title,
				.single-template article header.entry-header .entry-title { '
    				. 'font-size: '. esc_html($mobile_titlebar_title_size) .'px; '
				. '}'	
			. '}'
    	. '</style>';
    

/**
 * TITLEBAR Body font
 * @package FrontLash
 */
    
    $titlebar_body_size = fw_get_db_settings_option('titlebar_body_size');
    
    echo '<style>'
    	. ' .home header.entry-header .entry-summary p,
    		.single-template article header.entry-header .entry-summary p,
    		.archive header.entry-header .entry-summary p {'
    			. 'font-size: '. esc_html($titlebar_body_size) .'rem; '
    	. '}'
     . '</style>';
	
/**
 * TYPOGRAPHY
 * @package FrontLash
 */
		
    
    
    $styling_h1 = fw_get_db_settings_option('styling_h1');
    $styling_h2 = fw_get_db_settings_option('styling_h2');
    $styling_h3 = fw_get_db_settings_option('styling_h3');
    $styling_h4 = fw_get_db_settings_option('styling_h4');
    $styling_h5 = fw_get_db_settings_option('styling_h5');
    $styling_h6 = fw_get_db_settings_option('styling_h6');
    
    echo '<style>'
    	. 'h1, 
    		.h1 { '
    			. 'font-size: '. esc_html($styling_h1) .'px; '
    	. '}'
    	. 'h2, 
    		.h2,
    		.search .search-template .search-style-grid article header.entry-header .entry-title,
    		.related-article .related-article-style-grid article header.entry-header .entry-title { '
    			. 'font-size: '. esc_html($styling_h2) .'px; '
    	. '}'
    	. 'h3, 
    		.h3 { '
    			. 'font-size: '. esc_html($styling_h3) .'px; '
    	. '}'
    	. 'h4, 
    		.h4 { '
    			. 'font-size: '. esc_html($styling_h4) .'px; '
    	. '}'
    	. 'h5, 
    		.h5 { '
    			. 'font-size: '. esc_html($styling_h5) .'px; '
    	. '}'
    	. 'h6, 
    		.h6 { '
    			. 'font-size: '. esc_html($styling_h6) .'px; '
    	. '}'
    	. '</style>';
    
      
    $footer_background_color = fw_get_db_settings_option('footer_background_color');
    $footer_text_color = fw_get_db_settings_option('footer_text_color');
    $copyright_text_color = fw_get_db_settings_option('copyright_text_color');
    
    echo '<style>'
    	. '.footer { '
    		. 'background:' . esc_html($footer_background_color) .';'
    	. '}'
    	
    	. '.footer .widget_nav_menu .menu-footer-category-menu-container ul li a, 
    		.footer .widget_nav_menu .menu-footer-menu-container ul li a,
    		.footer .widget_custom_html .widget-title,
    		.footer .footer-widget-title {'
    			. 'color:' . esc_html($footer_text_color) .';'
    		. '}'
    	. '.footer .site-copyright,
    		.footer .site-copyright p {'
				. 'color:' . esc_html($copyright_text_color) .';'
    	. '}'
    	. '</style>';
    //$custom_css = ob_get_contents(); 
	//ob_end_clean();
	wp_add_inline_style( 'pwp-style',frontlash_compress($custom_css));
}
add_action('wp_footer', '_action_theme_wp_print_styles');