<?php 

// Theme Setting
function theme_setup(){
    // Feature Image support to theme
    add_theme_support('post-thumbnails');
    set_post_thumbnail_size(900, 600);

    // Add theme gallary support
    add_theme_support('post-formats', array('gallery'));
}
add_action('after_setup_theme', 'theme_setup');

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
    wp_register_script('script-js', get_template_directory_uri(). '/js/script.js',
     'jquery', false, true);
    wp_enqueue_script('script-js');
}

// Menu
register_nav_menus(
    array(
        'top-menu' => 'Top Menu',
        'mobile-menu' => 'Mobile Menu',
    )
);

// Adding Menu Classes
function menu_item_class($classes, $item) {       
    $classes[] = "nav-item";
    $classes[] = "p-1"; 
    return $classes;
}
add_filter('nav_menu_css_class', 'menu_item_class', 10, 2);

// Custom Menu Links Class
function modify_menuclass($ulclass) {
    return preg_replace('/<a /', '<a class="nav-link btn btn-primary btn-sm"', $ulclass);
}
add_filter('wp_nav_menu', 'modify_menuclass');

// show custom post types on index page
function show_custom_posts( $query ) {
    if ( ($query->is_home() ||  $query->is_category()) && $query->is_main_query() ) {
        $query->set( 'post_type', array( 'post', 'gallery' ) );
    }
}
add_action( 'pre_get_posts', 'show_custom_posts' );


// show #anchor
function lb_menu_anchors($items, $args) {
	foreach ($items as $key => $item) {
		if ($item->object == 'custom' && substr($item->url, 0, 1) == '#') {
			$item->url = site_url() . $item->url;
		} 
	}

	return $items;
}
add_filter('wp_nav_menu_objects', 'lb_menu_anchors', 10, 2);



// Hooks
add_action('wp_enqueue_scripts', 'load_css');
add_action('wp_enqueue_scripts', 'load_js');
add_theme_support('menus');