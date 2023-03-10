<?php

function taylor_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
}

add_action('after_setup_theme', 'taylor_theme_support');

function taylor_menus(){
    $locations = array(
        'primary' => 'Desktop Primary Left Sidebar',
        'footer' => 'Footer Menu Items'
    );

    register_nav_menus($locations);
}

add_action('init','taylor_menus');

function taylor_register_styles(){
    $version = wp_get_theme()->get('Version');
    wp_enqueue_style('taylor-fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css', array(), '5.13.0', 'all');
    wp_enqueue_style('taylor-styles', get_template_directory_uri() . '/assets/css/main.css', array('taylor-bootstrap'), $version, 'all');
    wp_enqueue_style('taylor-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css', array(), '4.4.1', 'all');
}

add_action('wp_enqueue_scripts', 'taylor_register_styles');

function taylor_register_scripts(){
    wp_enqueue_script('taylor-jquery', 'https://code.jquery.com/jquery-3.4.1.slim.min.js', array(), '3.4.1', true);
    wp_enqueue_script('taylor-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js', array(), '1.16.0', true);
    wp_enqueue_script('taylor-bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js', array(), '4.4.1', true);
    wp_enqueue_script('taylor-scripts', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'taylor_register_scripts');
?>