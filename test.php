<?php

/**
 * Plugin Name:			Gyrus Test
 * Plugin URI:			https://github.com/gyrus/test
 * Description:			A plugin for testing GitHub.
 * Version:				0.1.3
 * Author:				Gyrus
 * GitHub Plugin URI:	https://github.com/gyrus/test
 */

add_action( 'twentyfifteen_credits', 'gt_twentyfifteen_credits' );
function gt_twentyfifteen_credits() {
	echo '<p>Test plugin version 0.1.3</p>';
}