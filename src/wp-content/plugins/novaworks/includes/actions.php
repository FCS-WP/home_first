<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
if( !function_exists('nova_ajax_render_shortcode')) {
  function nova_ajax_render_shortcode() {
			$type = isset($_REQUEST['type']) ? $_REQUEST['type'] : '';
      $data = isset($_REQUEST['data']) ? $_REQUEST['data'] : '';
      if(!empty($type) && !empty($data) ) {
          echo nova_shortcode_products_list($data,$type);
      }
      die();
  }
}
add_action( 'wp_ajax_nova_get_shortcode_loader_by_ajax', 'nova_ajax_render_shortcode' );
add_action( 'wp_ajax_nopriv_nova_get_shortcode_loader_by_ajax', 'nova_ajax_render_shortcode' );

function nova_widget_dashboard_support_callback(){
    ?>
    <h3>Welcome to Themedeux! Need help?</h3>
    <p><a class="button button-primary" target="_blank" href="http://novaworks.ticksy.com/">Open a ticket</a></p>
    <p>For WordPress Tutorials visit: <a href="https://themedeux.com/" target="_blank">themedeux.com</a></p>
    <?php
}

add_action('wp_dashboard_setup', 'nova_add_widget_into_admin_dashboard', 0);
function nova_add_widget_into_admin_dashboard(){
    wp_add_dashboard_widget('nova_dashboard_theme_support', 'Novaworks Support', 'nova_widget_dashboard_support_callback');
    //wp_add_dashboard_widget('lasf_dashboard_latest_new', 'LaStudio Latest News', 'lasf_widget_dashboard_latest_news_callback');
}
