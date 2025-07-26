<?php


register_nav_menu( 'main_menu', __('Main Menu', 'itzone360') );


// Walker Menu Properties
function it_walker_menu_properties($item_output, $item, $args){
    if( !empty($item->description)){
        $item_output = str_replace('</a>', '<span class="walker_nav">' . $item->description . '</span>' . '</a>', $item_output);
    }
    return $item_output;
}
add_filter('walker_nav_menu_start_el', 'it_walker_menu_properties', 10, 3);
