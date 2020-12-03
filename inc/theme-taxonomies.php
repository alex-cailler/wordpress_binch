<?php

function binch_taxonomies(){

    register_taxonomy('race', 'post', [
        'labels' => [
            'name' => 'Races',
            'singular_name' => 'Race',
        ],
        'hierarchical' => true,
        'show_ui' => true,
        'show_in_rest' => true,
        'show_admin_column' => true,
    ]);

}

add_action('init', 'binch_taxonomies');