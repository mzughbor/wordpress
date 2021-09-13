<?php

function mz_social_customizer_section( $wp_customize ){
	$wp_customize->add_setting( 'mz_facebook_handle', [
		'default' => ''
	] );

	$wp_customize->add_setting( 'mz_twitter_handle', [
		'default' => ''
	] );

	$wp_customize->add_setting( 'mz_instagram_handle', [
		'default' => ''
	] );

	
	$wp_customize->add_setting( 'mz_email', [
		'default' => ''
	] );

	$wp_customize->add_setting( 'mz_phone_number', [
		'default' => ''
	] );

	$wp_customize->add_section( 'mz_social_section', [
		'title'     => __( 'Udemy Socail Settings','udemy'),
		'priority'  => 200,
		'panel'     => 'udemy'

	] );

	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'mz_social_facebook_input', 
		array(
			'label'      => __( 'Facebook Handel', 'udemy' ),
			'section'    => 'mz_social_section',
			'settings'   => 'mz_facebook_handle'
		)	
	));

	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'mz_social_twitter_input', 
		array(
			'label'      => __( 'Twitter Handel', 'udemy' ),
			'section'    => 'mz_social_section',
			'settings'   => 'mz_twitter_handle',
			'type'       => 'text'
		)	
	));

	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'mz_social_instagram_input', 
		array(
			'label'      => __( 'Instagram Handel', 'udemy' ),
			'section'    => 'mz_social_section',
			'settings'   => 'mz_instagram_handle',
			'type'       => 'text'
		)	
	));

	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'mz_social_email_input', 
		array(
			'label'      => __( 'Email', 'udemy' ),
			'section'    => 'mz_social_section',
			'settings'   => 'mz_email',
			'type'       => 'text'
		)	
	));

	$wp_customize->add_control( new WP_Customize_Control( 
		$wp_customize, 
		'mz_social_phone_number_input', 
		array(
			'label'      => __( 'Phone Number', 'udemy' ),
			'section'    => 'mz_social_section',
			'settings'   => 'mz_phone_number',
			'type'       => 'text'
		)	
	));


}