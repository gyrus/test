<?php

/**
 * Plugin Name:			Gyrus Test
 * Plugin URI:			https://github.com/gyrus/test
 * Description:			A plugin for testing GitHub.
 * Version:				0.1.0
 * Author:				Gyrus
 * GitHub Plugin URI:	https://github.com/gyrus/test
 */

add_action( 'wp_footer', 'gt_wp_footer' );
function gt_wp_footer() {
	echo '<p>Test plugin version 0.1.0</p>';
}