<?php

function binch_acf_option_page()
{

    acf_add_options_page();

}

add_action('init', 'binch_acf_option_page');


function binch_acf_register_block() {

    if( function_exists('acf_register_block_type') ) {

        // TODO

    }
}

add_action('acf/init', 'binch_acf_register_block');



function binch_google_map_api_key ( $api ) {

    $api['key'] = get_field('google_map_api_key', 'option');

    return $api;

}

add_filter('acf/fields/google_map/api', 'binch_google_map_api_key');


function binch_acf_update_google_map_api_key () {

    acf_update_setting('google_api_key', get_field('google_map_api_key', 'option'));

}

add_action('acf/init', 'binch_acf_update_google_map_api_key');