<?php if (!defined('FW')) return; // prevent fatal error when the framework is not active
        
    $fashion_background_color = fw_get_db_settings_option('fashion_background_color');
    $fashion_accent_color = fw_get_db_settings_option('fashion_accent_color');?>
<style>.full-menu .mobile-header{background-color:#F5DDDF}header nav.navbar.navbar-fixed,header .scroll-nav{background-color:#F5DDDF}body{background-color:#F5DDDF;color:#A5B039}header .social-media-header ul li a,header nav.navbar.navbar-fixed ul.nav>li>a,.navbar .navbar-search-box-icon .search-icon{color:#A5B039}hr{border-top:2px solid #A5B039}#header_top_left ul>li>a:before,nav.navbar ul.nav>li>a:before,.navbar-search-box .navbar-search-box-button .button-blue{background:#A5B039}.navbar-search-box{background-color:#F5DDDF}#search-box input[type="search"]{color:#A5B039;border-bottom:2px solid #A5B039}.navbar .navbar-search-box-icon .search-icon i:hover,.navbar .navbar-search-box-icon .search-icon i:focus,.navbar .navbar-search-box-icon .search-icon i:active{color:#A5B039}header nav.navbar.navbar-fixed .menu-icon span,header nav.navbar.navbar-fixed .menu-icon:hover span,header nav.navbar.navbar-fixed .menu-icon span:before,header nav.navbar.navbar-fixed .menu-icon span:after{background:#A5B039!important}.full-menu ul.full-nav li a{color:#A5B039}.full-menu ul.full-nav li:hover span,.full-menu ul.full-nav li:hover a{color:#A5B039}.menu-icon span:before,.menu-icon span:after{background:#A5B039}ul.social li a{color:#A5B039}#header_top_left ul>li>a{color:#A5B039}header.page-header{border-bottom:0;padding:0}.fashioncat.newsletter{border-bottom-color:#A5B039;border-top-color:#A5B039}.fashioncat.newsletter .newsletter-message{color:#A5B039}.fashioncat.newsletter input[type="submit"],.fashioncat.newsletter input[type="email"]{color:#A5B039;border-color:#A5B039}.fashioncat.newsletter input[type="submit"]:hover{color:#fff;border-color:#A5B039;background-color:#A5B039}.navbar-search-box .navbar-search-box-data ::placeholder{color:#A5B039}#scrollToTop i.fa.fa-angle-up{border:2px solid #A5B039;color:#A5B039}.full-menu.open #menu-mobile-menu-one{border-top-color:#A5B039}.full-menu.open #menu-mobile-menu-second{border-top-color:#A5B039;border-bottom-color:#A5B039}.full-menu.open #mobile-search-box .mobile-search-icon{color:#A5B039}.full-menu.open #mobile-search-box input[type="search"]{border-bottom-color:#A5B039}.full-menu.open .newsletter .newsletter-message h4,.full-menu.open .mobile-social h4{color:#A5B039}.full-menu.open .newsletter button[type="submit"],.full-menu.open .newsletter input[type="submit"],.full-menu.open .newsletter input[type="email"]{border-color:#A5B039;color:#A5B039}.preloader-1 div{color:#A5B039}.preloader-1 .line{background-color:#A5B039}.default-loader{border-top-color:#A5B039}article header.entry-header .entry-title a{color:#A5B039}.archive header.entry-header{background-color:#F5DDDF}.archive header.entry-header .cat-tags-links .frontlash-cat-links,.archive header.entry-header .cat-tags-links .frontlash-tags-links{color:#A5B039}.archive header.entry-header .cat-tags-links .frontlash-cat-links a,.archive header.entry-header .cat-tags-links .frontlash-tags-links a{color:#A5B039}.archive header.entry-header .entry-title,.archive header.entry-header .entry-title a{color:#A5B039}.archive .excerpt-readmore a{border:2px solid #A5B039;color:#A5B039}.archive .excerpt-readmore a:hover{background-color:#A5B039;color:#fff}.archive-style-grid,.archive-style-grid article{background-color:#fff}.archive-style-grid header.post-entry-header .entry-title a{color:#A5B039}.archive-style-grid article .frontlash-cat-links,.archive-style-grid article .frontlash-tags-links{color:#A5B039}.archive-style-grid article .frontlash-cat-links a,.archive-style-grid article .frontlash-tags-links a{color:#A5B039}.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links,.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links{color:#A5B039}.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links a,.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links a{color:#A5B039}.archive-style-grid article .excerpt-readmore a{border:2px solid #A5B039;color:#A5B039;background-color:transparent}.archive-style-grid article .excerpt-readmore a:hover{background-color:#A5B039;color:#fff}article.tag-editorial header.post-entry-header .entry-title a{color:#A5B039}article.tag-editorial .frontlash-cat-links,article.tag-editorial .frontlash-tags-links{color:#A5B039}article.tag-editorial .frontlash-cat-links a,article.tag-editorial .frontlash-tags-links a{color:#A5B039}article.tag-editorial.has-post-thumbnail .cat-tags-links .frontlash-cat-links,article.tag-editorial.has-post-thumbnail .cat-tags-links .frontlash-tags-links{color:#A5B039}article.tag-editorial.has-post-thumbnail .cat-tags-links .frontlash-cat-links a,article.tag-editorial.has-post-thumbnail .cat-tags-links .frontlash-tags-links a{color:#A5B039}article.tag-editorial .excerpt-readmore a{border:2px solid #A5B039;color:#A5B039;background-color:transparent}article.tag-editorial .editorial-section .excerpt-readmore a:hover{background-color:#A5B039;color:#fff}article.tag-editorial .editorial-section{background-color:#F5DDDF}.landscape-section{background-color:#F5DDDF}.footer .widget_nav_menu .menu-footer-category-menu-container ul li a:hover,.footer .widget_nav_menu .menu-footer-menu-container ul li a:hover{color:#A5B039}
header nav.navbar.navbar-fixed,header .scroll-nav{background-color:<?php echo esc_html($fashion_background_color)?>}header .social-media-header ul li a,header nav.navbar.navbar-fixed ul.nav>li>a,.navbar .navbar-search-box-icon .search-icon{color:<?php echo esc_html($fashion_accent_color)?>}hr{border-top:2px solid <?php echo esc_html($fashion_accent_color)?>}#mobile_header_top_left ul>li>a:before,#header_top_left ul>li>a:before,nav.navbar ul.nav>li>a:before,.navbar-search-box .navbar-search-box-button .button-blue{background:<?php echo esc_html($fashion_accent_color)?>}.navbar-search-box{background-color:<?php echo esc_html($fashion_background_color)?>}#search-box input[type="search"]{color:<?php echo esc_html($fashion_accent_color)?>;border-bottom:2px solid <?php echo esc_html($fashion_accent_color)?>}.navbar .navbar-search-box-icon .search-icon i:hover,.navbar .navbar-search-box-icon .search-icon i:focus,.navbar .navbar-search-box-icon .search-icon i:active{color:<?php echo esc_html($fashion_accent_color)?>}header nav.navbar.navbar-fixed .menu-icon span,header nav.navbar.navbar-fixed .menu-icon:hover span,header nav.navbar.navbar-fixed .menu-icon span:before,header nav.navbar.navbar-fixed .menu-icon span:after{background:<?php echo esc_html($fashion_accent_color)?>!important}.full-menu ul.full-nav li a{color:<?php echo esc_html($fashion_accent_color)?>}.full-menu ul.full-nav li:hover span,.full-menu ul.full-nav li:hover a{color:<?php echo esc_html($fashion_accent_color)?>}.menu-icon span:before,.menu-icon span:after{background:<?php echo esc_html($fashion_accent_color)?>}ul.social li a{color:<?php echo esc_html($fashion_accent_color)?>}#mobile_header_top_left ul>li>a,#header_top_left ul>li>a{color:<?php echo esc_html($fashion_accent_color)?>}.fashioncat.newsletter{border-bottom-color:<?php echo esc_html($fashion_accent_color)?>;border-top-color:<?php echo esc_html($fashion_accent_color)?>}.fashioncat.newsletter .newsletter-message{color:<?php echo esc_html($fashion_accent_color)?>}.fashioncat.newsletter input[type="submit"],.fashioncat.newsletter input[type="email"]{color:<?php echo esc_html($fashion_accent_color)?>;border-color:<?php echo esc_html($fashion_accent_color)?>}.fashioncat.newsletter input[type="submit"]:hover{color:#fff;border-color:<?php echo esc_html($fashion_accent_color)?>;background-color:<?php echo esc_html($fashion_accent_color)?>}.navbar-search-box .navbar-search-box-data ::placeholder{color:<?php echo esc_html($fashion_accent_color)?>}#scrollToTop i.fa.fa-angle-up{border:2px solid <?php echo esc_html($fashion_accent_color)?>;color:<?php echo esc_html($fashion_accent_color)?>}.full-menu.open #menu-mobile-menu-one{border-top-color:<?php echo esc_html($fashion_accent_color)?>}.full-menu.open #menu-mobile-menu-second{border-top-color:<?php echo esc_html($fashion_accent_color)?>;border-bottom-color:<?php echo esc_html($fashion_accent_color)?>}.full-menu.open #mobile-search-box .mobile-search-icon{color:<?php echo esc_html($fashion_accent_color)?>}.full-menu.open #mobile-search-box input[type="search"]{border-bottom-color:<?php echo esc_html($fashion_accent_color)?>}.full-menu.open .newsletter .newsletter-message h4,.full-menu.open .mobile-social h4{color:<?php echo esc_html($fashion_accent_color)?>}.full-menu.open .newsletter button[type="submit"],.full-menu.open .newsletter input[type="submit"],.full-menu.open .newsletter input[type="email"]{border-color:<?php echo esc_html($fashion_accent_color)?>;color:<?php echo esc_html($fashion_accent_color)?>}.loader{background-color:<?php echo esc_html($fashion_background_color)?>}.preloader-1 div{color:<?php echo esc_html($fashion_accent_color)?>}.preloader-1 .line{background-color:<?php echo esc_html($fashion_accent_color)?>}.default-loader{border-top-color:<?php echo esc_html($fashion_accent_color)?>}article header.entry-header .entry-title a{color:<?php echo esc_html($fashion_accent_color)?>}.archive header.entry-header{background-color:<?php echo esc_html($fashion_background_color)?>}.archive header.entry-header .cat-tags-links .frontlash-cat-links,.archive header.entry-header .cat-tags-links .frontlash-tags-links{color:<?php echo esc_html($fashion_accent_color)?>}.archive header.entry-header .cat-tags-links .frontlash-cat-links a,.archive header.entry-header .cat-tags-links .frontlash-tags-links a{color:<?php echo esc_html($fashion_accent_color)?>}.archive header.entry-header .entry-title,.archive header.entry-header .entry-title a{color:<?php echo esc_html($fashion_accent_color)?>}.archive .excerpt-readmore a{border:2px solid <?php echo esc_html($fashion_accent_color)?>;color:<?php echo esc_html($fashion_accent_color)?>}.archive .excerpt-readmore a:hover{background-color:<?php echo esc_html($fashion_accent_color)?>;color:#fff}.archive-style-grid header.post-entry-header .entry-title a{color:<?php echo esc_html($fashion_accent_color)?>}.archive-style-grid article .frontlash-cat-links,.archive-style-grid article .frontlash-tags-links{color:<?php echo esc_html($fashion_accent_color)?>}.archive-style-grid article .frontlash-cat-links a,.archive-style-grid article .frontlash-tags-links a{color:<?php echo esc_html($fashion_accent_color)?>}.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links,.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links{color:<?php echo esc_html($fashion_accent_color)?>}.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links a,.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links a{color:<?php echo esc_html($fashion_accent_color)?>}.archive-style-grid article .excerpt-readmore a{border:2px solid <?php echo esc_html($fashion_accent_color)?>;color:<?php echo esc_html($fashion_accent_color)?>;background-color:transparent}.archive-style-grid article .excerpt-readmore a:hover{background-color:<?php echo esc_html($fashion_accent_color)?>;color:#fff}article.tag-editorial header.post-entry-header .entry-title a{color:<?php echo esc_html($fashion_accent_color)?>}article.tag-editorial .frontlash-cat-links,article.tag-editorial .frontlash-tags-links{color:<?php echo esc_html($fashion_accent_color)?>}article.tag-editorial .frontlash-cat-links a,article.tag-editorial .frontlash-tags-links a{color:<?php echo esc_html($fashion_accent_color)?>}article.tag-editorial.has-post-thumbnail .cat-tags-links .frontlash-cat-links,article.tag-editorial.has-post-thumbnail .cat-tags-links .frontlash-tags-links{color:<?php echo esc_html($fashion_accent_color)?>}article.tag-editorial.has-post-thumbnail .cat-tags-links .frontlash-cat-links a,article.tag-editorial.has-post-thumbnail .cat-tags-links .frontlash-tags-links a{color:<?php echo esc_html($fashion_accent_color)?>}article.tag-editorial .excerpt-readmore a{border:2px solid <?php echo esc_html($fashion_accent_color)?>;color:<?php echo esc_html($fashion_accent_color)?>;background-color:transparent}article.tag-editorial .editorial-section .excerpt-readmore a:hover{background-color:<?php echo esc_html($fashion_accent_color)?>;color:#fff}article.tag-editorial .editorial-section{background-color:<?php echo esc_html($fashion_background_color)?>}.swiper-button-prev{background-image:url(<?php echo get_template_directory_uri()?>/img/fashion-left.png)}.swiper-button-next{background-image:url(<?php echo get_template_directory_uri()?>/img/fashion-right.png)}.footer .widget_nav_menu .menu-footer-category-menu-container ul li a:hover,.footer .widget_nav_menu .menu-footer-menu-container ul li a:hover{color:<?php echo esc_html($fashion_accent_color)?>}.shop-hover.excerpt-readmore a,.related-article .related-article-style-grid article .excerpt-readmore a{border:2px solid <?php echo esc_html($fashion_accent_color)?>;color:<?php echo esc_html($fashion_accent_color)?>;background-color:transparent}.shop-hover.excerpt-readmore a:hover,.related-article .related-article-style-grid article .excerpt-readmore a:hover{background-color:<?php echo esc_html($fashion_accent_color)?>;color:#fff}</style>