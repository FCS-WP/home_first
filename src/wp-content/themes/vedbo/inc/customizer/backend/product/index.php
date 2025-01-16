<?php

// ============================================
// Panel
// ============================================

// no panel


// ============================================
// Sections
// ============================================

Kirki::add_section( 'product', array(
    'title'          => esc_html__( 'Product Page', 'vedbo' ),
    'priority'       => 55,
    'capability'     => 'edit_theme_options',
) );


// ============================================
// Controls
// ============================================

$sep_id  = 34532;
$section = 'product';

Kirki::add_field( 'vedbo', array(
    'type'        => 'radio-buttonset',
    'settings'    => 'product_preset',
    'label'       => esc_html__( 'Product Style', 'vedbo' ),
    'section'     => $section,
    'default'     => 'style_1',
    'priority'    => 10,
    'choices'     => array(
        'style_1'  => esc_html__( 'Style 1', 'vedbo' ),
        'style_2'  => esc_html__( 'Style 2', 'vedbo' ),
        'style_3'  => esc_html__( 'Style 3', 'vedbo' ),
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
    'settings'    => 'single_product_sidebar',
    'label'       => esc_html__( 'Single Product Sidebar', 'vedbo' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 10,
) );
// // ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'settings'    => 'single_product_gallery_heading',
    'section'     => $section,
    'type'        => 'custom',
    'default'     => wp_kses(__( '<span class="big-separator">Image Gallery</span>', 'vedbo' ),'simple'),
) );
// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'toggle',
    'settings'    => 'product_image_zoom',
    'label'       => esc_html__( 'Image Zoom', 'vedbo' ),
    'section'     => $section,
    'default'     => true,
    'description' => esc_html__( 'Zooms in where your cursor is on the image', 'vedbo' ),
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
    'settings'    => 'product_image_lightbox',
    'label'       => esc_html__( 'Image Lightbox', 'vedbo' ),
    'section'     => $section,
    'default'     => true,
    'description' => esc_html__( 'Opens your images against a dark backdrop', 'vedbo' ),
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
    'type'        => 'radio-buttonset',
    'settings'    => 'product_tab_preset',
    'label'       => esc_html__( 'Product Tab Style', 'vedbo' ),
    'section'     => $section,
    'default'     => '',
    'priority'    => 10,
    'choices'     => array(
        ''         => esc_html__( 'Default', 'vedbo' ),
        'modal'  => esc_html__( 'Modal', 'vedbo' ),
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
    'settings'    => 'single_product_section_heading',
    'section'     => $section,
    'type'        => 'custom',
    'default'     => wp_kses(__( '<span class="big-separator">Product Tabs Icons</span>', 'vedbo' ),'simple'),
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'image',
    'settings'    => 'panel_description_icon',
    'label'       => esc_html__( 'Description Icon', 'vedbo' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
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
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'image',
    'settings'    => 'panel_additional_information_icon',
    'label'       => esc_html__( 'Additional Infomation Icon', 'vedbo' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
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
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'image',
    'settings'    => 'panel_reviews_icon',
    'label'       => esc_html__( 'Reviews Icon', 'vedbo' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
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
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'image',
    'settings'    => 'panel_sizeguide_icon',
    'label'       => esc_html__( 'Size Guide Icon', 'vedbo' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
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
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'image',
    'settings'    => 'panel_store_available_icon',
    'label'       => esc_html__( 'Store availability Icon', 'vedbo' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
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
            'setting'  => 'product_tab_preset',
            'operator' => '==',
            'value'    => 'modal',
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'toggle',
    'settings'    => 'single_product_store_availiable',
    'label'       => esc_html__( 'Store availability', 'vedbo' ),
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
    'type'        => 'link',
    'settings'    => 'single_product_store_availiable_url',
    'label'       => esc_html__( 'Store availability  Page Url', 'vedbo' ),
    'section'     => $section,
    'priority'    => 10,
    'active_callback'    => array(
        array(
            'setting'  => 'single_product_store_availiable',
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
            'setting'  => 'single_product_store_availiable',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
    'type'        => 'toggle',
    'settings'    => 'single_product_size_guide',
    'label'       => esc_html__( 'Size Guide Modal', 'vedbo' ),
    'section'     => $section,
    'default'     => false,
    'priority'    => 10,
) );
// ---------------------------------------------
Kirki::add_field( 'vedbo', array(
  'type'        => 'editor',
	'settings'    => 'sizeguide_content',
	'label'       => esc_html__( 'Size Guide Popup Content', 'vedbo' ),
	'section'     => $section,
	'default'     => '',
  'priority'    => 10,
  'active_callback'    => array(
      array(
          'setting'  => 'single_product_size_guide',
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
            'setting'  => 'single_product_size_guide',
            'operator' => '==',
            'value'    => true,
        ),
    ),

) );

Kirki::add_field( 'vedbo', array(
    'type'        => 'radio-image',
    'settings'    => 'single_product_sidebar_position',
    'label'       => esc_html__( 'Sidebar Position', 'vedbo' ),
    'section'     => $section,
    'default'     => 'left',
    'priority'    => 10,
    'choices'     => array(
        'left'    => get_template_directory_uri() . '/images/customiser/product-sidebar-left.png',
        'right'   => get_template_directory_uri() . '/images/customiser/product-sidebar-right.png',
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'single_product_sidebar',
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
            'setting'  => 'single_product_sidebar',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'vedbo', array(
    'type'        => 'toggle',
    'settings'    => 'single_product_social_share',
    'label'       => esc_html__( 'Display Social Share', 'vedbo' ),
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
    'settings'    => 'upsell_products',
    'label'       => esc_html__( 'Up-sells Display', 'vedbo' ),
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
    'settings'    => 'related_products',
    'label'       => esc_html__( 'Related Products Display', 'vedbo' ),
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
            'setting'  => 'related_products',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
// ---------------------------------------------

Kirki::add_field( 'vedbo', array(
    'type'        => 'slider',
    'settings'    => 'related_products_column',
    'label'       => esc_html__( 'Number of Related Products', 'vedbo' ),
    'section'     => $section,
    'default'     => 4,
    'priority'    => 10,
    'choices'     => array(
        'min'  => 2,
        'max'  => 6,
        'step' => 1
    ),
    'active_callback'    => array(
        array(
            'setting'  => 'related_products',
            'operator' => '==',
            'value'    => true,
        ),
    ),
) );
