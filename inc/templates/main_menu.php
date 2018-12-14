<?php wp_nav_menu( array(
    'menu'              => 'primary',
    'theme_location'    => 'primary',
    'items_wrap'		=>	'<ul class="nav navbar-nav text-center">%3$s</ul>',
    'container_class'	=>	'collapse navbar-collapse text-center',
    'container_id'		=>	'navbar-menu'
));?>