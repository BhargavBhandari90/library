<?php
/*
 * Plugin Name: Easy Digital Downloads - Replace Menu Icon
 * Description: Replace the standard menu icon in Easy Digital Downloads with an icon from Dashicons
 * Author: Andrew Munro, Sumobi
 * Author URI: http://sumobi.com/
 * Version: 1.0
 */

// remove the CSS for EDD's custom menu icon
remove_action( 'admin_head', 'edd_admin_downloads_icon' );

// filter EDD's post type args to use an icon from dashicons (http://melchoyce.github.io/dashicons/)
function sumobi_edd_replace_menu_icon( $download_args ) {
	// enter the menu icon here
	$download_args['menu_icon'] = 'dashicons-cart';

	return $download_args;
}
add_filter( 'edd_download_post_type_args', 'sumobi_edd_replace_menu_icon' );