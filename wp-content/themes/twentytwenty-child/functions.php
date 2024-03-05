<?php

function twentytwenty_child_enqueue_styles()
{
    $parentHandle = 'twentytwenty-style';

    // parent style sheet
    wp_enqueue_style($parentHandle, get_template_directory_uri() . '/style.css');

    // child style sheet
    wp_enqueue_style('child-style', get_stylesheet_uri(), [$parentHandle]);
}
add_action('wp_enqueue_scripts', 'twentytwenty_child_enqueue_styles');