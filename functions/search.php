<?php

add_filter('wp_nav_menu_items','add_search_box_to_menu', 10, 2);
function add_search_box_to_menu( $items, $args ) {
    if( $args->theme_location == 'primary' )
        return $items.'<li class="menu-item nav-item nav-search"><div class="nav-link search-button"><i class="fa fa-search text-light"></i></div></li>';
 
    return $items;
}