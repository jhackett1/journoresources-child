<?php

add_action( 'wp_enqueue_scripts', function () {
    // Get parent stylesheet
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    // Get child theme stylesheet
    wp_enqueue_style( 'child-style', get_stylesheet_uri() );    
} );

// Support a custom logo
add_theme_support( 'custom-logo' );

// Add homepage customisation options to the customiser
