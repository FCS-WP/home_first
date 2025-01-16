<?php

// ============================================
// Panel
// ============================================

// no panel


// ============================================
// Sections
// ============================================

Kirki::add_section( 'social_share', array(
    'title'          => esc_html__( 'Social Share', 'vedbo' ),
    'priority'       => 65,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

$sep_id  = 98495;
$section = 'social_share';

Kirki::add_field( 'vedbo', array(
	'type'        => 'switch',
	'settings'    => 'sharing_facebook',
  'label'       => esc_html__( 'Facebook', 'vedbo' ),
	'section'     => $section,
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'vedbo' ),
		'off' => esc_html__( 'Disable', 'vedbo' ),
	),
) );

Kirki::add_field( 'vedbo', array(
	'type'        => 'switch',
	'settings'    => 'sharing_twitter',
  'label'       => esc_html__( 'Twitter', 'vedbo' ),
	'section'     => $section,
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'vedbo' ),
		'off' => esc_html__( 'Disable', 'vedbo' ),
	),
) );

Kirki::add_field( 'vedbo', array(
	'type'        => 'switch',
	'settings'    => 'sharing_reddit',
  'label'       => esc_html__( 'Reddit', 'vedbo' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'vedbo' ),
		'off' => esc_html__( 'Disable', 'vedbo' ),
	),
) );

Kirki::add_field( 'vedbo', array(
	'type'        => 'switch',
	'settings'    => 'sharing_linkedin',
  'label'       => esc_html__( 'Linkedin', 'vedbo' ),
	'section'     => $section,
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'vedbo' ),
		'off' => esc_html__( 'Disable', 'vedbo' ),
	),
) );

Kirki::add_field( 'vedbo', array(
	'type'        => 'switch',
	'settings'    => 'sharing_tumblr',
  'label'       => esc_html__( 'Tumblr', 'vedbo' ),
	'section'     => $section,
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'vedbo' ),
		'off' => esc_html__( 'Disable', 'vedbo' ),
	),
) );

Kirki::add_field( 'vedbo', array(
	'type'        => 'switch',
	'settings'    => 'sharing_pinterest',
  'label'       => esc_html__( 'Pinterest', 'vedbo' ),
	'section'     => $section,
	'default'     => 'on',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'vedbo' ),
		'off' => esc_html__( 'Disable', 'vedbo' ),
	),
) );

Kirki::add_field( 'vedbo', array(
	'type'        => 'switch',
	'settings'    => 'sharing_line',
  'label'       => esc_html__( 'Line', 'vedbo' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'vedbo' ),
		'off' => esc_html__( 'Disable', 'vedbo' ),
	),
) );

Kirki::add_field( 'vedbo', array(
	'type'        => 'switch',
	'settings'    => 'sharing_vk',
  'label'       => esc_html__( 'VK', 'vedbo' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'vedbo' ),
		'off' => esc_html__( 'Disable', 'vedbo' ),
	),
) );

Kirki::add_field( 'vedbo', array(
	'type'        => 'switch',
	'settings'    => 'sharing_whatapps',
  'label'       => esc_html__( 'Whatapps', 'vedbo' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'vedbo' ),
		'off' => esc_html__( 'Disable', 'vedbo' ),
	),
) );

Kirki::add_field( 'vedbo', array(
	'type'        => 'switch',
	'settings'    => 'sharing_telegram',
  'label'       => esc_html__( 'Telegram', 'vedbo' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'vedbo' ),
		'off' => esc_html__( 'Disable', 'vedbo' ),
	),
) );

Kirki::add_field( 'vedbo', array(
	'type'        => 'switch',
	'settings'    => 'sharing_email',
  'label'       => esc_html__( 'Email', 'vedbo' ),
	'section'     => $section,
	'default'     => 'off',
	'priority'    => 10,
	'choices'     => array(
		'on'  => esc_html__( 'Enable', 'vedbo' ),
		'off' => esc_html__( 'Disable', 'vedbo' ),
	),
) );
