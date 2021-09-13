<?php

function mz_customize_register_init( ){
	wp_enqueue_script(
		'mz_theme_customizer',
		get_theme_file_uri( '/assets/js/theme-customize.js' ),
		[ 'jquery', 'customize-preview'],
		false,
		true
	);
}