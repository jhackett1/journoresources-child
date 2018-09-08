<?php
add_action('customize_register', function ($wp_customize){

    // ...settings...
    $wp_customize->add_setting( 'jr-cta-headline', array('default' => '') );
    $wp_customize->add_setting( 'jr-cta-subheadline', array('default' => '') );
    $wp_customize->add_setting( 'jr-cta-button-label', array('default' => '') );
    $wp_customize->add_setting( 'jr-cta-button-href', array('default' => '') );
    $wp_customize->add_setting( 'jr-cta-image', array('default' => '') );

    // ...and controls
    $wp_customize->add_control( 'jr-cta-headline-control', array(
        'label'      => __( 'Headline', 'jr' ),
        'section'    => 'jr-cta',
        'settings'   => 'jr-cta-headline',
        'type'       => 'text'
    ) );
    $wp_customize->add_control( 'jr-cta-subheadline-control', array(
        'label'      => __( 'Subeadline', 'jr' ),
        'section'    => 'jr-cta',
        'settings'   => 'jr-cta-subheadline',
        'type'       => 'textarea'
    ) );
    $wp_customize->add_control( 'jr-cta-button-label-control', array(
        'label'      => __( 'Button label', 'jr' ),
        'section'    => 'jr-cta',
        'settings'   => 'jr-cta-button-label',
        'type'       => 'text'
    ) );    
    $wp_customize->add_control( 'jr-cta-button-href-control', array(
        'label'      => __( 'Button URL', 'jr' ),
        'section'    => 'jr-cta',
        'settings'   => 'jr-cta-button-href',
        'type'       => 'text',
        'description' => 'Provide a full link on this website or elsewhere on the web'
    ) );
    $wp_customize->add_control(
        new WP_Customize_Image_Control($wp_customize, 'jr-headline-image-control', array(
                'label'      => __( 'Graphic', 'jr' ),
                'section'    => 'jr-cta',
                'settings'   => 'jr-cta-image',
                'context'    => 'your_setting_context',
                'description' => 'Override the default graphic. A PNG file with transparent background works best'
            )
        )
    );
});