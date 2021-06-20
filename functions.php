<?php

require get_template_directory() . "/inc/helpers.php";

function bloggy_widgets_init()
{
    register_sidebar([
        'name' => __('Primary Sidebar', 'bloggy'),
        'id' => 'primary',
        'description' => __('This is sidebar Description', 'bloggy'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>'
    ]);
}
add_action('widgets_init', 'bloggy_widgets_init');

function bloggy_setup()
{
    /**
     * Make theme available for translation.
     * Translations can be placed in the /languages/ directory.
     */
    load_theme_textdomain('bloggy', get_template_directory() . '/languages');

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'bloggy_setup');

function bloggy_assets()
{
    $version = ( wp_get_environment_type() === 'development' ) ? time() : BIIIRD_THEME_VERSION;

    wp_register_style('tailwindcss', get_theme_file_uri('/assets/build/css/tailwind.css'), $version, true);
    wp_register_script('bloggy-js', get_theme_file_uri('/assets/build/js/main.js'));

    wp_enqueue_style('tailwindcss');
    wp_enqueue_script('bloggy-js');
}


add_action('wp_enqueue_scripts', 'bloggy_assets');
