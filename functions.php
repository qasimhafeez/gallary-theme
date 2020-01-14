<?php 

// Theme Setting
function theme_setup(){
    // Feature Image support to theme
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(900, 600);

    // Add theme gallary support
    add_theme_support('post-formats', array('gallary'));
}

function load_css(){
    wp_register_style('bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_register_style('style', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('bootstrap-css');
    wp_enqueue_style('style');
}

function load_js(){
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap-js', get_template_directory_uri(). '/js/bootstrap.min.js',
     'jquery', false, true);
    wp_enqueue_script('bootstrap-js');
}




// Hooks
add_action('after_setup_theme', 'theme_setup');
add_action('wp_enqueue_scripts', 'load_css');
add_action('wp_enqueue_scripts', 'load_js');