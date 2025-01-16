<?php

$sep_id  = 6477;
$section = 'page_header';

Kirki::add_field( 'vedbo', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'page_header_style',
    'label'       => esc_html__( 'Page Header Style', 'vedbo' ),
    'section'     => $section,
    'default'     => 'mini',
    'priority'    => 10,
    'choices'     => array(
        'mini'  => esc_html__( 'Mini', 'vedbo' ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,

) );
// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'image',
    'settings'    => 'page_header_background_image',
    'label'       => esc_html__( 'Background Image', 'vedbo' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
        ),
    ),

) );
// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
        ),
    ),

) );
Kirki::add_field( 'vedbo', array(
    'type'        => 'color',
    'settings'    => 'pager_header_overlay_color',
    'label'       => esc_html__( 'Page Header Background Overlay Color', 'vedbo' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
        ),
    ),

) );
// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
        ),
    ),

) );
// ---------------------------------------------

Kirki::add_field( 'vedbo', array(
    'type'        => 'color',
    'settings'    => 'pager_header_background_color',
    'label'       => esc_html__( 'Page Header Background Color', 'vedbo' ),
    'section'     => $section,
    'default'     => '#FFF6EC',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
        ),
    ),

) );
// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
        ),
    ),

) );
// ---------------------------------------------

Kirki::add_field( 'vedbo', array(
    'type'        => 'slider',
    'settings'    => 'page_header_height',
    'label'       => esc_html__( 'Page Header Height', 'vedbo' ),
    'section'     => $section,
    'default'     => 200,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 100,
        'max'  => 1000,
        'step' => 1
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
        ),
    ),

) );

// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
        ),
    ),

) );
// ---------------------------------------------

Kirki::add_field( 'vedbo', array(
    'type'        => 'color',
    'settings'    => 'pager_header_font_color',
    'label'       => esc_html__( 'Page Header Font Color', 'vedbo' ),
    'section'     => $section,
    'default'     => '#616161',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
        ),
    ),

) );
// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
        ),
    ),

) );
// ---------------------------------------------

Kirki::add_field( 'vedbo', array(
    'type'        => 'color',
    'settings'    => 'pager_header_heading_color',
    'label'       => esc_html__( 'Page Header Heading Color', 'vedbo' ),
    'section'     => $section,
    'default'     => '#000',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
        ),
    ),

) );
// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'page_header_style',
            'operator' => '==',
            'value'    => 'large',
        ),
    ),

) );
// ---------------------------------------------

Kirki::add_field( 'vedbo', array(
    'type'        => 'toggle',
    'settings'    => 'page_header_breadcrumb_toggle',
    'label'       => esc_html__( 'Site Breadcrumb', 'vedbo' ),
    'section'     => $section,
    'default'     => 1,
    'priority'    => 10,
    'choices'     => array(
        'on'  => esc_html__( 'On', 'vedbo' ),
        'off' => esc_html__( 'Off', 'vedbo' ),
    ),

) );

// ---------------------------------------------
