<?php

// Theme Title
add_theme_support('title-tag');

// Theme Post Thumbnails
add_theme_support('post-thumbnails', array('post', 'page', 'product', 'service','project',));
add_image_size('post-thumbnails', 800, 350, true);
add_image_size('service', 400, 200, true);
add_image_size('project', 400, 200, true);


function my_theme_support() {
    add_theme_support('post-thumbnails');
    add_theme_support( 'post-formats', [ 'aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat', ]);
}
add_action('after_setup_theme', 'my_theme_support');

// Except 40 words

function custom_excerpt_more($more) {
    global $post;
    return '<br> <br> <a class="readmore" href="' . get_permalink($post->ID) . '">Read More</a>';
}
add_filter('excerpt_more', 'custom_excerpt_more');

// Custom Excerpt Length
function custom_excerpt_length($length) {
    return 40; // Number of words in excerpt
}
add_filter('excerpt_length', 'custom_excerpt_length',999);

// Page Navigation
function it_pagenaviation() {
    global $wp_query, $wp_rewrite;

    $pages = '';
    $max = $wp_query->max_num_pages;
    if (!$current = get_query_var('paged')) $current = 1;

    $args = array(
        'base'      => str_replace(999999999, '%#%', get_pagenum_link(999999999)),
        'total'     => $max,
        'current'   => $current,
        'prev_text' => __('&laquo; Previous', 'it'),
        'next_text' => __('Next &raquo;', 'it')
    );

    if ($max > 1) {
        echo '<div class="wp_pagenav">';

        // Optional: display current page info
        echo '<p class="pages">Page ' . $current . ' <span>of</span> ' . $max . '</p>';

        // Output pagination links
        echo paginate_links($args);

        echo '</div>';
    }
}




