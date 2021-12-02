<?php

function init_template()
{

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');

    register_nav_menus(array(
        'top_menu' => 'Main Menu',
    ));
}

add_action('after_setup_theme', 'init_template');

function assets()
{
    // Styles
    wp_register_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css', '', '5.1.3', 'all');
    wp_register_style('monserrat', 'https://fonts.googleapis.com/css2?family=Montserrat&display=swap', '', '1.0', 'all');

    wp_enqueue_style('styles', get_stylesheet_uri(), array('bootstrap', 'monserrat'), '1.0', 'all');

    // JavaScript
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js', '', '5.1.3', true);
    wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.js', '', '1.0', true);
}

add_action('wp_enqueue_scripts', 'assets');

