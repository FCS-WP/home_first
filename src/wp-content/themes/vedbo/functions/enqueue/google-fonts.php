<?php

// =============================================================================
// Enqueue Google Fonts
// =============================================================================

if ( ! function_exists('nova_google_fonts') ) :
	function nova_google_fonts() {
		wp_enqueue_style( 'nova-google-fonts', nova_enqueue_google_fonts_url(), array(), null );
	}
endif;
add_action('wp_head', 'nova_google_fonts', 0);
if ( ! function_exists('nova_enqueue_google_fonts_url') ) :
	function nova_enqueue_google_fonts_url(){
			$mfont = Nova_OP::getOption('main_font');
			$sfont = Nova_OP::getOption('secondary_font');

			$main_font 					= $mfont['font-family'];
			$secondary_font 			= $sfont['font-family'];

			$fonts_url = '';
			$fonts     = array();
			if( $main_font != '' && $main_font != 'Poppins' ) {
				$fonts[] = $main_font.':ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700';
			}else {
				if ( 'off' !== _x( 'on', 'Poppins font: on or off', 'vedbo' ) ) {
						$fonts[] = 'Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700';
				}
			}
			if( $secondary_font != '' && $secondary_font != 'Bellefair' ) {
				$fonts[] = $secondary_font.':ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700';
			}else {
				if ( 'off' !== _x( 'on', 'Bellefair font: on or off', 'vedbo' ) ) {
						$fonts[] = 'Bellefair:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700';
				}
			}

			if ( $fonts ) {
					$fonts_url = add_query_arg( array(
							'family' => implode( '&family=', $fonts ),
							'display' => 'swap',
					), 'https://fonts.googleapis.com/css2' );
			}
			return esc_url_raw( $fonts_url );
	}
endif;
