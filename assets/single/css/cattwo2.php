<?php if (!defined('FW')) return; // prevent fatal error when the framework is not active
        
    $facts_background_color = fw_get_db_settings_option('facts_background_color');
    $facts_accent_color = fw_get_db_settings_option('facts_accent_color');?>


<style>.full-menu .mobile-header{background-color:#EBDBF5}header nav.navbar.navbar-fixed,header .scroll-nav{background-color:#EBDBF5}body{color:#925640;background-color:#EBDBF5}header .social-media-header ul li a,header nav.navbar.navbar-fixed ul.nav>li>a,.navbar .navbar-search-box-icon .search-icon{color:#925640}hr{border-top:2px solid #925640}#header_top_left ul>li>a:before,nav.navbar ul.nav>li>a:before,.navbar-search-box .navbar-search-box-button .button-blue{background:#925640}.navbar-search-box{background-color:#EBDBF5}#search-box input[type="search"]{color:#925640;border-bottom:2px solid #925640}.navbar .navbar-search-box-icon .search-icon i:hover,.navbar .navbar-search-box-icon .search-icon i:focus,.navbar .navbar-search-box-icon .search-icon i:active{color:#925640}header nav.navbar.navbar-fixed .menu-icon span,header nav.navbar.navbar-fixed .menu-icon:hover span,header nav.navbar.navbar-fixed .menu-icon span:before,header nav.navbar.navbar-fixed .menu-icon span:after{background:#925640!important}.full-menu ul.full-nav li a{color:#925640}.full-menu ul.full-nav li:hover span,.full-menu ul.full-nav li:hover a{color:#925640}.menu-icon span:before,.menu-icon span:after{background:#925640}ul.social li a{color:#925640}#header_top_left ul>li>a{color:#925640}header.page-header{border-bottom:0;padding:0}.progresscat.newsletter{border-bottom-color:#925640;border-top-color:#925640}.progresscat.newsletter .newsletter-message{color:#925640}.progresscat.newsletter input[type="submit"],.progresscat.newsletter input[type="email"]{color:#925640;border-color:#925640}.progresscat.newsletter input[type="submit"]:hover{color:#fff;border-color:#925640;background-color:#925640}.navbar-search-box .navbar-search-box-data ::placeholder{color:#925640}#scrollToTop i.fa.fa-angle-up{border:2px solid #925640;color:#925640}.full-menu.open #menu-mobile-menu-one{border-top-color:#925640}.full-menu.open #menu-mobile-menu-second{border-top-color:#925640;border-bottom-color:#925640}.full-menu.open #mobile-search-box .mobile-search-icon{color:#925640}.full-menu.open #mobile-search-box input[type="search"]{border-bottom-color:#925640}.full-menu.open .newsletter .newsletter-message h4,.full-menu.open .mobile-social h4{color:#925640}.full-menu.open .newsletter button[type="submit"],.full-menu.open .newsletter input[type="submit"],.full-menu.open .newsletter input[type="email"]{border-color:#925640;color:#925640}.preloader-1 div{color:#925640}.preloader-1 .line{background-color:#925640}.default-loader{border-top-color:#925640}article header.entry-header .entry-title a{color:#925640}.archive header.entry-header{background-color:#EBDBF5}.archive header.entry-header .cat-tags-links .frontlash-cat-links,.archive header.entry-header .cat-tags-links .frontlash-tags-links{color:#925640}.archive header.entry-header .cat-tags-links .frontlash-cat-links a,.archive header.entry-header .cat-tags-links .frontlash-tags-links a{color:#925640}.archive header.entry-header .entry-title,.archive header.entry-header .entry-title a{color:#925640}.archive .excerpt-readmore a{border:2px solid #925640;color:#925640}.archive .excerpt-readmore a:hover{background-color:#925640;color:#fff}.archive-style-grid,.archive-style-grid article{background-color:#fff}.archive-style-grid header.post-entry-header .entry-title a{color:#925640}.archive-style-grid article .frontlash-cat-links,.archive-style-grid article .frontlash-tags-links{color:#925640}.archive-style-grid article .frontlash-cat-links a,.archive-style-grid article .frontlash-tags-links a{color:#925640}.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links,.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links{color:#925640}.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links a,.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links a{color:#925640}.archive-style-grid article .excerpt-readmore a{border:2px solid #925640;color:#925640;background-color:transparent}.archive-style-grid article .excerpt-readmore a:hover{background-color:#925640;color:#fff}article.tag-editorial header.post-entry-header .entry-title a{color:#925640}article.tag-editorial .frontlash-cat-links,article.tag-editorial .frontlash-tags-links{color:#925640}article.tag-editorial .frontlash-cat-links a,article.tag-editorial .frontlash-tags-links a{color:#925640}article.tag-editorial.has-post-thumbnail .cat-tags-links .frontlash-cat-links,article.tag-editorial.has-post-thumbnail .cat-tags-links .frontlash-tags-links{color:#925640}article.tag-editorial.has-post-thumbnail .cat-tags-links .frontlash-cat-links a,article.tag-editorial.has-post-thumbnail .cat-tags-links .frontlash-tags-links a{color:#925640}article.tag-editorial .excerpt-readmore a{border:2px solid #925640;color:#925640;background-color:transparent}article.tag-editorial .editorial-section .excerpt-readmore a:hover{background-color:#925640;color:#fff}article.tag-editorial .editorial-section{background-color:#EBDBF5}.landscape-section{background-color:#EBDBF5}.footer .widget_nav_menu .menu-footer-category-menu-container ul li a:hover,.footer .widget_nav_menu .menu-footer-menu-container ul li a:hover{color:#925640}

header nav.navbar.navbar-fixed,header .scroll-nav{background-color:<?php echo esc_html($facts_background_color)?>}header .social-media-header ul li a,header nav.navbar.navbar-fixed ul.nav>li>a,.navbar .navbar-search-box-icon .search-icon{color:<?php echo esc_html($facts_accent_color)?>}hr{border-top:2px solid <?php echo esc_html($facts_accent_color)?>}#mobile_header_top_left ul>li>a:before,#header_top_left ul>li>a:before,nav.navbar ul.nav>li>a:before,.navbar-search-box .navbar-search-box-button .button-blue{background:<?php echo esc_html($facts_accent_color)?>}.navbar-search-box{background-color:<?php echo esc_html($facts_background_color)?>}#search-box input[type="search"]{color:<?php echo esc_html($facts_accent_color)?>;border-bottom:2px solid <?php echo esc_html($facts_accent_color)?>}.navbar .navbar-search-box-icon .search-icon i:hover,.navbar .navbar-search-box-icon .search-icon i:focus,.navbar .navbar-search-box-icon .search-icon i:active{color:<?php echo esc_html($facts_accent_color)?>}header nav.navbar.navbar-fixed .menu-icon span,header nav.navbar.navbar-fixed .menu-icon:hover span,header nav.navbar.navbar-fixed .menu-icon span:before,header nav.navbar.navbar-fixed .menu-icon span:after{background:<?php echo esc_html($facts_accent_color)?>!important}.full-menu ul.full-nav li a{color:<?php echo esc_html($facts_accent_color)?>}.full-menu ul.full-nav li:hover span,.full-menu ul.full-nav li:hover a{color:<?php echo esc_html($facts_accent_color)?>}.menu-icon span:before,.menu-icon span:after{background:<?php echo esc_html($facts_accent_color)?>}ul.social li a{color:<?php echo esc_html($facts_accent_color)?>}#mobile_header_top_left ul>li>a,#header_top_left ul>li>a{color:<?php echo esc_html($facts_accent_color)?>}.progresscat.newsletter{border-bottom-color:<?php echo esc_html($facts_accent_color)?>;border-top-color:<?php echo esc_html($facts_accent_color)?>}.progresscat.newsletter .newsletter-message{color:<?php echo esc_html($facts_accent_color)?>}.progresscat.newsletter input[type="submit"],.progresscat.newsletter input[type="email"]{color:<?php echo esc_html($facts_accent_color)?>;border-color:<?php echo esc_html($facts_accent_color)?>}.progresscat.newsletter input[type="submit"]:hover{color:#fff;border-color:<?php echo esc_html($facts_accent_color)?>;background-color:<?php echo esc_html($facts_accent_color)?>}.navbar-search-box .navbar-search-box-data ::placeholder{color:<?php echo esc_html($facts_accent_color)?>}#scrollToTop i.fa.fa-angle-up{border:2px solid <?php echo esc_html($facts_accent_color)?>;color:<?php echo esc_html($facts_accent_color)?>}.full-menu.open #menu-mobile-menu-one{border-top-color:<?php echo esc_html($facts_accent_color)?>}.full-menu.open #menu-mobile-menu-second{border-top-color:<?php echo esc_html($facts_accent_color)?>;border-bottom-color:<?php echo esc_html($facts_accent_color)?>}.full-menu.open #mobile-search-box .mobile-search-icon{color:<?php echo esc_html($facts_accent_color)?>}.full-menu.open #mobile-search-box input[type="search"]{border-bottom-color:<?php echo esc_html($facts_accent_color)?>}.full-menu.open .newsletter .newsletter-message h4,.full-menu.open .mobile-social h4{color:<?php echo esc_html($facts_accent_color)?>}.full-menu.open .newsletter button[type="submit"],.full-menu.open .newsletter input[type="submit"],.full-menu.open .newsletter input[type="email"]{border-color:<?php echo esc_html($facts_accent_color)?>;color:<?php echo esc_html($facts_accent_color)?>}.preloader-1 div{color:<?php echo esc_html($facts_accent_color)?>}.preloader-1 .line{background-color:<?php echo esc_html($facts_accent_color)?>}.default-loader{border-top-color:<?php echo esc_html($facts_accent_color)?>}article header.entry-header .entry-title a{color:<?php echo esc_html($facts_accent_color)?>}.archive header.entry-header{background-color:<?php echo esc_html($facts_background_color)?>}.archive header.entry-header .cat-tags-links .frontlash-cat-links,.archive header.entry-header .cat-tags-links .frontlash-tags-links{color:<?php echo esc_html($facts_accent_color)?>}.archive header.entry-header .cat-tags-links .frontlash-cat-links a,.archive header.entry-header .cat-tags-links .frontlash-tags-links a{color:<?php echo esc_html($facts_accent_color)?>}.archive header.entry-header .entry-title,.archive header.entry-header .entry-title a{color:<?php echo esc_html($facts_accent_color)?>}.archive .excerpt-readmore a{border:2px solid <?php echo esc_html($facts_accent_color)?>;color:<?php echo esc_html($facts_accent_color)?>}.archive .excerpt-readmore a:hover{background-color:<?php echo esc_html($facts_accent_color)?>;color:#fff}.archive-style-grid header.post-entry-header .entry-title a{color:<?php echo esc_html($facts_accent_color)?>}.archive-style-grid article .frontlash-cat-links,.archive-style-grid article .frontlash-tags-links{color:<?php echo esc_html($facts_accent_color)?>}.archive-style-grid article .frontlash-cat-links a,.archive-style-grid article .frontlash-tags-links a{color:<?php echo esc_html($facts_accent_color)?>}.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links,.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links{color:<?php echo esc_html($facts_accent_color)?>}.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links a,.archive-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links a{color:<?php echo esc_html($facts_accent_color)?>}.archive-style-grid article .excerpt-readmore a{border:2px solid <?php echo esc_html($facts_accent_color)?>;color:<?php echo esc_html($facts_accent_color)?>;background-color:transparent}.archive-style-grid article .excerpt-readmore a:hover{background-color:<?php echo esc_html($facts_accent_color)?>;color:#fff}article.tag-editorial header.post-entry-header .entry-title a{color:<?php echo esc_html($facts_accent_color)?>}article.tag-editorial .frontlash-cat-links,article.tag-editorial .frontlash-tags-links{color:<?php echo esc_html($facts_accent_color)?>}article.tag-editorial .frontlash-cat-links a,article.tag-editorial .frontlash-tags-links a{color:<?php echo esc_html($facts_accent_color)?>}article.tag-editorial.has-post-thumbnail .cat-tags-links .frontlash-cat-links,article.tag-editorial.has-post-thumbnail .cat-tags-links .frontlash-tags-links{color:<?php echo esc_html($facts_accent_color)?>}article.tag-editorial.has-post-thumbnail .cat-tags-links .frontlash-cat-links a,article.tag-editorial.has-post-thumbnail .cat-tags-links .frontlash-tags-links a{color:<?php echo esc_html($facts_accent_color)?>}article.tag-editorial .excerpt-readmore a{border:2px solid <?php echo esc_html($facts_accent_color)?>;color:<?php echo esc_html($facts_accent_color)?>;background-color:transparent}article.tag-editorial .editorial-section .excerpt-readmore a:hover{background-color:<?php echo esc_html($facts_accent_color)?>;color:#fff}article.tag-editorial .editorial-section{background-color:<?php echo esc_html($facts_background_color)?>}.swiper-button-prev{background-image:url(<?php echo get_template_directory_uri()?>/img/progress-left.png)}.swiper-button-next{background-image:url(<?php echo get_template_directory_uri()?>/img/progress-right.png)}.footer .widget_nav_menu .menu-footer-category-menu-container ul li a:hover,.footer .widget_nav_menu .menu-footer-menu-container ul li a:hover{color:<?php echo esc_html($facts_accent_color)?>}.shop-hover.excerpt-readmore a,.related-article .related-article-style-grid article .excerpt-readmore a{border:2px solid <?php echo esc_html($facts_accent_color)?>;color:<?php echo esc_html($facts_accent_color)?>;background-color:transparent}.shop-hover.excerpt-readmore a:hover,.related-article .related-article-style-grid article .excerpt-readmore a:hover{background-color:<?php echo esc_html($facts_accent_color)?>;color:#fff}

.single-template{background-color:#fff}.single-template article{background-color:#EBDBF5}.single-template article header.entry-header{background-color:#EBDBF5}.single-template article header.entry-header .entry-title{color:#925640}.single-template article header.entry-header .cat-tags-links .frontlash-cat-links,.single-template article header.entry-header .cat-tags-links .frontlash-tags-links{color:#925640}.single-template article header.entry-header .cat-tags-links .frontlash-cat-links a,.single-template article header.entry-header .cat-tags-links .frontlash-tags-links a{color:#925640}.single-template article .social-media-footer ul li a{color:#925640}.single-template article .single-cat-tags .cat-tags-links .frontlash-cat-links,.single-template article .single-cat-tags .cat-tags-links .frontlash-tags-links{color:#925640}.single-template article .single-cat-tags .cat-tags-links .frontlash-cat-links a,.single-template article .single-cat-tags .cat-tags-links .frontlash-tags-links a{color:#925640}.single-template .navigation.post-navigation .nav-previous a,.single-template .navigation.post-navigation .nav-next a{color:#925640}.nav-left-arrow,.nav-right-arrow{fill:#925640;fill-rule:evenodd}.single.newsletter{border-bottom-color:#925640;border-top-color:#925640}.single.newsletter .newsletter-message{color:#925640}.single.newsletter input[type="submit"],.single.newsletter input[type="email"]{color:#925640;border-color:#925640}.single.newsletter input[type="submit"]:hover{color:#fff;border-color:#925640;background-color:#925640}.related-article{background-color:#EBDBF5;overflow:hidden}.related-article h2.related-article-title{color:#925640}.related-article h2.related-article-title a{color:#925640}.related-article .related-article-style-grid article{background-color:#EBDBF5}.related-article .related-article-style-grid article header.entry-header .entry-title a{color:#925640}.related-article .related-article-style-grid article .frontlash-cat-links,.related-article .related-article-style-grid article .frontlash-tags-links{color:#925640}.related-article .related-article-style-grid article .frontlash-cat-links a,.related-article .related-article-style-grid article .frontlash-tags-links a{color:#925640}.related-article .related-article-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links,.related-article .related-article-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links{color:#925640}.related-article .related-article-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links a,.related-article .related-article-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links a{color:#925640}.related-article .related-article-style-grid article .excerpt-readmore a{border:2px solid #925640;color:#925640;background-color:transparent}.related-article .related-article-style-grid article .excerpt-readmore a:hover{background-color:#925640;color:#fff}.comments-area .comment-list li article{background-color:#EBDBF5}.comments-area .comment-list li article footer.comment-meta .comment-author a{color:#925640}.comments-area .comment-list li article footer.comment-meta .comment-metadata a{color:#925640}.comments-area .comment-list li article .reply a{color:#925640}.comments-area .comment-respond .comment-reply-title small a{color:#925640}.comments-area .comment-respond textarea,.comments-area .comment-respond input[type="text"],.comments-area .comment-respond input[type="submit"],.comments-area .comment-respond input[type="email"]{border:2px solid #925640;color:#925640}.comments-area .comment-respond input[type="submit"]:hover{color:#fff;border-color:#925640;background-color:#925640}.comments-area .comment-respond .logged-in-as a{color:#925640}.swiper-container-parent{background-color:#EBDBF5}.shop-story{border-bottom-color:#925640;border-top-color:#925640}.shop-story h2{color:#925640}.single-template article{padding-bottom:0}.single-template article header.entry-header{padding-top:2rem;padding-bottom:2rem}.single-template article header.entry-header .entry-title{text-transform:capitalize}.single-template article header.entry-header .cat-tags-links{padding:1rem 0 2rem}.single-template article header.entry-header .cat-tags-links .frontlash-cat-links,.single-template article header.entry-header .cat-tags-links .frontlash-tags-links{text-transform:uppercase;letter-spacing:2px;font-weight:400;display:inline-block}.single-template article header.entry-header .cat-tags-links .frontlash-cat-links a,.single-template article header.entry-header .cat-tags-links .frontlash-tags-links a{text-transform:uppercase;letter-spacing:2px;font-weight:400;font-size:.8rem}.single-template article header.entry-header .entry-summary{padding:1rem 0}.single-template article header.entry-header .entry-summary p{font-size:1.5rem;line-height:1.5}.single-template article .social-media-footer ul li a.facebook:hover{color:#3b5998}.single-template article .social-media-footer ul li a.twitter:hover{color:#1DA1F2}.single-template article .social-media-footer ul li a.instagram:hover{color:#fb3958}.single-template article .social-media-footer ul li a.pinterest:hover{color:#cb2027}.single-template article .entry-content p,.single-template article .entry-content li{font-size:1.1rem}.single-template article .entry-content p{margin:0 0 2rem}.single-template article .entry-content p:last-child{margin:0}.single-template article .single-custom-fields{padding:2rem 0 0}.single-template article .single-custom-fields p{margin:0}.single-template article .single-social-media{padding:3rem 0 2rem}.single-template article .single-cat-tags{padding:0}.single-template article .single-cat-tags .cat-tags-links{padding:1rem 0}.single-template article .single-cat-tags .cat-tags-links .frontlash-cat-links,.single-template article .single-cat-tags .cat-tags-links .frontlash-tags-links{text-transform:uppercase;letter-spacing:2px;font-size:.8rem;font-weight:400;display:inline-block}.single-template article .single-cat-tags .cat-tags-links .frontlash-cat-links a,.single-template article .single-cat-tags .cat-tags-links .frontlash-tags-links a{text-transform:uppercase;letter-spacing:2px;font-weight:400;font-size:.8rem}.single-template .navigation.post-navigation .nav-previous a,.single-template .navigation.post-navigation .nav-next a{text-transform:uppercase;letter-spacing:2px;font-family:'news_cyclebold','Arial Narrow',sans-serif;font-size:.8rem;font-weight:400}.related-article h2.related-article-title{text-align:center;text-transform:capitalize;line-height:1.3;font-family:'agipobold',Arial,sans-serif;font-size:1.8rem;font-weight:400;padding:3rem 0}.related-article h2.related-article-title a{line-height:1;vertical-align:top}.related-article .related-article-style-grid article{padding-bottom:3rem}.related-article .related-article-style-grid article header.entry-header{padding:1rem 0;text-align:left}.related-article .related-article-style-grid article header.entry-header .entry-title{font-family:'agipobold',Arial,sans-serif;text-transform:capitalize}.related-article .related-article-style-grid article header.entry-header .entry-title a{vertical-align:top;line-height:1.3}.related-article .related-article-style-grid article .frontlash-cat-links,.related-article .related-article-style-grid article .frontlash-tags-links{padding:0;text-transform:uppercase;letter-spacing:2px;font-weight:400;display:inline-block}.related-article .related-article-style-grid article .frontlash-cat-links a,.related-article .related-article-style-grid article .frontlash-tags-links a{text-transform:uppercase;letter-spacing:2px;font-weight:400;font-size:.8rem}.related-article .related-article-style-grid article.has-post-thumbnail .cat-tags-links{padding:1rem 0 0}.related-article .related-article-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links,.related-article .related-article-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links{text-transform:uppercase;letter-spacing:2px;font-weight:400;font-size:.8rem;display:inline-block}.related-article .related-article-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-cat-links a,.related-article .related-article-style-grid article.has-post-thumbnail .cat-tags-links .frontlash-tags-links a{text-transform:uppercase;letter-spacing:2px;font-weight:400;font-size:.8rem}.related-article .related-article-style-grid article.has-post-thumbnail header.entry-header{padding:1rem 0}.related-article .related-article-style-grid article .cat-tags-links{padding:1em 0}.related-article .related-article-style-grid article .excerpt-readmore a{font-size:.8rem;background-color:transparent;padding:1rem 2rem;text-transform:uppercase;letter-spacing:2px;font-weight:400;border-radius:0;display:inline-block;-webkit-transition:all 0.3s;-moz-transition:all 0.3s;transition:all 0.3s}.related-article .related-article-style-grid article .excerpt-readmore a:after{content:'';position:absolute;z-index:-1;-webkit-transition:all 0.3s;-moz-transition:all 0.3s;transition:all 0.3s}.related-article .related-article-style-grid article .entry-summary{padding:0 0 1rem}.related-article .related-article-style-grid article .entry-summary p{font-size:1.2rem;line-height:1.5}.comments-area{padding:2rem 0}.comments-area .comment-list li{margin:1rem 0}.comments-area .comment-list li article{padding:1rem 2rem;font-size:18px}.comments-area .comment-list li article footer.comment-meta{padding:0;font-weight:400}.comments-area .comment-list li article footer.comment-meta .comment-author{line-height:2}.comments-area .comment-list li article footer.comment-meta .comment-author img.avatar{float:right}.comments-area .comment-list li article footer.comment-meta .comment-author span.says{display:none}.comments-area .comment-list li article .comment-content{padding:1rem 0;font-size:18px;line-height:1.7}.comments-area .comment-list li article .comment-content p,.comments-area .comment-list li article .comment-content li{font-size:18px;line-height:1.7;margin:0}.comments-area .comment-list li article .comment-content h1,.comments-area .comment-list li article .comment-content h2,.comments-area .comment-list li article .comment-content h3,.comments-area .comment-list li article .comment-content h4,.comments-area .comment-list li article .comment-content h5,.comments-area .comment-list li article .comment-content h6{line-height:1.5;margin-bottom:10px}.comments-area .comment-list li article .reply{padding-bottom:.5rem}.comments-area .comment-list li article .reply a{font-family:'Roboto',Arial,sans-serif;font-weight:400}.comments-area .comment-list li article .comment-awaiting-moderation{font-size:18px}.comments-area .comment-respond{padding:1rem 0}.comments-area .comment-respond .comment-reply-title{padding:1rem 0}.comments-area .comment-respond .comment-reply-title small{font-family:'agipobold','Roboto',Arial,sans-serif}.comments-area .comment-respond textarea,.comments-area .comment-respond input[type="text"],.comments-area .comment-respond input[type="submit"],.comments-area .comment-respond input[type="email"]{background:transparent;padding:.8rem;border-radius:0}.comments-area .comment-respond textarea,.comments-area .comment-respond input[type="text"],.comments-area .comment-respond input[type="email"]{width:100%;letter-spacing:0;line-height:1;font-size:1rem}.comments-area .comment-respond textarea:focus,.comments-area .comment-respond input[type="text"]:focus,.comments-area .comment-respond input[type="email"]:focus{outline:0}.comments-area .comment-respond input[type="submit"]{line-height:1;letter-spacing:2px;text-transform:uppercase;width:auto;font-weight:400;padding:1rem 3rem;-webkit-transition:all 0.3s;-moz-transition:all 0.3s;transition:all 0.3s}.comments-area .comment-respond textarea{height:100px}.comments-area .comment-respond .form-submit{text-align:center;padding:1rem 0}.comments-area .comment-respond .comment-form-author,.comments-area .comment-respond .comment-form-email,.comments-area .comment-respond .comment-form-comment{padding-bottom:1rem}.comments-title{font-family:'agipobold',Arial,sans-serif;font-size:1.8rem;font-weight:400}</style>