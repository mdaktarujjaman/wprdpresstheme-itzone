<?php
// Login Customization CSS Enqueue
// This file is used to enqueue custom styles for the WordPress login page
function login_enqueue_style(){
    wp_enqueue_style('login_customization', get_stylesheet_directory_uri() . '/css/login_customization.css', array(), '1.0.1', 'all');

}
add_action('login_enqueue_scripts', 'login_enqueue_style');

// Custom Login Logo
function custom_ligin_logo(){
    ?>
    <style>
        #login h1 a, .login h1 a{
            background-image: url('<?php print get_stylesheet_directory_uri() . "/img/login-logo.png"; ?>');
        }
    </style>
    <?php
}
add_action( 'login_enqueue_scripts', 'custom_ligin_logo' );

// Custom Login Logo url
function custom_ligin_logo_url(){
    return home_url(); // Redirects to the homepage when the logo is clicked
}
add_filter( 'login_headerurl', 'custom_ligin_logo_url' );