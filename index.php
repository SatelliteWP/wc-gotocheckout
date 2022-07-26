<?php
/** 
 * Plugin Name: Go directly to checkout after a 'Add to cart'
 * Description: Skip the cart and go to checkout
 * Version: 1.0
 * Author: SatelliteWP
 * License: GPL v3
 */

if ( ! defined( 'ABSPATH' ) ) die( 'No' );


/**
 * Skip the cart and redirect to checkout
 *
 * @param string $url     URL to redirect to after a 'Add to cart'
 * @param mixed  $product WC_Product
 *
 * @return string URL
 */
function swp_woocommerce_add_to_cart_redirect( $url, $product ) {
	
	// Redirect to checkout if ?gotocheckout=true is found in the URL
	// To use it: /?add-to-cart=25&quantity=1&gotocheckout=true
	if ( isset( $_GET['gotocheckout'] ) && $_GET['gotocheckout'] == 'true' ) {
		return wc_get_checkout_url();
	}
	
	return $url;
}
add_filter( 'woocommerce_add_to_cart_redirect', 'swp_woocommerce_add_to_cart_redirect', 50, 2 );
