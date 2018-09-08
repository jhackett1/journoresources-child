<?php
add_action('customize_register', function ($wp_customize){

    // ...settings...
    $wp_customize->add_setting( 'jr-hero-headline', array('default' => '') );
    $wp_customize->add_setting( 'jr-hero-subheadline', array('default' => '') );
    $wp_customize->add_setting( 'jr-hero-button-label', array('default' => '') );
    $wp_customize->add_setting( 'jr-hero-button-href', array('default' => '') );
    $wp_customize->add_setting( 'jr-hero-image', array('default' => '') );

    // ...and controls
    $wp_customize->add_control( 'jr-hero-headline-control', array(
        'label'      => __( 'Headline', 'jr' ),
        'section'    => 'jr-hero',
        'settings'   => 'jr-hero-headline',
        'type'       => 'text'
    ) );
    $wp_customize->add_control( 'jr-hero-subheadline-control', array(
        'label'      => __( 'Subeadline', 'jr' ),
        'section'    => 'jr-hero',
        'settings'   => 'jr-hero-subheadline',
        'type'       => 'textarea'
    ) );
    $wp_customize->add_control( 'jr-hero-button-label-control', array(
        'label'      => __( 'Button label', 'jr' ),
        'section'    => 'jr-hero',
        'settings'   => 'jr-hero-button-label',
        'type'       => 'text'
    ) );    
    $wp_customize->add_control( 'jr-hero-button-href-control', array(
        'label'      => __( 'Button links to...', 'jr' ),
        'section'    => 'jr-hero',
        'settings'   => 'jr-hero-button-href',
        'type'       => 'dropdown-pages'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, 'jr-headline-image-control', array(
                'label'      => __( 'Background image', 'jr' ),
                'section'    => 'jr-hero',
                'settings'   => 'jr-hero-image',
                'context'    => 'your_setting_context' 
            )
        )
    );
});