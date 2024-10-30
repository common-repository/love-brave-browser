<?php
/**
 * Plugin Name:       Love, Brave Browser
 
 * Description:       Shoutout your love for Brave Browser.
 * Requires at least: 5.8
 * Requires PHP:      7.0
 * Version:           1.0.1
 * Author:            Alan Jacob Mathew
 * Author URI:        https://profiles.wordpress.org/alanjacobmathew/
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       love-brave-browser
 *
 * 
 */

function brave_browser_shoutout_block_init() {
	$dir = __DIR__;

	$index_js = 'index.js';
	wp_register_script(
		'brave-browser-shoutout-block-editor',
		plugins_url( $index_js, __FILE__ ),
		array(
			'wp-block-editor',
			'wp-blocks',
			'wp-i18n',
			'wp-element',
		),
		filemtime( "$dir/$index_js" )
	);
	wp_set_script_translations( 'brave-browser-shoutout-block-editor', 'love-brave-browser' );

	register_block_type(
		'ajm/love-brave-browser',
		array(
			'editor_script' => 'brave-browser-shoutout-block-editor',
			'render_callback' => 'brave_browser_shoutout_block_render',
		)
	);
}
add_action( 'init', 'brave_browser_shoutout_block_init' );


function brave_browser_shoutout_block_render() {

	$link_address = "https://brave.com";
	return __("For better internet experience use &#10084; ", "love-brave-browser") . '<a href="' . $link_address . '" target="_blank" rel="nofollow noreferrer ugc noopener">Brave Browser</a> <br>';
}

// shortcode for classic editor lovers  [with_love_brave]
function love_brave_shortcode() {
	$link_address = "https://brave.com";
   return __("For better internet experience use &#10084; ", "love-brave-browser") . '<a href="' . $link_address . '" target="_blank" rel="nofollow noreferrer ugc noopener">Brave Browser</a> <br>';
}

add_shortcode( 'with_love_brave', 'love_brave_shortcode' );

