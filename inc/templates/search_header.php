<div class="navbar-search-box-icon">
    <a href="#" class="search-icon">
        <?php if( is_404() || is_home() || is_front_page() || is_page() || is_search() || is_tag()):?>
        <img class ="src-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/poppy/Search_icon.svg" alt="Search">
        <img class ="src-close-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/poppy/Close.svg" alt="Search">
        <?php elseif(is_tag(array('interview', 'editorial', 'feature', 'video'))):?>
        <img class ="src-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/poppy/Search_icon.svg" alt="Tag Search">
        <img class ="src-close-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/poppy/Close.svg" alt="Search">
        <?php elseif(is_category(array(4,'cash-all-the-deals')) || 
            in_category(array(4,'cash-all-the-deals')) && is_single()):?>
        <img class ="src-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/saffron/Search.svg" alt="Search">
        <img class ="src-close-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/saffron/Close.svg" alt="Search">
        <?php elseif(is_category(array(5,'progress-a-new-way')) ||
            in_category(array(5,'progress-a-new-way')) && is_single() ):?>
        <img class ="src-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/earth/Search.svg" alt="Search">
        <img class ="src-close-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/earth/Close.svg" alt="Search">
        <?php elseif(is_category(array(7,'fashion-get-inspired')) || 
            in_category(array(7,'fashion-get-inspired')) && is_single() ):?>
        <img class ="src-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/moss/Search.svg" alt="Search">
        <img class ="src-close-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/img/moss/Close.svg" alt="Search">
        <?php endif;?>
    </a>
</div>    
<div class="navbar-search-box" id="search-box">
    <div class="navbar-search-box-data">
        <form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
            <input type="search" placeholder="Search ..." class="form-control" id="search" value="<?php echo get_search_query(); ?>" name="s">
            
        </form>
    </div>
</div>