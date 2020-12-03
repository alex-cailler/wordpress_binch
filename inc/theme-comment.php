<?php

function binch_comment_walker()
{
    if ( ! file_exists( get_template_directory() . '/walkers/wp-bootstrap-comment-walker.php' ) ) {
        return new WP_Error( 'wp-bootstrap-comment-walker-missing', __( 'It appears the wp-bootstrap-comment-walker.php file may be missing.', 'wp-bootstrap-comment-walker' ) );
    } else {
        require_once get_template_directory() . '/walkers/wp-bootstrap-comment-walker.php';
    }
}

add_action('init', 'binch_comment_walker');

add_filter( 'comment_form_logged_in', '__return_empty_string' );