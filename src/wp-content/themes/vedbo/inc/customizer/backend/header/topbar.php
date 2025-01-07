<?php

$sep_id  = 74028;
$section = 'header_top_bar';

Kirki::add_field( 'vedbo', array(
    'type'        => 'switch',
    'settings'    => 'topbar_toggle',
    'label'       => esc_html__( 'Top Bar', 'vedbo' ),
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
            'setting'  => 'topbar_toggle',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

Kirki::add_field( 'vedbo', array(
	'type'        => 'toggle',
	'settings'    => 'topbar_wide',
  'label'       => esc_html__( 'Topbar Wide', 'vedbo' ),
	'section'     => $section,
	'default'     => false,
	'priority'    => 10,
  array(
      'setting'  => 'topbar_toggle',
      'operator' => '==',
      'value'    => true,
  ),
) );
// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    array(
        'setting'  => 'topbar_toggle',
        'operator' => '==',
        'value'    => true,
    ),

) );
// ---------------------------------------------

// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'number',
    'settings'    => 'topbar_font_size',
    'label'       => esc_html__( 'Text Size', 'vedbo' ),
    'section'     => $section,
    'default'     => 12,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 9,
        'max'  => 18,
        'step' => 1
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'topbar_toggle',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'separator',
    'settings'    => 'separator_'. $sep_id++,
    'section'     => $section,
    'active_callback'    => array(
        array(
            'setting'  => 'topbar_toggle',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'vedbo', array(
    'type'        => 'toggle',
    'settings'    => 'topbar_enable_switcher',
    'label'       => esc_html__( 'Enable Switcher', 'vedbo' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'topbar_toggle',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'vedbo', array(
  'type'        => 'editor',
	'settings'    => 'currency_content',
	'label'       => esc_html__( 'Currency Content', 'vedbo' ),
	'section'     => $section,
	'default'     => '',
  'active_callback'    => array(
      array(
          'setting'  => 'topbar_toggle',
          'operator' => '==',
          'value'    => true,
      ),
      array(
          'setting'  => 'topbar_enable_switcher',
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
            'setting'  => 'topbar_toggle',
            'operator' => '==',
            'value'    => true,
        ),
        array(
            'setting'  => 'topbar_enable_switcher',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
  'type'        => 'editor',
	'settings'    => 'language_content',
	'label'       => esc_html__( 'Language Content', 'vedbo' ),
	'section'     => $section,
	'default'     => '',
  'active_callback'    => array(
      array(
          'setting'  => 'topbar_toggle',
          'operator' => '==',
          'value'    => true,
      ),
      array(
          'setting'  => 'topbar_enable_switcher',
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
            'setting'  => 'topbar_toggle',
            'operator' => '==',
            'value'    => true,
        ),
        array(
            'setting'  => 'topbar_enable_switcher',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------
$footer_link = sprintf('<a href="%s">%s</a>', add_query_arg(array('post_type' => 'elementor_library', 'elementor_library_type' => 'section'), admin_url('edit.php')), __('here', 'vedbo'));
Kirki::add_field( 'vedbo', array(
    'type'        => 'select',
    'settings'    => 'topbar_template',
    'label'       => esc_html__( 'Topbar Template', 'vedbo' ),
    'section'     => $section,
    'default'     => 'type-default',
    'priority'    => 10,
    'choices'     => array(
        'type-default'     => esc_html__( 'Topbar Default', 'vedbo' ),
        'type-builder'     => esc_html__( 'Topbar Builder', 'vedbo' ),
    ),
) );
Kirki::add_field( 'vedbo', array(
    'type'        => 'select',
    'settings'    => 'topbar_template_builder',
    'label'       => esc_html__( 'Topbar Builder Template', 'vedbo' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
    'choices'     => nova_get_config_topbar_layout_opts(),
    'description'        => sprintf( __('You can manage topbar layout on %s', 'vedbo'), $footer_link ),
    'active_callback'    => array(
        array(
            'setting'  => 'topbar_template',
            'operator' => '==',
            'value'    => 'type-builder',
        ),
    ),
) );
