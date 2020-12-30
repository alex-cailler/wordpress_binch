<?php

function binch_theme_init()
{

    add_theme_support('title-tag');

    add_theme_support('custom-logo');

    add_theme_support('post-thumbnails');

    add_theme_support('html5', array('comment-list'));

}

add_action('init', 'binch_theme_init');