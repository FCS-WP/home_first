<?php

$sep_id  = 300;
$section = 'header_elements';

Kirki::add_field( 'vedbo', array(
    'type'        => 'toggle',
    'settings'    => 'icons_on_topbar',
    'label'       => esc_html__( 'Show icons on Topbar', 'vedbo' ),
    'section'     => $section,
    'default'     => false,
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
    'type'        => 'toggle',
    'settings'    => 'header_burger_menu',
    'label'       => esc_html__( 'Burger Menu', 'vedbo' ),
    'section'     => $section,
    'default'     => false,
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
    'type'        => 'toggle',
    'settings'    => 'header_user_account',
    'label'       => esc_html__( 'Account', 'vedbo' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10,

) );
Kirki::add_field( 'vedbo', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'header_user_action',
    'label'       => esc_html__( 'Icon User action', 'vedbo' ),
    'section'     => $section,
    'default'     => 'modal',
    'priority'    => 10,
    'choices'     => array(
        'modal'     => esc_html__( 'Modal', 'vedbo' ),
        'account-page'     => esc_html__( 'Go to Account page', 'vedbo' ),
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'header_user_account',
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

) );

// ---------------------------------------------

Kirki::add_field( 'vedbo', array(
    'type'        => 'toggle',
    'settings'    => 'header_wishlist',
    'label'       => esc_html__( 'Wishlist', 'vedbo' ),
    'section'     => $section,
    'default'     => false,
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
    'type'        => 'toggle',
    'settings'    => 'header_cart',
    'label'       => esc_html__( 'Cart', 'vedbo' ),
    'section'     => $section,
    'default'     => true,
    'priority'    => 10,

) );
Kirki::add_field( 'vedbo', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'header_cart_action',
    'label'       => esc_html__( 'Icon cart action', 'vedbo' ),
    'section'     => $section,
    'default'     => 'mini-cart',
    'priority'    => 10,
    'choices'     => array(
        'mini-cart'     => esc_html__( 'Open Mini cart', 'vedbo' ),
        'cart-page'     => esc_html__( 'Go to Cart page', 'vedbo' ),
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'header_cart',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
