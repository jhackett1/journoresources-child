<?php

add_action('customize_register', function ($wp_customize){

    // Custom control
    class JR_Dropdown_Category_Control extends WP_Customize_Control {
        public $type = 'dropdown-category';
        protected $dropdown_args = false;
        protected function render_content() {
            ?><label><?php
            if ( ! empty( $this->label ) ) :
                ?><span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span><?php
            endif;
            if ( ! empty( $this->description ) ) :
                ?><span class="description customize-control-description"><?php echo $this->description; ?></span><?php
            endif;
            $dropdown_args = wp_parse_args( $this->dropdown_args, array(
                'taxonomy'          => 'category',
                'show_option_none'  => ' ',
                'selected'          => $this->value(),
                'show_option_all'   => '',
                'orderby'           => 'id',
                'order'             => 'ASC',
                'show_count'        => 1,
                'hide_empty'        => 1,
                'child_of'          => 0,
                'exclude'           => '',
                'hierarchical'      => 1,
                'depth'             => 0,
                'tab_index'         => 0,
                'hide_if_empty'     => false,
                'option_none_value' => 0,
                'value_field'       => 'term_id',
            ) );
            $dropdown_args['echo'] = false;
            $dropdown = wp_dropdown_categories( $dropdown_args );
            $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );
            echo $dropdown;
            ?></label><?php
        }
    }

    // ...settings...
    $wp_customize->add_setting( 'jr-advice-category', array('default' => '') );
    $wp_customize->add_setting( 'jr-advice-widget', array('default' => '') );

    // ...and controls
    $wp_customize->add_control( new JR_Dropdown_Category_Control( $wp_customize, 'jr-advice-category', array(
		'section'       => 'jr-advice',
		'label'         => esc_html__( 'Category', 'jr' ),
		'description'   => esc_html__( 'Choose which category on your site represents Advice. It will then be displayed on the home page and recieve a pretty archive page.', 'jr' ),
    ) ) );
    $wp_customize->add_control(
        'jr-advice-widget-control', 
        array(
            'label'    => __( 'Display widget areas in grid of posts?', 'jr' ),
            'section'  => 'jr-advice',
            'settings' => 'jr-advice-widget',
            'type'     => 'checkbox'
        )
    );
});
