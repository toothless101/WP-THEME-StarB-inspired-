<?php

function register_styles(){
    $themePath = get_template_directory_uri();

    // Tailwind / main CSS
    wp_enqueue_style('coffee-theme-main', $themePath . '/assets/main.css');

    // style.css
    wp_enqueue_style('coffee-theme-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'register_styles');

function my_theme_setup(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'my_theme_setup');

function new_coffee_theme_setup() {

    add_image_size(
        'coffee-thumbnail', 250, 235, true
    );

    add_theme_support('custom-header', [
        "width" => 1920,
        "height" => 1080,
        "flex-width" => true,
        "flex-height" => true
    ]);

    add_theme_support('custom-logo', [
        "width" => 50,
        "height" => 50,
        "flex-width" => true,
        "flex-height" => true
    ]);

    register_nav_menus([
        'primary' => 'Primary Menu',
        'footer'  => 'Footer Menu',
        'rewards' => 'Rewards Menu',
        'online' => 'Online Menu',
        'social' => 'Social Menu',
        'promotion'=>'Promotion Menu'
    ]);
}
add_action('after_setup_theme', 'new_coffee_theme_setup');
