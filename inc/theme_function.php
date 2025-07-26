<?php

function it_customizer($wp_customize) {
    // Header Section
    $wp_customize->add_section('it_header_area', array(
        'title'       => __('Header Area', 'itzone360'),
        'description' => __('If you want to change the logo', 'itzone360'),
    ));

    // Logo Setting
    $wp_customize->add_setting('it_logo', array(
        'default' => get_template_directory_uri().'/img/logo.jpg',
        'sanitize_callback' => 'esc_url_raw', // optional but recommended
    ));

    // Logo Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'it_logo', array(
        'label'    => __('Logo Upload', 'itzone360'),
        'description' => __('Upload your logo here', 'itzone360'),
        'section'  => 'it_header_area',
        'settings' => 'it_logo',
    )));

    // Menu Section
    $wp_customize->add_section('it_menu_options', array(
        'title'=> __('Menu position options', 'itzone360'),
        'description' => __('If you want to change the menu position', 'itzone360'),
    ));

    // Menu Position Setting
    $wp_customize->add_setting('it_menu_position', array(
        'default'=> 'right_menu',
    ));

    // Menu Position Control
    $wp_customize->add_control('it_menu_position', array(
        'label'=> __('Menu Position', 'itzone360'),
        'description'=> __('Select the menu position', 'itzone360'),
        'section'=> 'it_menu_options',
        'settings'=> 'it_menu_position',
        'type'=> 'radio',
        'choices'=> array(
            'left_menu' => __('Left Menu', 'itzone360'),
            'right_menu' => __('Right Menu', 'itzone360'),
            'center_menu' => __('Center Menu', 'itzone360'),
        ),
    ));

    // Footer Section
    $wp_customize->add_section('it_footer_options', array(
        'title'=> __('Footer options', 'itzone360'),
        'description' => __('If you want to change the Footer setting', 'itzone360'),
    ));

    // Footer Setting
    $wp_customize->add_setting('it_copyright_section', array(
        'default'=> '&copy; Copyright '.date('Y').' <a href="'.home_url().'">'.get_bloginfo('name').'</a>. All rights reserved.',
    ));

    // Footer Control
    $wp_customize->add_control('it_footer_options', array(
        'label'=> __('Copyright Text', 'itzone360'),
        'description'=> __('if you need you can update your copyright text', 'itzone360'),
        'section'=> 'it_footer_options',
        'settings'=> 'it_copyright_section',
    ));


    // Theme Color Section
    $wp_customize-> add_section('it_theme_color', array(
        'title' => __('Theme Color', 'itzone360'),
        'description' => __('If you want to change the theme color', 'itzone360'),
    ));
    // Theme BG Color Setting
    $wp_customize->add_setting('it_bg_color', array(
        'default' => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color', // optional but recommended
    ));
    // Theme BG Color Control
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'it_bg_color', array(
        'label'    => __('Background Color', 'itzone360'),
        'description' => __('Select the background color', 'itzone360'),
        'section'  => 'it_theme_color',
        'settings' => 'it_bg_color',
    )));

    // Theme Text Color Section
    $wp_customize->add_setting('it_primary_color', array(
        'default' => '#ea1a70',
        'sanitize_callback' => 'sanitize_hex_color', // optional but recommended
    ));
    // Theme Color Control
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'it_primary_color', array(
        'label'    => __('Primary Color', 'itzone360'),
        'description' => __('Select the background color', 'itzone360'),
        'section'  => 'it_theme_color',
        'settings' => 'it_primary_color',
    )));

    // Login Page Customization Section
    $wp_customize->add_section('custome_login', array(
        'title' => __('Custome Login', 'itzone360'),
        'description' => __('Customize the login page appearance', 'itzone360'),
    ));
     // Logo Setting
    $wp_customize->add_setting('custome_login_logo', array(
        'default' => get_template_directory_uri().'/img/login-logo.png',
        'sanitize_callback' => 'esc_url_raw', // optional but recommended
    ));

    // Logo Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custome_login_logo', array(
        'label'    => __('Logo Upload', 'itzone360'),
        'description' => __('Upload your logo here', 'itzone360'),
        'section'  => 'custome_login',
        'settings' => 'custome_login_logo',
    )));

     // Background Image Setting
    $wp_customize->add_setting('custome_login_bg', array(
        'default' => get_template_directory_uri().'/img/loginBG.png',
        'sanitize_callback' => 'esc_url_raw', // optional but recommended
    ));

    // Background Image Control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'custome_login_bg', array(
        'label'    => __('Background Upload', 'itzone360'),
        'description' => __('Upload your Background Image here', 'itzone360'),
        'section'  => 'custome_login',
        'settings' => 'custome_login_bg',
    )));

    // Login Page Color Section
    $wp_customize->add_setting('login_primary_color', array(
        'default' => '#ea1a70',
        'sanitize_callback' => 'sanitize_hex_color', // optional but recommended
    ));
    // Login Page Color Control
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'login_primary_color', array(
        'label'    => __('Primary Color', 'itzone360'),
        'description' => __('Select the background color', 'itzone360'),
        'section'  => 'custome_login',
        'settings' => 'login_primary_color',
    )));
}
add_action('customize_register', 'it_customizer');


// Theme Primary Color Customization
// This function outputs the CSS for the theme colors based on customizer settings
function it_theme_color_customize(){
    ?>
    <style type="text/css">
        body{background: <?php print get_theme_mod("it_bg_color"); ?>}
        :root{--pink:<?php print get_theme_mod("it_primary_color"); ?>}
    </style>
    <?php
}
add_action('wp_head', 'it_theme_color_customize');

// Login Page Customization
function custome_login(){
    ?>
    <style type="text/css">
        #login h1 a, .login h1 a{
            background-image: url(<?php print get_theme_mod("custome_login_logo"); ?>) !important;
        }
        body.login{
            background: url(<?php print get_theme_mod("custome_login_bg"); ?>) !important ;
            background-size: cover !important;
        }
        
    </style>
    <?php
}
add_action('login_enqueue_scripts', 'custome_login');

