<?php

/**
 * Plugin Name: GMT EDD Disable AJAX
 * Plugin URI: https://github.com/cferdinandi/gmt-edd-disable-ajax/
 * GitHub Plugin URI: https://github.com/cferdinandi/gmt-edd-disable-ajax/
 * Description: Reenables the "Disable AJAX Checkout" functionality in Easy Digital Downloads.
 * Version: 1.1.0
 * Author: Chris Ferdinandi
 * Author URI: http://gomakethings.com
 * License: GPLv3
 */


function gmt_edd_disable_ajax() {
	if ( function_exists( 'edd_is_checkout' ) && edd_is_checkout() ) return false;
	return true;
}
add_filter( 'edd_is_ajax_disabled', 'gmt_edd_disable_ajax' );