<?php

function gateway_enqueue_parent_theme_style() {
    wp_enqueue_style( 'gateway-parent-style', get_template_directory_uri().'/style.css' );
    wp_dequeue_style( 'gateway-style' );
    wp_enqueue_style( 'gateway-child-style', get_stylesheet_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'gateway_enqueue_parent_theme_style', 99 );