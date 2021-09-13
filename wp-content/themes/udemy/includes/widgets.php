<?php 

function mz_widgets(){
	register_sidebar([
		'name'          => __('My first theme sidebar', 'udemy'),
		'id'            =>    'mz_sidebar',
		'description'   => __('SideBar for the Udemy', 'udemy'),
		'before_widget'=>    '<div id="%1$s" class="widgets cleafix %2$s">',
		'after_widget' =>    '</div>',
		'before_title'  =>    '<h4>',
		'after_title'   =>    '</h4>'
 	]);

}