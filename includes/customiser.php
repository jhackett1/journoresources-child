<?php
add_action('customize_register', function ($wp_customize){

    // Add a single panel to hold all options
    $wp_customize->add_panel( 'jr', array(
        'priority'       => 1,
        'title'          => 'Journo Resources',
        'description'    => 'Bespoke options for the new Journo Resources theme. These options override those of the existing Interface theme. When in doubt, edit here first.',
    ) );

    // Add sections
    $wp_customize->add_section( 'jr-hero', array(
        'title'          => __( 'Homepage Hero Section', 'jr' ),
        'panel'          => 'jr',
        'description'    => 'Change the full-width hero section at the top of the homepage'
    ) );
    $wp_customize->add_section( 'jr-directory', array(
        'title'          => __( 'Directory Grid', 'jr' ),
        'panel'          => 'jr',
        'description' => "Change the grid of services on the homepage. Services without at minimum a link and a name won't be shown."
    ) );
    $wp_customize->add_section( 'jr-cta', array(
        'title'          => __( 'Call to Action Bar', 'jr' ),
        'panel'          => 'jr',
        'description' => "Change the call-to-action bar near the bottom of most pages."
    ) );
    $wp_customize->add_section( 'jr-footer', array(
        'title'          => __( 'Footer Social Links', 'jr' ),
        'panel'          => 'jr',
        'description' => "Change the social links in the footer. Other footer content is filled by widgets and the Site Identity panel."
    ) );
    $wp_customize->add_section( 'jr-advice', array(
        'title'          => __( 'Advice', 'jr' ),
        'panel'          => 'jr',
        'description' => "Change aspects of the Advice category page."
    ) );
});

// Add settings and controls for each section
require_once 'customiser-hero.php';
require_once 'customiser-directory.php';
require_once 'customiser-cta.php';
require_once 'customiser-footer.php';
require_once 'customiser-advice.php';