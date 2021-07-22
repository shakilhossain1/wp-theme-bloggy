<?php

require get_template_directory() . "/inc/BloggyIcons.php";
/**
 * Retrevie the theme build folder
 *
 * @param $path name of the file after dist folder
 */
function bloggy_build_path($path = '')
{
    return get_theme_file_uri('/assets/build/' . $path);
}

/**
 * Display the bloggy site logo
 */
function bloggy_site_logo()
{
    if (function_exists('the_custom_logo') && has_custom_logo()) {
        the_custom_logo();
    } else {
        echo '<a href="' . site_url() . '"><h1 class="text-skin-dark text-2xl">' . get_bloginfo('name') . '</h1></a>';
    }
}

/**
 * Retrive the svg icon not echoing out
 *
 * @param string $icon Name of the icon
 *
 * @return string svg icon html
 */
function bloggy_get_icon($icon): string
{
    return BloggyIcons::getIcon($icon);
}

/**
 * Popular posts query
 *
 * @return \WP_query Instance class
 */
function bloggy_popular_posts_query() : WP_Query
{
    return new WP_Query([
        'post_type' => 'post',
        'posts_per_page' => 4,
        'meta_key' => 'post_views_count',
        'orderby' => 'meta_value_num',
        'order' => 'DESC',
    ]);
}
