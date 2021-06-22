<?php

require get_template_directory() . "/inc/helpers.php";

function bloggy_widgets_init()
{
    register_sidebar([
        'name' => __('Primary Sidebar', 'bloggy'),
        'id' => 'primary',
        'description' => __('This is sidebar Description', 'bloggy'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>'
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

    add_theme_support('custom-logo', array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    ));

    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'bloggy_setup');

function bloggy_assets()
{
    $theme = wp_get_theme();
    $version = time();

    wp_register_script('bloggy-js', get_theme_file_uri('/assets/build/js/main.js'), [], $version, false);
    wp_register_style('tailwindcss', get_theme_file_uri('/assets/build/css/tailwind.css'), [], $version);

    wp_enqueue_script('bloggy-js');
    wp_enqueue_style('tailwindcss');
}

add_action('wp_enqueue_scripts', 'bloggy_assets');

function bloggy_nav_menus()
{
    register_nav_menus(array(
        'primary_menu' => __('Primary Menu', 'bloggy')
    ));
}

add_action('init', 'bloggy_nav_menus');

add_filter( 'clean_url', function( $url ) {
    if ( FALSE !== strpos( $url, 'bloggy/assets/build/js/main.js' ) ) {
        return "$url' defer='defer";
    }
    return $url;
}, 11, 1 );


function bloggy_add_arro_submenu( $title, $item, $depth, $args )
{
    if (in_array( 'menu-item-has-children', $item->classes, true ) ) {
        $title .= bloggy_get_icon('arrow-down');
    }
    return $title;
}
add_filter('nav_menu_item_title', 'bloggy_add_arro_submenu', 10, 4);

/*
 * Set post views count using post meta
 */
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    // die(var_dump($count));
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}