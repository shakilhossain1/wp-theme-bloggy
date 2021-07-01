<?php

function bloggy_register_search_route()
{
    register_rest_route('bloggy/v1', 'search', [
        'methods' => WP_REST_Server::READABLE,
        'callback' => 'bloggy_search_results'
    ]);
}

function bloggy_search_results(WP_REST_Request $request)
{
    $result = [];

    $query = new WP_Query([
        'post_type' => 'post',
        's' => $request['term']
    ]);

    if ($query->have_posts()) {
        while($query->have_posts()) {
            $query->the_post();

            array_push($result, [
                'id' => get_the_ID(),
                'title' => get_the_title(),
                'image' => get_the_post_thumbnail_url(),
                'date' => get_the_date(),
                'permalink' => get_the_permalink()
            ]);
        }
    }
    wp_reset_postdata();

    return $result;
}

add_action('rest_api_init', 'bloggy_register_search_route');