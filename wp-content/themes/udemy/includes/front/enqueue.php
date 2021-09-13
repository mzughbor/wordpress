<?php
function mz_enqueue()
{
	$uri   = get_theme_file_uri();
	
	$ver   = WP_DEBUG ? time() : false; //MZ_DEV_MOOD

	wp_register_style( 'mz_google_fronts' ,
	 "https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Raleway:300,400,500,600,700|Crete+Round:400i",
	 [],
	 $ver

	);

	wp_register_style( 'mz_bootstrap', $uri .'/assets/css/bootstrap.css', [], $ver );
	wp_register_style( 'mz_style', $uri .'/assets/css/style.css', [], $ver );
	wp_register_style( 'mz_dark', $uri .'/assets/css/dark.css', [], $ver);
	wp_register_style( 'mz_font_icons', $uri .'/assets/css/font-icons.css' ,[], $ver);
	wp_register_style( 'mz_animate', $uri .'/assets/css/animate.css' ,[], $ver);
	wp_register_style( 'mz_magnific_popup', $uri .'/assets/css/magnific-popup.css' ,[], $ver);
	wp_register_style( 'mz_responsive', $uri .'/assets/css/responsive.css' ,[], $ver);
	wp_register_style( 'mz_custom', $uri .'/assets/css/custom.css' ,[], $ver);

	wp_enqueue_style( 'mz_google_fronts');
	wp_enqueue_style( 'mz_bootstrap');
	wp_enqueue_style( 'mz_style');
	wp_enqueue_style( 'mz_dark');
	wp_enqueue_style( 'mz_font_icons');
	wp_enqueue_style( 'mz_animate');
	wp_enqueue_style( 'mz_magnific_popup');
	wp_enqueue_style( 'mz_responsive');
	wp_enqueue_style( 'mz_custom');


	$read_more_color       =     get_theme_mod( 'mz_read_more_color' );
	wp_add_inline_style( 
		'mz_custom', 
		'a.more-link{ color: '.$read_more_color. ';border-color: '.$read_more_color.'; }'
	);

	wp_register_script( 'mz_plugins',   $uri.'/assets/js/plugins.js',[], $ver , true );
	wp_register_script( 'mz_functions', $uri.'/assets/js/functions.js',[], $ver, true );

    wp_enqueue_script('jquery');
	wp_enqueue_script('mz_plugins');
    wp_enqueue_script('mz_functions');




}

