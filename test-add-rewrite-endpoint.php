<?php
/**
 * Plugin Name:         Add Rewrite Endpoint
 * Description:         For testing purposes only
 * Version:             0.1
 * Author:              Eric Daams
 * Author URI:          http://164a.com
 */

if ( ! defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly

add_action( 'init', function() {
	add_rewrite_endpoint( 'custom-endpoint', EP_ROOT );
	add_rewrite_endpoint( 'custom-endpoint-2', EP_ROOT );
});
