<?php
function binch_sidebar()
{
    register_sidebar([
        'name'          => 'Footer 1',
        'id'            => "sidebar-1",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    ]);

    register_sidebar([
        'name'          => 'Footer 2',
        'id'            => "sidebar-2",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    ]);

    register_sidebar([
        'name'          => 'Footer 3',
        'id'            => "sidebar-3",
        'description'   => '',
        'class'         => '',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget'  => "</li>\n",
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => "</h2>\n",
    ]);
}

add_action('init', 'binch_sidebar');