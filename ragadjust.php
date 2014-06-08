<?php
/*
Plugin Name: WP ragadjust - French
Plugin URI: https://github.com/X-Raym/wp-ragadjust/
Version: 1.0.0
Description: Includes ragadjust.js to fix common typographical rag violations.
Author: X-Raym
Tested up to: 3.9
Author URL: http://extremraym.com

	License: GNU General Public License v3.0
	License URI: http://www.gnu.org/licenses/gpl-3.0.html
*/

	/**
	 * WP ragadjust class
	 **/
	if ( ! class_exists( 'WP_ragadjust' ) ) {

		class WP_ragadjust {

			public function __construct() {
				add_action( 'wp_enqueue_scripts', array( $this, 'wpr_script' ) );
				add_action( 'wp_footer', array( $this, 'wpr_script_load' ) );
			}

	        /*-----------------------------------------------------------------------------------*/
			/* Class Functions */
			/*-----------------------------------------------------------------------------------*/

			function wpr_script() {
				wp_enqueue_script( 'ragadjust', plugins_url( '/assets/js/ragadjust.js', __FILE__ ), '', '1.0.0' );
			}

			function wpr_script_load() {
				$elements = apply_filters( 'wpr_elements', array(
					'p',
					)
				);

				$method = apply_filters( 'wpr_method', $method = 'all' );
				?>
				<script type="text/javascript">

				    ragadjust( '<?php echo implode( ', ', $elements ); ?>', '<?php echo $method; ?>' );

				</script>
				<?php
			}

		}


		$WP_ragadjust = new WP_ragadjust();
	}
