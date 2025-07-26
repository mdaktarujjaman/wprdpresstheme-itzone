<?php

// Sidebar Registration Function
function it_widgets_register(){
    register_sidebar( array(
        'name' => __( 'Widgets Area', 'itzone360' ),
        'id' => 'widgets_area',
        'description' => __( 'Widgets Area for the theme', 'itzone360' ),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar( array(
        'name' => __( 'Footer 1', 'itzone360' ),
        'id' => 'footer-1',
        'description' => __( 'Widgets Area for the theme', 'itzone360' ),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar( array(
        'name' => __( 'Footer 2', 'itzone360' ),
        'id' => 'footer-2',
        'description' => __( 'Widgets Area for the theme', 'itzone360' ),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar( array(
        'name' => __( 'Footer 3', 'itzone360' ),
        'id' => 'footer-3',
        'description' => __( 'Widgets Area for the theme', 'itzone360' ),
        'before_widget' => '<div class="child_sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
    register_sidebar( array(
        'name' => __( 'Homepage widgets', 'itzone360' ),
        'id' => 'home-1',
        'description' => __( 'Widgets Area for the theme', 'itzone360' ),
        'before_widget' => '<div class="child_home">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}
add_action( 'widgets_init', 'it_widgets_register' );