<?php

//Setup
define( 'MZ_DEV_MOOD' , true);

//Includes 
include( get_theme_file_path( '/includes/front/enqueue.php')   );
include( get_theme_file_path( '/includes/setup.php')   );
include( get_theme_file_path( '/includes/custom-nav-walker.php')   );
include( get_theme_file_path( '/includes/widgets.php')   );
include( get_theme_file_path( '/includes/theme-customizer.php')   );
include( get_theme_file_path( '/includes/customizer/social.php')   );
include( get_theme_file_path( '/includes/customizer/misc.php')   );
include( get_theme_file_path( '/includes/customizer/enqueue.php')   );

//Hooks 
add_action( 'wp_enqueue_scripts', 'mz_enqueue');
add_action( 'after_setup_theme', 'mz_setup_theme');
add_action( 'widgets_init', 'mz_widgets');
add_action( 'customize_register' , 'mz_customize_register');
add_action( 'customize_preview_init', 'mz_customize_register_init');



//Shortcodes 
