<?php
add_action('customize_register', function ($wp_customize){

    // ...settings...
    $wp_customize->add_setting( 'jr-directory-service-1-name', array('default' => '') );
    $wp_customize->add_setting( 'jr-directory-service-1-href', array('default' => '') );
    $wp_customize->add_setting( 'jr-directory-service-1-description', array('default' => '') );

    $wp_customize->add_setting( 'jr-directory-service-2-name', array('default' => '') );
    $wp_customize->add_setting( 'jr-directory-service-2-href', array('default' => '') );
    $wp_customize->add_setting( 'jr-directory-service-2-description', array('default' => '') );

    $wp_customize->add_setting( 'jr-directory-service-3-name', array('default' => '') );
    $wp_customize->add_setting( 'jr-directory-service-3-href', array('default' => '') );
    $wp_customize->add_setting( 'jr-directory-service-3-description', array('default' => '') );

    $wp_customize->add_setting( 'jr-directory-service-4-name', array('default' => '') );
    $wp_customize->add_setting( 'jr-directory-service-4-href', array('default' => '') );
    $wp_customize->add_setting( 'jr-directory-service-4-description', array('default' => '') );

    $wp_customize->add_setting( 'jr-directory-service-5-name', array('default' => '') );
    $wp_customize->add_setting( 'jr-directory-service-5-href', array('default' => '') );
    $wp_customize->add_setting( 'jr-directory-service-5-description', array('default' => '') );

    $wp_customize->add_setting( 'jr-directory-service-6-name', array('default' => '') );
    $wp_customize->add_setting( 'jr-directory-service-6-href', array('default' => '') );
    $wp_customize->add_setting( 'jr-directory-service-6-description', array('default' => '') );

    $wp_customize->add_setting( 'jr-directory-service-7-name', array('default' => '') );
    $wp_customize->add_setting( 'jr-directory-service-7-href', array('default' => '') );
    $wp_customize->add_setting( 'jr-directory-service-7-description', array('default' => '') );

    $wp_customize->add_setting( 'jr-directory-service-8-name', array('default' => '') );
    $wp_customize->add_setting( 'jr-directory-service-8-href', array('default' => '') );
    $wp_customize->add_setting( 'jr-directory-service-8-description', array('default' => '') );

    $wp_customize->add_setting( 'jr-directory-service-9-name', array('default' => '') );
    $wp_customize->add_setting( 'jr-directory-service-9-href', array('default' => '') );
    $wp_customize->add_setting( 'jr-directory-service-9-description', array('default' => '') );

    // ...and controls
    $wp_customize->add_control( 'jr-directory-service-1-name-control', array(
        'label'      => __( 'Service 1 name', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-1-name',
        'type'       => 'text'
    ) );
    $wp_customize->add_control( 'jr-directory-service-1-href-control', array(
        'label'      => __( 'Service 1 links to...', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-1-href',
        'type'       => 'dropdown-pages'
    ) );
    $wp_customize->add_control( 'jr-directory-service-1-description-control', array(
        'label'      => __( 'Service 1 description', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-1-description',
        'type'       => 'textarea'
    ) );    



    $wp_customize->add_control( 'jr-directory-service-2-name-control', array(
        'label'      => __( 'Service 2 name', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-2-name',
        'type'       => 'text'
    ) );
    $wp_customize->add_control( 'jr-directory-service-2-href-control', array(
        'label'      => __( 'Service 2 links to...', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-2-href',
        'type'       => 'dropdown-pages'
    ) );
    $wp_customize->add_control( 'jr-directory-service-2-description-control', array(
        'label'      => __( 'Service 2 description', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-2-description',
        'type'       => 'textarea'
    ) );    



    $wp_customize->add_control( 'jr-directory-service-3-name-control', array(
        'label'      => __( 'Service 3 name', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-3-name',
        'type'       => 'text'
    ) );
    $wp_customize->add_control( 'jr-directory-service-3-href-control', array(
        'label'      => __( 'Service 3 links to...', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-3-href',
        'type'       => 'dropdown-pages'
    ) );
    $wp_customize->add_control( 'jr-directory-service-3-description-control', array(
        'label'      => __( 'Service 3 description', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-3-description',
        'type'       => 'textarea'
    ) );    



    $wp_customize->add_control( 'jr-directory-service-4-name-control', array(
        'label'      => __( 'Service 4 name', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-4-name',
        'type'       => 'text'
    ) );
    $wp_customize->add_control( 'jr-directory-service-4-href-control', array(
        'label'      => __( 'Service 4 links to...', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-4-href',
        'type'       => 'dropdown-pages'
    ) );
    $wp_customize->add_control( 'jr-directory-service-4-description-control', array(
        'label'      => __( 'Service 4 description', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-4-description',
        'type'       => 'textarea'
    ) );    



    $wp_customize->add_control( 'jr-directory-service-5-name-control', array(
        'label'      => __( 'Service 5 name', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-5-name',
        'type'       => 'text'
    ) );
    $wp_customize->add_control( 'jr-directory-service-5-href-control', array(
        'label'      => __( 'Service 5 links to...', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-5-href',
        'type'       => 'dropdown-pages'
    ) );
    $wp_customize->add_control( 'jr-directory-service-5-description-control', array(
        'label'      => __( 'Service 5 description', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-5-description',
        'type'       => 'textarea'
    ) );    



    $wp_customize->add_control( 'jr-directory-service-6-name-control', array(
        'label'      => __( 'Service 6 name', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-6-name',
        'type'       => 'text'
    ) );
    $wp_customize->add_control( 'jr-directory-service-6-href-control', array(
        'label'      => __( 'Service 6 links to...', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-6-href',
        'type'       => 'dropdown-pages'
    ) );
    $wp_customize->add_control( 'jr-directory-service-6-description-control', array(
        'label'      => __( 'Service 6 description', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-6-description',
        'type'       => 'textarea'
    ) );    



    $wp_customize->add_control( 'jr-directory-service-7-name-control', array(
        'label'      => __( 'Service 7 name', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-7-name',
        'type'       => 'text'
    ) );
    $wp_customize->add_control( 'jr-directory-service-7-href-control', array(
        'label'      => __( 'Service 7 links to...', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-7-href',
        'type'       => 'dropdown-pages'
    ) );
    $wp_customize->add_control( 'jr-directory-service-7-description-control', array(
        'label'      => __( 'Service 7 description', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-7-description',
        'type'       => 'textarea'
    ) );    



    $wp_customize->add_control( 'jr-directory-service-8-name-control', array(
        'label'      => __( 'Service 8 name', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-8-name',
        'type'       => 'text'
    ) );
    $wp_customize->add_control( 'jr-directory-service-8-href-control', array(
        'label'      => __( 'Service 8 links to...', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-8-href',
        'type'       => 'dropdown-pages'
    ) );
    $wp_customize->add_control( 'jr-directory-service-8-description-control', array(
        'label'      => __( 'Service 8 description', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-8-description',
        'type'       => 'textarea'
    ) );    



    $wp_customize->add_control( 'jr-directory-service-9-name-control', array(
        'label'      => __( 'Service 9 name', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-9-name',
        'type'       => 'text'
    ) );
    $wp_customize->add_control( 'jr-directory-service-9-href-control', array(
        'label'      => __( 'Service 9 links to...', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-9-href',
        'type'       => 'dropdown-pages'
    ) );
    $wp_customize->add_control( 'jr-directory-service-9-description-control', array(
        'label'      => __( 'Service 9 description', 'jr' ),
        'section'    => 'jr-directory',
        'settings'   => 'jr-directory-service-9-description',
        'type'       => 'textarea'
    ) );  
});