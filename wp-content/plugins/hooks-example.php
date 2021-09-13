<?php

/*
 * Plugin Name: Hooks Example
 */

// function mz_title( $title ){
// 	return 'Hooked '.$title;
// }


// function mz_footer_shoutout(){
// 	echo 'Hooked Example plugin was here <br>';
// }


// function mz_footer_shoutout_V02(){
// 	echo 'Hooked Example plugin was here Version 02 <br>';
// }

// add_filter( 'the_title', 'mz_title' );
// add_action( 'wp_footer', 'mz_footer_shoutout' );
// add_action( 'wp_footer', 'mz_footer_shoutout_V02', 2);


function mz_footer(){
	do_action( 'mz_custom_footer' );
}

function ju_kill_wp(){
	echo 'Hello!';
}

add_action( 'wp_footer', 'mz_footer');
add_action( 'mz_custom_footer' , 'ju_kill_wp');

 	