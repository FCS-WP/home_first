<?php

$sep_id  = 9576;
$section = 'blog';

Kirki::add_field( 'vedbo', array(
	'type'        => 'switch',
	'settings'    => 'blog_wide_layout',
  'label'       => esc_html__( 'Wide Layout', 'vedbo' ),
	'section'     => $section,
	'default'     => '0',
	'priority'    => 10,
	'choices'     => array(
		'1'  => esc_html__( 'Enable', 'vedbo' ),
		'0' => esc_html__( 'Disable', 'vedbo' ),
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
    'settings'    => 'blog_layout',
    'label'       => esc_html__( 'Blog Layout', 'vedbo' ),
    'section'     => 'panel_header',
    'default'     => 'layout-1',
    'priority'    => 10,
    'section'     => $section,
    'choices'     => array(
        'layout-1'     => esc_html__( 'Layout 01', 'vedbo' ),
        'layout-2'     => esc_html__( 'Layout 02', 'vedbo' ),
        'layout-3'     => esc_html__( 'Layout 03', 'vedbo' ),
        'layout-4'     => esc_html__( 'Layout 04', 'vedbo' ),
        'layout-5'     => esc_html__( 'Layout 05', 'vedbo' ),
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
    'settings'    => 'blog_post_column_l',
    'label'       => esc_html__( 'Posts per row (Desktop screen)', 'vedbo' ),
    'section'     => $section,
    'default'     => 3,
    'priority'    => 10,
    'choices'     => [
      'min'  => 1,
      'max'  => 6,
      'step' => 1,
    ],
		'active_callback'    => array(
        array(
            'setting'  => 'blog_layout',
            'operator' => 'contains',
            'value'    => array( 'layout-2', 'layout-4'),
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
            'setting'  => 'blog_layout',
            'operator' => 'contains',
            'value'    => array( 'layout-2', 'layout-4'),
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'vedbo', array(
    'type'        => 'slider',
    'settings'    => 'blog_post_column_m',
    'label'       => esc_html__( 'Posts per row (Tablet screen)', 'vedbo' ),
    'section'     => $section,
    'default'     => 2,
    'priority'    => 10,
    'choices'     => [
      'min'  => 1,
      'max'  => 6,
      'step' => 1,
    ],
		'active_callback'    => array(
        array(
            'setting'  => 'blog_layout',
            'operator' => 'contains',
            'value'    => array( 'layout-2', 'layout-4'),
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
            'setting'  => 'blog_layout',
            'operator' => 'contains',
            'value'    => array( 'layout-2', 'layout-4'),
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'vedbo', array(
    'type'        => 'slider',
    'settings'    => 'blog_post_column_s',
    'label'       => esc_html__( 'Posts per row (Mobile screen)', 'vedbo' ),
    'section'     => $section,
    'default'     => 1,
    'priority'    => 10,
    'choices'     => [
      'min'  => 1,
      'max'  => 6,
      'step' => 1,
    ],
    'active_callback'    => array(
        array(
            'setting'  => 'blog_layout',
            'operator' => 'contains',
            'value'    => array( 'layout-2', 'layout-4'),
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
            'setting'  => 'blog_layout',
            'operator' => 'contains',
            'value'    => array( 'layout-2', 'layout-4'),
        ),
    ),
) );

// ---------------------------------------------

Kirki::add_field( 'vedbo', array(
    'type'        => 'toggle',
    'settings'    => 'blog_post_excerpt',
    'label'       => esc_html__( 'Show Excerpt', 'vedbo' ),
    'section'     => $section,
    'default'     => 1,
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
    'settings'    => 'blog_sidebar',
    'label'       => esc_html__( 'Blog Sidebar', 'vedbo' ),
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
						'setting'  => 'blog_sidebar',
						'operator' => '==',
						'value'    => 1,
				),
		),
) );
// ---------------------------------------------

Kirki::add_field( 'vedbo', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'blog_sidebar_position',
    'label'       => esc_html__( 'Sidebar Position', 'vedbo' ),
    'section'     => $section,
    'default'     => 'right',
    'priority'    => 10,
    'choices'     => array(
        'left'    => esc_html__( 'Left', 'vedbo' ),
        'right'   => esc_html__( 'Right', 'vedbo' ),
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'blog_sidebar',
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
            'setting'  => 'blog_sidebar',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'vedbo', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'blog_pagination',
    'label'       => esc_html__( 'Pagination', 'vedbo' ),
    'section'     => $section,
    'default'     => 'default',
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
	'type'        => 'switch',
	'settings'    => 'limit_excerpt',
  'label'       => esc_html__( 'Limit Excerpt', 'vedbo' ),
	'section'     => $section,
	'default'     => '0',
	'priority'    => 10,
	'choices'     => array(
		'1'  => esc_html__( 'Enable', 'vedbo' ),
		'0' => esc_html__( 'Disable', 'vedbo' ),
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
  'type'     => 'number',
  'settings' => 'limit_excerpt_word',
  'section'  => $section,
  'label'       => esc_html__( 'Limit Excerpt Word', 'vedbo' ),
  'default'  => 30,
  'priority' => 10,
  'choices'     => array(
      'min'  => 5,
      'max'  => 100,
      'step' => 1
  ),
  'active_callback'    => array(
      array(
          'setting'  => 'limit_excerpt',
          'operator' => '==',
          'value'    => 1,
      ),
  ),
) );
