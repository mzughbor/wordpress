<?php
/*
 * Plugin Name: TestAJAX
 */

define('mz_plugin_url',__FILE__);


function mz_ajax() {
	

	wp_register_script(
		'mz_alert', plugins_url( 'js/alert.js', mz_plugin_url ), ['jquery'] 
	);
	
	wp_enqueue_script( 'mz_alert' );
}

add_action( 'wp_enqueue_scripts', 'mz_ajax', 10 );



function mz_test_ajax_button() {
	return '<button id="test-ajax-button">Try AJAX</button>';
}

add_shortcode( 'test-ajax-button', 'mz_test_ajax_button');
	