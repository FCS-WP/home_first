<?php

$sep_id  = 8475;
$section = 'header_settings';

Kirki::add_field( 'vedbo', array(
	'type'        => 'switch',
	'settings'    => 'header_wide',
  'label'       => esc_html__( 'Header Wide', 'vedbo' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'vedbo' ),
		'off' => esc_html__( 'Disable', 'vedbo' ),
	),
) );
// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,

) );
Kirki::add_field( 'vedbo', array(
    'type'        => 'slider',
    'settings'    => 'header_height',
    'label'       => esc_html__( 'Header Height (px)', 'vedbo' ),
    'section'     => $section,
    'default'     => 100,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 80,
        'max'  => 300,
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
	'type'        => 'switch',
	'settings'    => 'header_transparent',
  'label'       => esc_html__( 'Header Transparent', 'vedbo' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'vedbo' ),
		'off' => esc_html__( 'Disable', 'vedbo' ),
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
    'settings'    => 'header_font_size',
    'label'       => esc_html__( 'Header Text Size', 'vedbo' ),
    'section'     => $section,
    'default'     => 16,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 9,
        'max'  => 24,
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
    'type'        => 'toggle',
    'settings'    => 'header_search_toggle',
    'label'       => esc_html__( 'Header Search', 'vedbo' ),
    'section'     => $section,
    'default'     => 1,
    'priority'    => 10,
    'choices'     => array(
        'on'  => esc_html__( 'On', 'vedbo' ),
        'off' => esc_html__( 'Off', 'vedbo' ),
    ),

) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'header_search_style',
    'label'       => esc_html__( 'Search Style', 'vedbo' ),
    'section'     => $section,
    'default'     => 'fullscreen',
    'priority'    => 10,
    'choices'     => array(
        'default'  => esc_html__( 'Default', 'vedbo' ),
        'fullscreen'  => esc_html__( 'Fullscreen', 'vedbo' ),
    ),
) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'checkbox',
    'settings'    => 'header_search_by_category',
    'label'       => esc_html__( 'Search by Category', 'vedbo' ),
    'section'     => $section,
    'default'     => '0',
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'header_search_toggle',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
