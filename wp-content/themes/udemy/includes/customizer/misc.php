<?php

// Database settings
function mz_misc_customizer_section( $wp_customize ){
	$wp_customize->add_setting('mz_header_show_search', [
		'default'  => 'yes',
		'transport'=> 'postMessage'
	]);

	$wp_customize->add_setting('mz_header_show_cart', [
		'default'  => 'yes',
		'transport'=> 'postMessage'
	]);

	$wp_customize->add_setting('mz_footer_copyright_text', [
		'default'  => 'Copyright &copy; 2020 All Rights Reserved.',
	]);	

	$wp_customize->add_setting('mz_footer_tos_page', [
		'default'  => 0,
	]);

	$wp_customize->add_setting('mz_footer_privacy_page', [
		'default'  => 0,
	]);

	$wp_customize->add_setting('mz_show_header_popular_posts', [
		'default' => false
	]);

	$wp_customize->add_setting('mz_popular_posts_widget_title', [
		'default' => 'Breaking News'
	]);

	$wp_customize->add_setting( 'mz_read_more_color', [
		'default' => '#1ABC9C'
	]);

	$wp_customize->add_setting( 'mz_report_file', [
		'default' => ''
	]);

	// Create >>> holder for all our Controllers

	$wp_customize->add_section('mz_misc_section', [
		'title'     => __( 'Udemy Misc Settings', 'udemy'),
		'priority'  => 220,
		'panel'     => 'udemy'
	]);

	$wp_customize-> add_control(new Wp_Customize_control(
		$wp_customize,
		'mz_header_show_search_input',
		array(
			'label'       => __('Show Search Button in Header', 'udemy'),
			'section'     => 'mz_misc_section',
			'settings'    => 'mz_header_show_search',
			'type'        => 'checkbox',
			'choices'     =>  [
				'yes'     =>  'yes'
			]			
		)
	));

	$wp_customize-> add_control(new Wp_Customize_control(
		$wp_customize,
		'mz_header_show_cart_input',
		array(
			'label'       => __('Show Cart Button in Header', 'udemy'),
			'section'     => 'mz_misc_section',
			'settings'    => 'mz_header_show_cart',
			'type'        => 'checkbox',
			'choices'     =>  [
				'yes'     =>  'yes'
			]			
		)
	));

	$wp_customize-> add_control(new Wp_Customize_control(
		$wp_customize,
		'mz_header_copyright_text_input',
		array(
			'label'       => __('Show Search Button in Header', 'udemy'),
			'section'     => 'mz_misc_section',
			'settings'    => 'mz_footer_copyright_text',
		)
	));

	$wp_customize-> add_control(new Wp_Customize_control(
		$wp_customize,
		'mz_footer_tos_page_input',
		array(
			'label'       => __('Fotter TOS Page', 'udemy'),
			'section'     => 'mz_misc_section',
			'settings'    => 'mz_footer_tos_page',
			'type'        => 'dropdown-pages'			
		)
	));

	$wp_customize-> add_control(new Wp_Customize_control(
		$wp_customize,
		'mz_footer_Privacy_page_input',
		array(
			'label'       => __('Footer Privacy Policy Page', 'udemy'),
			'section'     => 'mz_misc_section',
			'settings'    => 'mz_footer_privacy_page',
			'type'        => 'dropdown-pages'			
		)
	));

	$wp_customize->add_control(
		new WP_Customize_Color_Control(
			$wp_customize,
			'mz_read_more_color_input',
			array(
				'label'   => __( 'Read more Link Color', 'udemy' ),
				'section' => 'mz_misc_section',
				'settings'=> 'mz_read_more_color',
			)
		)
	);

	
	$wp_customize->add_control(
		new WP_Customize_Upload_Control( 
			$wp_customize, 
			'mz_report_file_input', 
			array(
				'label'      => __( 'File Report', 'udemy' ),
				'section'    => 'mz_misc_section',
				'settings'   => 'mz_report_file',
			)
		) 
	);	
	
	$wp_customize->add_control(
		new Wp_Customize_control( 
			$wp_customize, 
			'mz_show_header_popular_posts_widget_input', 
			array(
				'label'      => __( 'Show Header Popular Posts Widget', 'udemy' ),
				'section'    => 'mz_misc_section',
				'settings'   => 'mz_show_header_popular_posts',
				'type'       => 'checkbox',
				'choices'    =>  [
					'yes'    =>  __('yes' , 'udemy')
				]			

			) 
		) 
	);

	$wp_customize->add_control(
		new WP_Customize_Control( 
			$wp_customize, 
			'mz_popular_posts_widget_title_input', 
			array(
				'label'      => __( 'Popular Posts Widget title', 'udemy' ),
				'section'    => 'mz_misc_section',
				'settings'   => 'mz_popular_posts_widget_title',
 							

			) 
		) 
	);


}
