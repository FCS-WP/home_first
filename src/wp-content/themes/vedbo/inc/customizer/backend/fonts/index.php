<?php

// ============================================
// Panel
// ============================================

// no panel


// ============================================
// Sections
// ============================================

Kirki::add_section( 'fonts', array(
    'title'          => esc_html__( 'Fonts', 'vedbo' ),
    'priority'       => 35,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

$sep_id  = 59374;
$section = 'fonts';


Kirki::add_field( 'vedbo', array(
    'type'        => 'number',
    'settings'    => 'font_size',
    'label'       => esc_html__( 'Base Font Size', 'vedbo' ),
    'description' => esc_html__( 'The Base Font Size refers to the size applied to the paragraph text. All other elements, such as headings, links, buttons, etc will adjusted automatically to keep the hierarchy of font sizes based on this one size. Easy-peasy!', 'vedbo' ),
    'section'     => $section,
    'default'     => 16,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 12,
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
    'type'        => 'typography',
    'settings'    => 'main_font',
    'label'       => esc_html__( 'Body Font', 'vedbo' ),
    'section'     => $section,
    'default'     => array(
        'font-family'    => 'Poppins',
        'variant'        => '400',
        'subsets'        => array( 'latin-ext' ),
    ),
    'choices' => array(
      'variant' => array(
          '400',
      ),
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
    'type'        => 'typography',
    'settings'    => 'secondary_font',
    'label'       => esc_html__( 'Headings Font', 'vedbo' ),
    'section'     => $section,
    'default'     => array(
        'font-family'    => 'Bellefair',
        'variant'        => '400',
        'subsets'        => array( 'latin' ),
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
    'type'        => 'select',
    'settings'    => 'secondary_font_weight',
    'label'       => esc_html__( 'Headings Font Weight', 'vedbo' ),
    'section'     => $section,
    'default'     => '400',
    'priority'    => 10,
    'choices'     => array(
        '300'     => '300',
        '400'     => '400',
        '500'     => '500',
        '600'     => '600',
        '700'     => '700',
    ),
) );
