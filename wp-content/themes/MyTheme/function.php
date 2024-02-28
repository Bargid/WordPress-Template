<?php

function load_css() 
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all' );
    wp_enqueue_style('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_css');


function load_js()
{
    wp_enqueue_script('jquery');
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), false, true);
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'load_js');

// Image Sizes
// add_image_size('small', 600, 600, false);
// add_image_size('my_custom_size', 1200, 600, true);

//Image settings
add_action( 'after_setup_theme', 'custom_theme_setup' );
function custom_theme_setup() {
  add_image_size( 'my_custom_size', 1200, 600, true );
}

?>