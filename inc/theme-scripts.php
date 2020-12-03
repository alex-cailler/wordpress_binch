<?php

/**
 * Enqueue styles
 */
function binch_scripts()
{
    wp_enqueue_style('app-css', get_template_directory_uri() . '/assets/css/app.css');
    wp_enqueue_script('vendor-js', get_template_directory_uri() . '/assets/js/vendor.js', array(), '1.0.0', true);
    wp_enqueue_script('manifest-js', get_template_directory_uri() . '/assets/js/manifest.js', array(), '1.0.0', true);
    wp_enqueue_script('app-js', get_template_directory_uri() . '/assets/js/app.js', array(), time(), true);
}

add_action('wp_enqueue_scripts', 'binch_scripts');
