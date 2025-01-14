<?php

// =============================================================================
// Register Menus
// =============================================================================

if ( ! function_exists('nova_get_theme_menus') ) :
function nova_get_theme_menus() {
	$menus = array(
		'nova_topbar_menu' 		=> esc_html__('Top Bar (Mobile)', 'vedbo'),
		'nova_menu_primary' 		=> esc_html__('Main Navigation', 'vedbo'),
		'nova_menu_fullscreen' 		=> esc_html__('Fullcreen Menu', 'vedbo'),

	);

	return $menus;
}
endif;

if ( ! function_exists('nova_theme_menus') ) :
function nova_theme_menus() {
	register_nav_menus( nova_get_theme_menus() );
}
add_action( 'after_setup_theme', 'nova_theme_menus' );
endif;
