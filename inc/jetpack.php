<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Ascend
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function ascend_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'ascend_jetpack_setup' );
