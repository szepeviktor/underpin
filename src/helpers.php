<?php
/**
 * Core functionality for Underpin
 *
 * @since
 * @package
 */


namespace Underpin;


if ( ! function_exists( 'Underpin\underpin' ) ) :

	/**
	 * Fetches the instance of the plugin.
	 * This function makes it possible to access everything else in this plugin.
	 * It will automatically initiate the plugin, if necessary.
	 * It also handles autoloading for any class in the plugin.
	 *
	 * @since 1.0.0
	 *
	 * @return Underpin|Abstracts\Underpin The bootstrap for this plugin
	 */
	function underpin() {
		return ( new Underpin )->get( __FILE__ );
	}

endif;