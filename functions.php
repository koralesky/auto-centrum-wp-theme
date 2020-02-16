<?php

require_once('class-wp-bootstrap-navwalker.php');

function load_stylesheets(){

    wp_register_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');
    
    wp_register_style('stylesheet', get_template_directory_uri() . '/style.css', array(), false, 'all');
    wp_enqueue_style('stylesheet');
    
}
add_action('wp_enqueue_scripts', 'load_stylesheets');

function load_js()
{

    wp_enqueue_script('jquery');
    

    wp_register_script('bootstrapjsbundle', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js', array('jquery'));
    wp_enqueue_script( 'bootstrapjsbundle');
    
    wp_register_script('scripts', get_template_directory_uri() . '/js/scripts.js', ' ', null, true);
    wp_enqueue_script( 'scripts' );
    
    wp_register_script('jqscripts',  get_template_directory_uri(). '/js/jqscripts.js', array('jquery'),'1.0.0', true);
    wp_enqueue_script('jqscripts');

}
add_action('wp_enqueue_scripts', 'load_js');

?>