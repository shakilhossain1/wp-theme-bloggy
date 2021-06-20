<?php

/**
 * Retrevie the theme build folder
 *
 * @param $path name of the file after dist folder
 */
function bloggy_build_path($path = '')
{
    return get_theme_file_uri('/assets' . $path);
}
