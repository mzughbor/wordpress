<?php
	
function mz_customize_register( $wp_customize ){
	// echo '<pre>';
	// var_dump( $wp_customize );
	// echo '<pre>';

	$wp_customize->get_section( 'title_tagline' )->title  =  'General';
	$wp_customize->add_panel( 'udemy',[
		'title'       =>  __('Udemy','udemy'),
		'description' =>  '<p>Udemy Theme Settings</p>',
		'priority'    =>   2000
	]);


	mz_social_customizer_section( $wp_customize );
	mz_misc_customizer_section( $wp_customize );
}