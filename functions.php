<?php 

// Theme Setting
function theme_setup(){
    // Feature Image support to theme
    add_theme_support('post-thumbnails');
    add_post_thumbnail_size(900, 600);

    // Add theme gallary support
    add_theme_support('post-formats', array('gallary'));
}

add_action('after_setup_theme', 'theme_setup');