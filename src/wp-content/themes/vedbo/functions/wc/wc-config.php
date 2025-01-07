<?php
if ( ! function_exists( 'vedbo_add_extra_hook_to_product_item' ) ) :
  function vedbo_add_extra_hook_to_product_item(){
    add_action('kitify/products/action/shop_loop_item_action','add_wishlist_icon_in_product_card', 5);
    add_action('kitify/products/action/shop_loop_item_action','nova_product_quick_view_button', 15);
  }
endif;
add_action('kitify/products/before_render', 'vedbo_add_extra_hook_to_product_item' );

if ( ! function_exists( 'kitify_add_grid_list_display' ) ) :
function kitify_add_grid_list_display() {
  echo '<div class="shop-display-type">
				<span class="shop-display-grid active">
					<svg class="vedbo-grid-icon">
					 <use xlink:href="#vedbo-grid"></use>
					</svg>
				</span>
				<span class="shop-display-list">
					<svg class="vedbo-list-icon">
					 <use xlink:href="#vedbo-list"></use>
					</svg>
				</span>
			</div>';
}
endif;

//==============================================================================
// Add Wishlist Icon in Product Card
//==============================================================================
function add_wishlist_icon_in_product_card() {
  if( 1 ==  Nova_OP::getOption('shop_product_wishlist_button') ):
    if (class_exists('YITH_WCWL')) :
      global $product;
    ?>

      <a href="<?php echo YITH_WCWL()->is_product_in_wishlist($product->get_id())? esc_url(YITH_WCWL()->get_wishlist_url()) : esc_url(add_query_arg('add_to_wishlist', $product->get_id())); ?>"
        data-product-id="<?php echo esc_attr($product->get_id()); ?>"
        data-product-type="<?php echo esc_attr($product->get_type()); ?>"
        data-wishlist-url="<?php echo esc_url(YITH_WCWL()->get_wishlist_url()); ?>"
        data-browse-wishlist-text="<?php echo esc_attr(get_option('yith_wcwl_browse_wishlist_text')); ?>"
        class="nova_product_wishlist_btn <?php echo YITH_WCWL()->is_product_in_wishlist($product->get_id())? 'clicked added' : 'add_to_wishlist'; ?>" rel="nofollow">
        <i class="inova ic-favorite"></i>
      </a>

    <?php
    endif;
  endif;
}
//==============================================================================
//	Product Quick View
//==============================================================================
if ( !function_exists('nova_product_quick_view_button')):
function nova_product_quick_view_button() {
  global $product, $custom_shop_quick_view;
  if( 1 ==  Nova_OP::getOption('shop_product_quickview_button') ):
    echo '
      <a href="#" class="nova_product_quick_view_btn" data-product-id="' . $product->get_id() . '" rel="nofollow"><i class="inova ic-zoom"></i></a>
    ';
  endif;
}
endif;

if ( !function_exists('kitify_add_toolbar_open')):
function kitify_add_toolbar_open(){
    if(wc_get_loop_prop('kitify_loop_allow_extra_filters')){
        echo '<div class="shop_header_placeholder kitify-active">';
        echo '<header class="woocommerce-archive-header">';
    }
}
endif;

if ( !function_exists('kitify_add_toolbar_close')):
function kitify_add_toolbar_close(){
    if(wc_get_loop_prop('kitify_loop_allow_extra_filters')){
      $per_page_array = nova_woo_get_product_per_page_array();
      $per_page = nova_woo_get_product_per_page();
      $current_url = add_query_arg(null, null);

      echo '<div class="woocommerce-archive-header-inside">';
      do_action( 'nova_woocommerce_result_count' );
      echo '<div class="woocommerce-archive-toolbar sh--color">';
      do_action( 'kitify/products/toolbar/filter' );
      if(!empty($per_page_array)):
        echo '<div class="nova-custom-view">';
        echo '<label>'.esc_html__( 'Show','vedbo' ).'</label>';
        echo '<ul>';
        $active_a = '';
        foreach ($per_page_array as $page_val){
          if($per_page == $page_val) {
            $active_a = ' class="active"';
          }else {
            $active_a = '';
          }
          echo '<li'.$active_a.'><a href="'.esc_url(add_query_arg('per_page', $page_val, $current_url)).'">'.esc_html( $page_val ).'</a></li>';
        }
        echo '</ul>';
        echo '</div>';
      endif;
      do_action( 'nova_woocommerce_catalog_ordering' );
      echo '</div>';
      echo '</div>';

      echo '</header>';
      echo '</div>';
    }
}
endif;

if ( !function_exists('kitify_setup_toolbar')):
function kitify_setup_toolbar(){
    if(empty(wc_get_loop_prop('kitify_loop_before')) && (is_shop() || is_product_taxonomy())){
        wc_set_loop_prop('kitify_loop_allow_extra_filters', true);
    }
}
endif;
