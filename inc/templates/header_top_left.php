<?php
wp_nav_menu( array(
    'menu'              => 'header_top_left',
    'theme_location'    => 'header_top_left',
    'items_wrap'		=>	'<ul class="header_top_left">%3$s</ul>',
    'container_class'	=>	'col-lg-2 col-md-3 col-sm-3 hidden-xs top40 bottom20',
    'container_id'		=>	'header_top_left'
));
wp_nav_menu( array(
    'menu'              => 'header_top_left_mobile',
    'theme_location'    => 'header_top_left_mobile',
    'items_wrap'		=>	'<ul class="header_top_left">%3$s</ul>',
    'container_class'	=>	'col-xs-3 hidden-sm hidden-md hidden-lg top40 bottom20',
    'container_id'		=>	'header_top_left'
));?>