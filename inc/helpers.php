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

function bloggy_site_logo()
{
    if ( function_exists('the_custom_logo') && has_custom_logo() ) {
        the_custom_logo();
    } else {
        echo '<a href="' . site_url() . '"><h1 class="text-skin-dark text-2xl">' . get_bloginfo('name') . '</h1></a>';
    }
}

function bloggy_get_icon($icon)
{
    return BloggyIcons::getIcon($icon);
}