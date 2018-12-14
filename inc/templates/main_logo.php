<?php if ( function_exists('fw_get_db_settings_option') ):?>
   		<div class="col-lg-6 col-lg-offset-1 col-md-6 col-sm-6 col-xs-6">
       <?php if( is_home() || is_front_page() || is_page() ):?>
       
       <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><img src="<?php echo fw_get_db_settings_option('logo')['url']?>" alt="<?php bloginfo( 'name' );?>" class="logo-display"><img src="<?php echo fw_get_db_settings_option('logo_sticky')['url']?>" class="logo-mobile hidden-lg hidden-md hidden-sm" alt="<?php bloginfo( 'name' );?>">
       </a>
       
       <?php elseif(is_category(array(4,'cash-all-the-deals'))):?>
       	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><img src="<?php echo fw_get_db_settings_option('cash_logo')['url']?>" alt="<?php bloginfo( 'name' );?>" class="logo-display"><img src="<?php echo fw_get_db_settings_option('cash_logo_sticky')['url']?>" class="logo-mobile hidden-lg hidden-md hidden-sm" alt="<?php bloginfo( 'name' );?>">
       </a>
       <?php elseif(is_category(array(5,'progress-a-new-way'))):?>
       	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><img src="<?php echo fw_get_db_settings_option('facts_logo')['url']?>" alt="<?php bloginfo( 'name' );?>" class="logo-display"><img src="<?php echo fw_get_db_settings_option('facts_logo_sticky')['url']?>" class="logo-mobile hidden-lg hidden-md hidden-sm" alt="<?php bloginfo( 'name' );?>">
       </a>
       <?php elseif(is_category(array(7,'fashion-get-inspired'))):?>
       <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><img src="<?php echo fw_get_db_settings_option('fashion_logo')['url']?>" alt="<?php bloginfo( 'name' );?>" class="logo-display"><img src="<?php echo fw_get_db_settings_option('fashion_logo_sticky')['url']?>" class="logo-mobile hidden-lg hidden-md hidden-sm" alt="<?php bloginfo( 'name' );?>">
       </a>
       
       <?php elseif(in_category(array(4,'cash-all-the-deals')) && is_single() ):?>
       	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><img src="<?php echo fw_get_db_settings_option('cash_logo')['url']?>" alt="<?php bloginfo( 'name' );?>" class="logo-display"><img src="<?php echo fw_get_db_settings_option('cash_logo_sticky')['url']?>" class="logo-mobile hidden-lg hidden-md hidden-sm" alt="<?php bloginfo( 'name' );?>">
       </a>
       <?php elseif(in_category(array(5,'progress-a-new-way')) && is_single() ):?>
       	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><img src="<?php echo fw_get_db_settings_option('facts_logo')['url']?>" alt="<?php bloginfo( 'name' );?>" class="logo-display"><img src="<?php echo fw_get_db_settings_option('facts_logo_sticky')['url']?>" class="logo-mobile hidden-lg hidden-md hidden-sm" alt="<?php bloginfo( 'name' );?>">
       </a>
       <?php elseif(in_category(array(7,'fashion-get-inspired')) && is_single() ):?>
       	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><img src="<?php echo fw_get_db_settings_option('fashion_logo')['url']?>" alt="<?php bloginfo( 'name' );?>" class="logo-display"><img src="<?php echo fw_get_db_settings_option('fashion_logo_sticky')['url']?>" class="logo-mobile hidden-lg hidden-md hidden-sm" alt="<?php bloginfo( 'name' );?>"></a>
       <?php else:?>
       		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="navbar-brand"><img src="<?php echo fw_get_db_settings_option('logo')['url']?>" alt="<?php bloginfo( 'name' );?>" class="logo-display"><img src="<?php echo fw_get_db_settings_option('logo_sticky')['url']?>" class="logo-mobile hidden-lg hidden-md hidden-sm" alt="<?php bloginfo( 'name' );?>">
       </a>
       <?php endif;?>
   </div>
   <?php else:?>
   		<div class="col-lg-6 col-md-6">
   			<?php echo get_option( 'blogname' );?>
   		</div>
<?php endif;?>