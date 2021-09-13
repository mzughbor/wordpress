<?php

function mz_ajax() {

	$numberposts = 2;
	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$args_role = array();
	$args = array(

		'numberposts'	=> 2,
		'paged'		=> $page,
	);

	if(isset($_POST['cat']) && !empty($_POST['cat'])) {
		$args_role['cat']	= $_POST['cat'];
		$args['cat']	= $_POST['cat'];
	}

	if(isset($_POST['order_by']) && !empty($_POST['order_by']) ){
		$args_role['orderby']	= $_POST['order_by'];
		$args['orderby']	= $_POST['order_by'];
	}

	if(isset($_POST['order_ASC_DESC']) && !empty($_POST['order_ASC_DESC']) ){
		$args_role['order']	= $_POST['order_ASC_DESC'];
		$args['order']	= $_POST['order_ASC_DESC'];
	}
	//$posts  = get_posts($args);   //response = ...		
	//var_dump($posts);
	$all_POSTS 		= get_posts($args_role);
	//$total_POSTS	= count($all_POSTS);
	$total_pages	= ceil($total_POSTS / $numberposts);	
	
	$posts = get_posts( $args );

	foreach ($posts as $post) {
		$cat_names[$post->ID] = get_the_category($post->ID);
	}

	$response 	= array(
		'posts' => $posts,
		'message' => 'Hello I am Mohammed!!',
		'post_cat' => $cat_names,
		'total_posts' => $total_POSTS, 
		'total_pages' => $total_pages,		
	);

	wp_send_json( $response );
	echo $total_pages;
}