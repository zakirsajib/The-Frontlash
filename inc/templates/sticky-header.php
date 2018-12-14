<div class="scroll-img animated fadeInUp"> 
<?php if( is_404() || is_home() || is_front_page() || is_page() ):?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo fw_get_db_settings_option('logo')['url']?>" class="logo-scrolled" alt="<?php bloginfo( 'name' );?>"></a>

<?php elseif(is_category(array(4,'cash-all-the-deals'))):?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo fw_get_db_settings_option('cash_logo')['url']?>" class="logo-scrolled" alt="<?php bloginfo( 'name' );?>"></a>

<?php elseif(is_category(array(5,'progress-a-new-way'))):?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo fw_get_db_settings_option('facts_logo')['url']?>" class="logo-scrolled" alt="<?php bloginfo( 'name' );?>"></a>

<?php elseif(is_category(array(7,'fashion-get-inspired'))):?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo fw_get_db_settings_option('fashion_logo')['url']?>" class="logo-scrolled" alt="<?php bloginfo( 'name' );?>"></a>

<?php elseif(in_category(array(4,'cash-all-the-deals')) && is_single() ):?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo fw_get_db_settings_option('cash_logo')['url']?>" class="logo-scrolled" alt="<?php bloginfo( 'name' );?>"></a>
<?php elseif(in_category(array(5,'progress-a-new-way')) && is_single() ):?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo fw_get_db_settings_option('facts_logo')['url']?>" class="logo-scrolled" alt="<?php bloginfo( 'name' );?>"></a>
<?php elseif(in_category(array(7,'fashion-get-inspired')) && is_single() ):?>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo fw_get_db_settings_option('fashion_logo')['url']?>" class="logo-scrolled" alt="<?php bloginfo( 'name' );?>"></a>

<?php else:?>
	<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo fw_get_db_settings_option('logo')['url']?>" class="logo-scrolled" alt="<?php bloginfo( 'name' );?>"></a>
<?php endif;?>
</div>