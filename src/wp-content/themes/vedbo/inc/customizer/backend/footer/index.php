<?php

// ============================================
// Panel
// ============================================

// no panel


// ============================================
// Sections
// ============================================

Kirki::add_section( 'footer', array(
    'title'          => esc_html__( 'Footer', 'vedbo' ),
    'priority'       => 60,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

$sep_id  = 48536;
$section = 'footer';
Kirki::add_field( 'vedbo', array(
    'type'     => 'textarea',
    'settings' => 'footer_text',
    'label'    => esc_html__( 'Copyright Text', 'vedbo' ),
    'section'  => $section,
    'default'  => esc_html__( '© 2022 Vedbo All rights reserved. Designed by Novaworks', 'vedbo' ),
    'priority' => 10,
) );
