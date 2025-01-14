<?php
$sep_id  = 7652;
$section = 'style_callout';

// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'color',
    'settings'    => 'callout_bg_color',
    'label'       => esc_html__( 'Background Color', 'vedbo' ),
    'section'     => $section,
    'default'     => '#4845A8',
    'priority'    => 10,
) );

// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
) );
// ---------------------------------------------

Kirki::add_field( 'vedbo', array(
    'type'        => 'color',
    'settings'    => 'callout_font_color',
    'label'       => esc_html__( 'Text Color', 'vedbo' ),
    'section'     => $section,
    'default'     => '#ffffff',
    'priority'    => 10,
) );
