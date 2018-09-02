<?php
add_action('customize_register', function ($wp_customize){

    // Add a single panel to hold all options
    $wp_customize->add_panel( 'jr', array(
        'priority'       => 1,
        'title'          => 'Journo Resources',
        'description'    => 'Bespoke options for the new Journo Resources theme. These options override those of the existing Interface theme. When in doubt, edit here first.',
    ) );

    // Add sections
    $wp_customize->add_section( 'jr_hero', array(
        'title'          => __( 'Homepage Hero Section', 'jr' ),
        'panel'          => 'jr'
    ) );
    $wp_customize->add_section( 'jr_grid', array(
        'title'          => __( 'Directory Grid', 'jr' ),
        'panel'          => 'jr',
        'description' => "Change the grid of services on the homepage. Services without at minimum a link and a name won't be shown."
    ) );



    // ...a setting...
    $wp_customize->add_setting( 'themename_theme_options[color_scheme]', array(
        'default'        => 'some-default-value',
        'type'           => 'option',
        'capability'     => 'edit_theme_options',
    ) );

    // ...and a control
    $wp_customize->add_control( 'themename_color_scheme', array(
        'label'      => __( 'Color Scheme', 'themename' ),
        'section'    => 'jr_grid',
        'settings'   => 'themename_theme_options[color_scheme]',
        'type'       => 'radio',
        'choices'    => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
            ),
    ) );

});