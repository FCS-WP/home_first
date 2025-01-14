<?php


function vedbo_theme_register_required_plugins() {

  $plugins = array(
    'novaworks' => array(
      'name'               => esc_html__('Novaworks','vedbo'),
      'slug'               => 'novaworks',
      'source'             => 'http://assets.novaworks.net/plugins/novaworks.zip',
      'required'           => true,
      'description'        => esc_html__('Extends the functionality of Vedbo with theme specific shortcodes and page builder elements.','vedbo'),
      'demo_required'      => true,
      'version'            => '1.0.0'
    ),
    'kitify' => array(
      'name'               => esc_html__('Kitify','vedbo'),
      'slug'               => 'kitify',
      'source'             => 'http://assets.novaworks.net/plugins/kitify.zip',
      'required'           => true,
      'description'        => esc_html__('A perfect plugin for Elementor','vedbo'),
      'demo_required'      => true,
      'version'            => '1.1.5'
    ),
    'demo-importer' => array(
      'name'               => esc_html__('Vedbo Package Demo Data','juliette'),
      'slug'               => 'vedbo-demo-data',
      'source'             => 'http://assets.novaworks.net/plugins/vedbo/vedbo-demo-data.zip',
      'required'           => false,
      'description'        => esc_html__('This plugin use only for Novaworks Theme.','juliette'),
      'demo_required'      => true,
      'version'            => '1.0.1'
    ),
    'wc-ajax-product-filter' => array(
      'name'               => esc_html__('WC Ajax Product Filters','vedbo'),
      'slug'               => 'wc-ajax-product-filter',
      'source'             => 'http://assets.novaworks.net/plugins/wc-ajax-product-filter.zip',
      'required'           => true,
      'description'        => esc_html__('A plugin to filter woocommerce products with AJAX request.','vedbo'),
      'demo_required'      => true,
      'version'            => '9.0'
    ),
    'elementor' => array(
      'name'               => esc_html__('Elementor Page Builder','vedbo'),
      'slug'               => 'elementor',
      'required'           => true,
      'description'        => esc_html__('The most advanced frontend drag & drop page builder. Create high-end, pixel perfect websites at record speeds. Any theme, any page, any design.','vedbo'),
      'demo_required'      => true
    ),
    'woocommerce' => array(
      'name'               => esc_html__('WooCommerce','vedbo'),
      'slug'               => 'woocommerce',
      'required'           => true,
      'description'        => esc_html__('The eCommerce engine','vedbo'),
      'demo_required'      => true
    ),
    'kirki' => array(
      'name'               => esc_html__('Kirki','vedbo'),
      'slug'               => 'kirki',
      'required'           => true,
      'demo_required'      => true
    ),
    'yith-woocommerce-wishlist' => array(
      'name'               => esc_html__('YITH WooCommerce Wishlist','vedbo'),
      'slug'               => 'yith-woocommerce-wishlist',
      'required'           => false,
      'description'        => esc_html__('YITH WooCommerce Wishlist gives your users the possibility to create, fill, manage and share their wishlists allowing you to analyze their interests and needs to improve your marketing strategies.','vedbo'),
      'demo_required'      => true
    ),
    'envato-market' => array(
      'name'               => esc_html__('Envato Market','vedbo'),
      'slug'               => 'envato-market',
      'source'             => 'https://envato.github.io/wp-envato-market/dist/envato-market.zip',
      'required'           => false,
      'description'        => esc_html__('Automatically update your Envato theme','vedbo'),
      'demo_required'      => true
    ),
    'revslider' => array(
      'name'               => esc_html__('Slider Revolution','vedbo'),
      'slug'               => 'revslider',
      'source'				     => 'http://assets.novaworks.net/plugins/revslider.zip',
      'required'           => false,
      'demo_required'      => true
    ),
    'woo-variation-swatches' => array(
      'name'               => esc_html__('Variation Swatches for WooCommerce','vedbo'),
      'slug'               => 'woo-variation-swatches',
      'required'           => false,
      'description'        => esc_html__('Beautiful colors, images and buttons variation swatches for woocommerce product attributes. Requires WooCommerce 3.2+','vedbo'),
      'demo_required'      => true
    ),
    'contact-form-7' => array(
      'name'               => esc_html__('Contact Form 7','vedbo'),
      'slug'               => 'contact-form-7',
      'required'           => false,
      'description'        => esc_html__('Just another contact form plugin. Simple but flexible.','vedbo'),
      'demo_required'      => true
    ),
  );

	$config = array(
	  'id'                => 'vedbo',
		'default_path'      => '',
		'parent_slug'       => 'themes.php',
		'menu'              => 'tgmpa-install-plugins',
		'has_notices'       => true,
		'is_automatic'      => true,
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'vedbo_theme_register_required_plugins' );
