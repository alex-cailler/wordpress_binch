<?php


function binch_acf_option_page()
{

    if( function_exists('acf_add_options_page') ) {

        acf_add_options_page(array(
            'page_title' 	=> 'Theme General Setting',
            'menu_title'	=> 'Theme Settings',
            'menu_slug' 	=> 'theme-general-settings',
            'capability'	=> 'edit_posts',
            'redirect'		=> false
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'General',
            'menu_title'	=> 'General',
            'parent_slug'	=> 'theme-general-settings',
        ));

        acf_add_options_sub_page(array(
            'page_title' 	=> 'API',
            'menu_title'	=> 'API',
            'parent_slug'	=> 'theme-general-settings',
        ));

    }

}

add_action('init', 'binch_acf_option_page');