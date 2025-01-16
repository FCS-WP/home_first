<?php

$sep_id  = 45785;
$section = 'shop';

Kirki::add_field( 'vedbo', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'shop_layout_width',
    'label'       => esc_html__( 'Layout Width', 'vedbo' ),
    'section'     => $section,
    'default'     => 'boxed',
    'priority'    => 10,
    'choices'     => array(
        'wide'  => esc_html__( 'Wide', 'vedbo' ),
        'boxed'  => esc_html__( 'Boxed', 'vedbo' ),
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
    'type'        => 'toggle',
    'settings'    => 'shop_sidebar',
    'label'       => esc_html__( 'Shop Sidebar', 'vedbo' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10,
) );

// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'shop_sidebar',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'vedbo', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'shop_sidebar_position',
    'label'       => esc_html__( 'Sidebar Position', 'vedbo' ),
    'section'     => $section,
    'default'     => 'left',
    'priority'    => 10,
    'choices'     => array(
        'left'    => esc_html__( 'Left', 'vedbo' ),
        'right'   => esc_html__( 'Right', 'vedbo' ),
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'shop_sidebar',
            'operator' => '==',
            'value'    => true,
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
						'setting'  => 'shop_sidebar',
						'operator' => '==',
						'value'    => true,
				),
		),
) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'toggle',
    'settings'    => 'shop_filter_active',
    'label'       => esc_html__( 'Shop Filters', 'vedbo' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'shop_sidebar',
            'operator' => '==',
            'value'    => false,
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
            'setting'  => 'shop_sidebar',
            'operator' => '==',
            'value'    => false,
        ),
    ),
) );
Kirki::add_field( 'vedbo', array(
    'type'        => 'slider',
    'settings'    => 'shop_filter_height',
    'label'       => esc_html__( 'Widget Scrollbar Max Height', 'vedbo' ),
    'section'     => $section,
    'default'     => 150,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 150,
        'max'  => 1000,
        'step' => 1
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
    'type'        => 'radio-buttonset',
    'settings'    => 'shop_pagination',
    'label'       => esc_html__( 'Pagination', 'vedbo' ),
    'section'     => $section,
    'default'     => 'infinite_scroll',
    'priority'    => 10,
    'choices'     => array(
        'default'           => esc_html__( 'Classic', 'vedbo' ),
        'load_more_button'  => esc_html__( 'Load More', 'vedbo' ),
        'infinite_scroll'   => esc_html__( 'Infinite', 'vedbo' ),
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
    'type'        => 'slider',
    'settings'    => 'shop_mobile_columns',
    'label'       => esc_html__( 'Number of Columns on Mobile', 'vedbo' ),
    'section'     => $section,
    'default'     => 2,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 1,
        'max'  => 2,
        'step' => 1
    ),
) );
