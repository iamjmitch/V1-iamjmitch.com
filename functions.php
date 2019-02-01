<?php

function website_resources() {

wp_enqueue_style('style', get_stylesheet_uri() );

}

add_action('wp_enqueue_scripts', 'website_resources');

register_nav_menus(array(
	'primary' => __('Primary Menu'),
	'footer' => __('Footer Menu'),
));

function browser_title() {
	add_theme_support('title-tag');
}
add_action('after_setup_theme', 'browser_title');


add_theme_support( 'post-thumbnails' );


function filter_search($query) {
//---- Don't run in admin area
if(!is_admin()) {
// Limit search to posts
if($query->is_main_query() && $query->is_search()) {
$query->set('post_type', array('post'));
}
// Return query
return $query;
}
}
add_filter('pre_get_posts', 'filter_search');





?>