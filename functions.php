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

//Hero Section Customizer
function my_customize($wp_customize){
    $wp_customize->add_section('hero_section', array(
        'title'=>"Hero Section"
    ));

    $wp_customize->add_setting('title_text', array(
        'default' => 'Welcome to Our Coffee Blog'
    ));

    $wp_customize->add_control('title_text', array(
        'label'=>'Hero Title',
        'section'=>'hero_section',
        'type'=>'text'
    ));

    $wp_customize->add_setting('sub-hero-tag', array(
        'default' => 'Discover the world of coffee, one story at a time.'
    ));

    $wp_customize->add_control('sub-hero-tag', array(
        'label'=>'Sub Hero Tag',
        'section'=>'hero_section',
        'type'=>'text'
    ));
}
add_action('customize_register', 'my_customize');

function contact_customize($wp_customize){
    $wp_customize->add_section('contact_hero_section', array(
        'title' => 'Contact Hero Section'
    ));

    $wp_customize->add_setting('contact_hero_title', array(
        'default' => 'Get in Touch With Us'
    ));

    $wp_customize->add_control('contact_hero_title', array(
        'label' => 'Contact Hero Section',
        'section' => 'contact_hero_section',
        'type' => 'text'    
    ));

    $wp_customize->add_setting('contact_hero_subtitle', array(
        'default'=>'How can we help you?'
    ));

    $wp_customize->add_control('contact_hero_subtitle', array(
        'label' => 'Contact Hero Subtitle',
        'section' => 'contact_hero_section',
        'type' => 'text'
    ));
    
    $wp_customize->add_setting('contact_bg_image');

    $wp_customize->add_control(new WP_Customize_Image_Control(
        $wp_customize, 'contact_bg_image', array(
            'label' => 'Contact Background Image',
            'section'=>'contact_hero_section',
            'setting'=>'contact_bg_image'
        )
    ));
}

add_action('customize_register', 'contact_customize');