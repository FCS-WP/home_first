<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

add_filter('kitify/logo/attr/src', 'vedbo_kitify_logo_attr_src');
if(!function_exists('vedbo_kitify_logo_attr_src')){
    function vedbo_kitify_logo_attr_src( $src ){
        if(!$src){
	        $src = esc_url( Nova_OP::getOption('header_logo') );
        }
        return $src;
    }
}

add_filter('kitify/logo/attr/src4l', 'vedbo_kitify_logo_attr_src4l');
if(!function_exists('vedbo_kitify_logo_attr_src4l')){
    function vedbo_kitify_logo_attr_src4l( $src ){
        if(!$src){
	        $src = esc_url( Nova_OP::getOption('header_logo_light') );
        }
        return $src;
    }
}

add_filter('kitify/logo/attr/width', 'vedbo_kitify_logo_attr_width');
if(!function_exists('vedbo_kitify_logo_attr_width')){
    function vedbo_kitify_logo_attr_width( $value ){
        if(!$value){
            $value = esc_html(Nova_OP::getOption('header_logo_width'));
        }
        return $value;
    }
}

add_action('elementor/frontend/widget/before_render', 'vedbo_kitify_add_class_into_sidebar_widget');
if(!function_exists('vedbo_kitify_add_class_into_sidebar_widget')){
    function vedbo_kitify_add_class_into_sidebar_widget( $widget ){
        if('sidebar' == $widget->get_name()){
            $widget->add_render_attribute('_wrapper', 'class' , 'widget-area');
        }

    }
}

add_filter('kitify/banner/control/animation_effect', 'vedbo_kitify_add_banner_animation_effect');
if(!function_exists('vedbo_kitify_add_banner_animation_effect')){
    function vedbo_kitify_add_banner_animation_effect(){
        return [
          'none'   => esc_html__( 'None', 'vedbo' ),
          'hidden-content'   => esc_html__( 'Hidden Content', 'vedbo' ),
          'vedbo-1'   => esc_html__( 'Vedbo', 'vedbo' ),
					'lily'   => esc_html__( 'Lily', 'vedbo' ),
					'sadie'  => esc_html__( 'Sadie', 'vedbo' ),
					'layla'  => esc_html__( 'Layla', 'vedbo' ),
					'oscar'  => esc_html__( 'Oscar', 'vedbo' ),
					'marley' => esc_html__( 'Marley', 'vedbo' ),
					'ruby'   => esc_html__( 'Ruby', 'vedbo' ),
					'roxy'   => esc_html__( 'Roxy', 'vedbo' ),
					'bubba'  => esc_html__( 'Bubba', 'vedbo' ),
					'romeo'  => esc_html__( 'Romeo', 'vedbo' ),
					'sarah'  => esc_html__( 'Sarah', 'vedbo' ),
					'chico'  => esc_html__( 'Chico', 'vedbo' ),
        ];
    }
}

add_filter('kitify/products/control/grid_style', 'vedbo_kitify_add_product_grid_style');
if(!function_exists('vedbo_kitify_add_product_grid_style')){
    function vedbo_kitify_add_product_grid_style(){
        return [
            '1' => esc_html__('Default', 'vedbo'),
            '2' => esc_html__('Bordered Grid', 'vedbo'),
        ];
    }
}

add_filter('kitify/products/control/list_style', 'vedbo_kitify_add_product_list_style');
if(!function_exists('vedbo_kitify_add_product_list_style')){
    function vedbo_kitify_add_product_list_style(){
        return [
            '1' => esc_html__('Type 1', 'vedbo'),
            'mini' => esc_html__('Mini', 'vedbo'),
        ];
    }
}

add_filter('kitify/products/box_selector', 'vedbo_kitify_product_change_box_selector');
if(!function_exists('vedbo_kitify_product_change_box_selector')){
    function vedbo_kitify_product_change_box_selector(){
        return '{{WRAPPER}} ul.products .product-item';
    }
}

add_filter('kitify/posts/format-icon', 'vedbo_kitify_change_postformat_icon', 10, 2);
if(!function_exists('vedbo_kitify_change_postformat_icon')){
    function vedbo_kitify_change_postformat_icon( $icon, $type ){
        return $icon;
    }
}

// -----------------------------------------------------------------------------
// Elementor register breakpoint
// -----------------------------------------------------------------------------

if ( ! function_exists( 'vedbo_register_breakpoint' ) ) :
function vedbo_register_breakpoint(){
  if(defined('ELEMENTOR_VERSION')){
      $has_register_breakpoint = get_option('vedbo_has_register_breakpoint', false);
      if(empty($has_register_breakpoint)){
          update_option('elementor_experiment-additional_custom_breakpoints', 'active');
          $kit_active_id = Elementor\Plugin::$instance->kits_manager->get_active_id();
          $raw_kit_settings = get_post_meta( $kit_active_id, '_elementor_page_settings', true );
          if(empty($raw_kit_settings)){
            $raw_kit_settings = [];
          }
          $default_settings = [
              'space_between_widgets' => '0',
              'page_title_selector' => 'h1.entry-title',
              'stretched_section_container' => '',
              'active_breakpoints' => [
                  'viewport_mobile',
                  'viewport_mobile_extra',
                  'viewport_tablet',
                  'viewport_tablet_extra',
                  'viewport_laptop',
              ],
              'viewport_mobile' => 767,
              'viewport_md' => 768,
              'viewport_mobile_extra' => 991,
              'viewport_tablet' => 1024,
              'viewport_tablet_extra' => 1279,
              'viewport_lg' => 1280,
              'viewport_laptop' => 1599,
              'system_colors' => [
                [
                  '_id' => 'primary',
                  'title' => esc_html__( 'Primary', 'vedbo' )
                ],
                [
                  '_id' => 'secondary',
                  'title' => esc_html__( 'Secondary', 'vedbo' )
                ],
                [
                  '_id' => 'text',
                  'title' => esc_html__( 'Text', 'vedbo' )
                ],
                [
                  '_id' => 'accent',
                  'title' => esc_html__( 'Accent', 'vedbo' )
                ]
              ],
              'system_typography' => [
                [
                  '_id' => 'primary',
                  'title' => esc_html__( 'Primary', 'vedbo' )
                ],
                [
                  '_id' => 'secondary',
                  'title' => esc_html__( 'Secondary', 'vedbo' )
                ],
                [
                  '_id' => 'text',
                  'title' => esc_html__( 'Text', 'vedbo' )
                ],
                [
                  '_id' => 'accent',
                  'title' => esc_html__( 'Accent', 'vedbo' )
                ]
              ]
          ];
          $raw_kit_settings = array_merge($raw_kit_settings, $default_settings);
          update_post_meta( $kit_active_id, '_elementor_page_settings', $raw_kit_settings );
          Elementor\Core\Breakpoints\Manager::compile_stylesheet_templates();
          update_option('vedbo_has_register_breakpoint', true);
      }
  }
}
endif;
add_action( 'elementor/init', 'vedbo_register_breakpoint' );

/**
 * Add support for Elementor Pro locations
 *
 * @since 1.0.0
 */
if ( ! function_exists( 'vedbo_register_elementor_locations' ) ) :
  function vedbo_register_elementor_locations( $elementor_theme_manager ) {
      $elementor_theme_manager->register_all_core_location();
  }
endif;
// Add support for Elementor Pro locations
add_action( 'elementor/theme/register_locations', 'vedbo_register_elementor_locations' );
