<?php

function custome_service(){
    register_post_type('service',
        array(
            'labels' => array(
                'name'=>__('Services'),
                'singular_name'=> __('Service'),
                'add_new' => __('Add New Service'),
                'add_new_item' => __('Add New Service'),
                'edit_item' => __('Edit Service'),
                'new_item' => __('New Service'),
                'view_item' => __('View Service','itzone360'),
                'search_items' => __('Search Services'),
                'not_found' => __('No Services found'),
            ),
            'menu_icon' => 'dashicons-networking',
            'public' => true,
            'has_archive'=> true,
            'publicly_queryable'=> true,
            'exclude_from_search' => false,
            'menu_position' => 5,
            'hierarchical'=> true,
            'show_ui' => true,
            'capability_type' =>'post',
            'taxonomies' => array('category'),
            'rewrite' => array('slug'=> 'service'),
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'page-attributes', 'revisions'),
        )
    );
}
add_action('init', 'custome_service');

function query_post_type($query){
    if(is_category()){
        $post_type = get_query_var('post_type');
        if($post_type){
            $post_type = $post_type;
        }else{
            $post_type = array('post', 'service');
            $query -> set('post_type', $post_type);
            return $query;
        }
    }
}
add_filter('pre_get_posts', 'query_post_type');

function custome_slider(){
    register_post_type('slider',
        array(
            'labels' => array(
                'name'=>__('Slider'),
                'singular_name'=> __('Slider'),
                'add_new' => __('Add New Slider'),
                'add_new_item' => __('Add New Slider'),
                'edit_item' => __('Edit Slider'),
                'new_item' => __('New Slider'),
                'view_item' => __('View Slider','itzone360'),
                'search_items' => __('Search Slider'),
                'not_found' => __('No Slider found'),
            ),
            'menu_icon' => 'dashicons-format-gallery',
            'public' => true,
            'has_archive'=> true,
            'publicly_queryable'=> true,
            'exclude_from_search' => true,
            'menu_position' => 5,
            'hierarchical'=> true,
            'show_ui' => true,
            'capability_type' =>'post',
            'rewrite' => array('slug'=> 'slider'),
            'supports' => array('title', 'editor', 'thumbnail','excerpt'),
        )
    );
}
add_action('init', 'custome_slider');


function custome_project(){
    register_post_type('project',
        array(
            'labels' => array(
                'name'=>__('Projects'),
                'singular_name'=> __('project'),
                'add_new' => __('Add New project'),
                'add_new_item' => __('Add New project'),
                'edit_item' => __('Edit project'),
                'new_item' => __('New project'),
                'view_item' => __('View project','itzone360'),
                'search_items' => __('Search project'),
                'not_found' => __('No project found'),
            ),
            'menu_icon' => 'dashicons-calendar',
            'public' => true,
            'has_archive'=> true,
            'publicly_queryable'=> true,
            'exclude_from_search' => true,
            'menu_position' => 5,
            'hierarchical'=> true,
            'show_ui' => true,
            'capability_type' =>'post',
            'rewrite' => array('slug'=> 'project'),
            'supports' => array('title', 'editor', 'thumbnail','excerpt'),
        )
    );
}
add_action('init', 'custome_project');