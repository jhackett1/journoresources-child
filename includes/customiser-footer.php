<?php
add_action('customize_register', function ($wp_customize){

    // ...settings...
    $wp_customize->add_setting( 'jr-footer-fb', array('default' => '') );
    $wp_customize->add_setting( 'jr-footer-linkedin', array('default' => '') );
    $wp_customize->add_setting( 'jr-footer-twitter', array('default' => '') );

    // ...and controls
    $wp_customize->add_control( 'jr-cta-fb-control', array(
        'label'      => __( 'Facebook URL', 'jr' ),
        'section'    => 'jr-footer',
        'settings'   => 'jr-footer-fb',
        'type'       => 'text'
    ) );
    $wp_customize->add_control( 'jr-cta-linkedin-control', array(
        'label'      => __( 'LinkedIn URL', 'jr' ),
        'section'    => 'jr-footer',
        'settings'   => 'jr-footer-linkedin',
        'type'       => 'text'
    ) );
    $wp_customize->add_control( 'jr-cta-twitter-control', array(
        'label'      => __( 'Twitter URL', 'jr' ),
        'section'    => 'jr-footer',
        'settings'   => 'jr-footer-twitter',
        'type'       => 'text'
    ) );
});