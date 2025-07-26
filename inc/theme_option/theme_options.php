<?php

// Enqueue Css
function theme_option_custom_css(){
    wp_enqueue_style('theme_option_custom_css', get_template_directory_uri(). '/css/theme_option_custom.css', array(), '1.0.0', 'all');
}
add_action('admin_enqueue_scripts', 'theme_option_custom_css');

function it_add_theme_page(){
    // Add a new top-level menu for theme options
    // The 'manage_options' capability is required to access this page
    add_menu_page('Theme Options for Admin','Theme Option','manage_options','it_theme_option','it_theme_options_page','dashicons-admin-generic',101);

    add_submenu_page('it_theme_option','Theme Option','General','manage_options','it_theme_option','it_theme_options_page');

    add_submenu_page('it_theme_option','Theme Custom CSS','Custom CSS','manage_options','it_custom_css','it_theme_custom_css_page');

    add_submenu_page('it_theme_option','Theme Custom JavaScript','Custom JS','manage_options','it_custom_js','it_theme_custom_js_page');

}
add_action( 'admin_menu', 'it_add_theme_page' );


function it_theme_options_page(){
    require_once(get_template_directory() . '/inc/theme_option/general.php');

}

function it_theme_custom_css_page(){
    require_once(get_template_directory() . '/inc/theme_option/custom_css.php');
}

function it_theme_custom_js_page(){
    require_once(get_template_directory() . '/inc/theme_option/custom_js.php');
}