<div class="full-menu">
    <div class="menu-icon active">
        <span></span>
    </div>
    <div class="open-full-menu-center">
	     <div class="mobile-header">
            <?php wp_nav_menu( array(
			    'menu'              => 'header_top_left_mobile',
			    'theme_location'    => 'header_top_left_mobile',
			    'items_wrap'		=>	'<ul class="header_top_left">%3$s</ul>',
			    'container_class'	=>	'col-xs-3 hidden-sm hidden-md hidden-lg',
			    'container_id'		=>	'mobile_header_top_left'
			));?>
                    
            <div class="col-xs-6">
                    <?php if ( function_exists('fw_get_db_settings_option') ):?>
                        <?php if( is_404() || is_home() || is_front_page() || is_page() ):?>
       
					       <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><img src="<?php echo fw_get_db_settings_option('logo_sticky')['url']?>" class="logo-mobile hidden-lg hidden-md hidden-sm" alt="<?php bloginfo( 'name' );?>">
					       </a>
					       
					       <?php elseif(is_category(array(4,'cash-all-the-deals'))):?>
					       	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><img src="<?php echo fw_get_db_settings_option('cash_logo_sticky')['url']?>" class="logo-mobile hidden-lg hidden-md hidden-sm" alt="<?php bloginfo( 'name' );?>">
					       </a>
					       <?php elseif(is_category(array(5,'progress-a-new-way'))):?>
					       	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><img src="<?php echo fw_get_db_settings_option('facts_logo_sticky')['url']?>" class="logo-mobile hidden-lg hidden-md hidden-sm" alt="<?php bloginfo( 'name' );?>">
					       </a>
					       <?php elseif(is_category(array(7,'fashion-get-inspired'))):?>
					       <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><img src="<?php echo fw_get_db_settings_option('fashion_logo_sticky')['url']?>" class="logo-mobile hidden-lg hidden-md hidden-sm" alt="<?php bloginfo( 'name' );?>">
					       </a>
					       
					       <?php elseif(in_category(array(4,'cash-all-the-deals')) && is_single() ):?>
					       	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><img src="<?php echo fw_get_db_settings_option('cash_logo_sticky')['url']?>" class="logo-mobile hidden-lg hidden-md hidden-sm" alt="<?php bloginfo( 'name' );?>">
					       </a>
					       <?php elseif(in_category(array(5,'progress-a-new-way')) && is_single() ):?>
					       	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><img src="<?php echo fw_get_db_settings_option('facts_logo_sticky')['url']?>" class="logo-mobile hidden-lg hidden-md hidden-sm" alt="<?php bloginfo( 'name' );?>">
					       </a>
					       <?php elseif(in_category(array(7,'fashion-get-inspired')) && is_single() ):?>
					       	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><img src="<?php echo fw_get_db_settings_option('fashion_logo_sticky')['url']?>" class="logo-mobile hidden-lg hidden-md hidden-sm" alt="<?php bloginfo( 'name' );?>"></a>
					       <?php else:?>
					       		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><img src="<?php echo fw_get_db_settings_option('logo_sticky')['url']?>" class="logo-mobile hidden-lg hidden-md hidden-sm" alt="<?php bloginfo( 'name' );?>">
					       </a>
					    <?php endif;?>
		            <?php else:?>
	                   	<?php echo get_option( 'blogname' );?>
					<?php endif;?>
                </div>
        </div>
	            
        <?php
            wp_nav_menu( array(
                'menu'              => 'header_mobile_one',
                'theme_location'    => 'header_mobile_one',
				'container_class'	=>	'col-xs-12 columns half text-left',
                'menu_class'		=>	'full-nav'
            ));
        ?>
        <?php
            wp_nav_menu( array(
                'menu'              => 'header_mobile_two',
                'theme_location'    => 'header_mobile_two',
				'container_class'	=>	'col-xs-12 columns half text-left',
                'menu_class'		=>	'full-nav'
            ));
        ?>
                        
        <div class="container">
            <div class="col-xs-12" id="mobile-search-box">
                <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <a href="#" class="mobile-search-icon"><i class="fa fa-search fa-2x"> </i></a>
                    <input type="search" placeholder="Search ..." class="form-control" id="search" value="<?php echo get_search_query(); ?>" name="s">
                </form>
            </div>
        </div>                        
        <div class="top20" style="clear: both"><?php frontlash__mobile_newsletter();?></div>
        
        <?php if (defined('FW')): // prevent fatal error when the framework is not active 
			$social_youtube = fw_get_db_settings_option('social_youtube');
			$social_facebook = fw_get_db_settings_option('social_facebook');
			$social_instagram = fw_get_db_settings_option('social_instagram');?>
            <div class="col-xs-12 mobile-social top20">
                <h4>Stay in Touch</h4>
                <ul class="social">
                    <?php if( is_404() || is_home() || is_front_page() || is_page() || is_search() || 
		is_tag() ):?>
	<li><a href="<?php echo $social_instagram ?>" target="_blank" class="instagram"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poppy/Instagram_Icon.svg" alt=""></a></li>
	<li><a href="<?php echo $social_facebook ?>" target="_blank" class="facebook"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poppy/Facebook_Icon.svg" alt=""></a></li>
	<li><a href="<?php echo $social_youtube ?>" target="_blank" class="youtube"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poppy/YouTube_Icon.svg" alt=""></a></li>
	<li><a href="mailto:<?php echo get_option('admin_email')?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poppy/Email_Icon.svg" alt=""></a></li>
	
	<?php elseif(is_category(array(4,'cash-all-the-deals')) || in_category(array(4,'cash-all-the-deals')) && is_single()):?>
	<li><a href="<?php echo $social_instagram ?>" target="_blank" class="instagram"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/saffron/Instagram.svg" alt=""></a></li>
	<li><a href="<?php echo $social_facebook ?>" target="_blank" class="facebook"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/saffron/Facebook.svg" alt=""></a></li>
	<li><a href="<?php echo $social_youtube ?>" target="_blank" class="youtube"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/saffron/YouTube_Icon.svg" alt=""></a></li>
	<li><a href="mailto:<?php echo get_option('admin_email')?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/saffron/Email.svg" alt=""></a></li>
	
	<?php elseif(is_category(array(5,'progress-a-new-way')) ||
        in_category(array(5,'progress-a-new-way')) && is_single() ):?>
	<li><a href="<?php echo $social_instagram ?>" target="_blank" class="instagram"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/earth/Instagram.svg" alt=""></a></li>
	<li><a href="<?php echo $social_facebook ?>" target="_blank" class="facebook"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/earth/Facebook.svg" alt=""></a></li>
	<li><a href="<?php echo $social_youtube ?>" target="_blank" class="youtube"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/earth/YouTube_Icon.svg" alt=""></a></li>
	<li><a href="mailto:<?php echo get_option('admin_email')?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/earth/Email.svg" alt=""></a></li>
	
	<?php elseif(is_category(array(7,'fashion-get-inspired')) || 
        in_category(array(7,'fashion-get-inspired')) && is_single() ):?>
	<li><a href="<?php echo $social_instagram ?>" target="_blank" class="instagram"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/moss/Instagram.svg" alt=""></a></li>
	<li><a href="<?php echo $social_facebook ?>" target="_blank" class="facebook"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/moss/Facebook.svg" alt=""></a></li>
	<li><a href="<?php echo $social_youtube ?>" target="_blank" class="youtube"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/moss/YouTube_Icon.svg" alt=""></a></li>
	<li><a href="mailto:<?php echo get_option('admin_email')?>" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/moss/Email.svg" alt=""></a></li>

 <?php endif;?>
                </ul>
            </div>
        <?php endif;?>
    </div>
</div>