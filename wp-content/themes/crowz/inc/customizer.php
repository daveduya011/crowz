<?php
/**
 * Crowz Theme Customizer
 *
 * @package Crowz
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function crowz_customize_register($wp_customize)
{
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->get_setting('blogdescription')->transport = 'postMessage';
    $wp_customize->get_setting('header_textcolor')->transport = 'postMessage';

    if (isset($wp_customize->selective_refresh)) {
        $wp_customize->selective_refresh->add_partial(
            'blogname',
            array(
                'selector' => '.site-title a',
                'render_callback' => 'crowz_customize_partial_blogname',
            )
        );
        $wp_customize->selective_refresh->add_partial(
            'blogdescription',
            array(
                'selector' => '.site-description',
                'render_callback' => 'crowz_customize_partial_blogdescription',
            )
        );

    }

    //All our sections, settings, and controls will be added here

    // Add Header section and controls
    $wp_customize->add_section('crowz_header_section', array(
        'title' => __('Header Section', 'crowz'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('header_tagline_first',
        array(
            'default' => get_option('blogdescription'),
            'type' => 'theme_mod',
            'capability' => 'manage_options',
            'transport' => 'postMessage',
        )
    );

    $wp_customize->selective_refresh->add_partial('header_tagline_first', array(
        'selector' => '.tagline-first',
    ));

    $wp_customize->add_control('header_tagline_first', array(
        'label' => __('Header Tagline 1'),
        'type' => 'text',
        'section' => 'crowz_header_section',
    ));


    $wp_customize->add_setting('header_tagline_second',
        array(
            'default' => get_option('blogdescription'),
            'type' => 'theme_mod',
            'capability' => 'manage_options',
        )
    );

    $wp_customize->add_control('header_tagline_second', array(
        'label' => __('Header Tagline 2'),
        'type' => 'text',
        'section' => 'crowz_header_section',
    ));

    $wp_customize->add_setting('header_button_text',
        array(
            'default' => 'shop now',
            'type' => 'theme_mod',
            'capability' => 'manage_options',
        )
    );

    $wp_customize->add_control('header_button_text', array(
        'label' => __('Button Text'),
        'type' => 'text',
        'section' => 'crowz_header_section',
    ));
    $wp_customize->add_setting('header_button_url',
        array(
            'default' => '/shop',
            'type' => 'theme_mod',
            'capability' => 'manage_options',
        )
    );

    $wp_customize->add_control('header_button_url', array(
        'label' => __('Button URL'),
        'type' => 'text',
        'section' => 'crowz_header_section',
    ));

    $wp_customize->add_setting('header_bg',
        array(
            'default' => get_theme_file_uri('assets/images/placeholder.png'),
            'type' => 'theme_mod',
            'capability' => 'manage_options',
            'sanitize_callback' => 'esc_url_raw',
        )
    );

    $wp_customize->add_control(new WP_Customize_Upload_Control($wp_customize, 'header_bg', array(
        'label' => __('Header BG Image', 'crowz'),
        'section' => 'crowz_header_section',
        'mime_type' => 'image',
    )));
}

add_action('customize_register', 'crowz_customize_register');

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function crowz_customize_partial_blogname()
{
    bloginfo('name');
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function crowz_customize_partial_blogdescription()
{
    bloginfo('description');
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function crowz_customize_preview_js()
{
    wp_enqueue_script('crowz-customizer', get_template_directory_uri() . '/js/customizer.js', array('customize-preview'), CROWZ_VERSION, true);
}

add_action('customize_preview_init', 'crowz_customize_preview_js');
