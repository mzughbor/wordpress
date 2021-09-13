<?php

function r_recipe_creator_shortcode(){

	$creatorHTML		=	file_get_contents( 'creator-template.php', true);
	$editorHTML			=	r_generate_content_editor();
	$creatorHTML		=	str_replace( 'CONTENT_EDITOR', $editorHTML, $creatorHTML );

	return $creatorHTML;
}

function r_generate_content_editor(){
	ob_start();
	wp_editor( '', 'recipecontenteditor'); 
	$editor_contents	=	ob_get_clean();
	return $editor_contents;

}

/*function mz_list_print_table() {
	$args = array();
	$numberposts = 2;
	$all_posts = get_posts($args);
	$total_posts = count($all_posts);
	var_dump($total_posts);
	$total_pages = ceil($total_posts / $numberposts);
	var_dump($total_pages);

	$args['numberposts'] = $numberposts;
	$posts = get_posts( $args );
	ob_start();
	?>
	
	<span class='mz_span'></span>
	<form action="#" method="post" >
		<label for="roles">Show Posts By Category</label>
		<?php wp_dropdown_categories(['show_option_all' => 'All categories']);?>
		<label for="order_by">Arrange based on</label>
		<select id="order_by" name="the_order_by">
			<option value="id">Id</option>
			<option value="title">Title</option>
		</select>
		<label for="order">ASC/DESC</label>
		<select id="order" name="the_order">
			<option value="ASC">ASC</option>
			<option value="DESC">DESC</option>
		</select>
	</form>

	<table>
		<style type="text/css" media="screen">
			table, tr,td{
				border: 1px solid #333;
			}
		</style>
		<thead>	
			<tr>
				<th colspan="5">All POSTs...</th>
			</tr>	
			<tr>
				<td>ID</td>
				<td>Title</td>
				<td>Category</td>
			</tr>
		</thead>
		<tbody class="mz_ajax">			
			<?php	
			foreach ($posts as $post) {
				echo"<tr>";
				echo "<td>" . $post->ID . "</td>";
				echo "<td>" . $post->post_title . "</td>";
				$cat_names = get_the_category($post->ID);
				echo "<td>";
				foreach ($cat_names as $mz_name) {
					echo $mz_name->cat_name. ", ";
				}
				echo "</td>";
				//echo "<td>" . $post->cat_name . "</td>";
				//echo "<td>" . $post->display_name . "</td>";
				echo"</tr>";
				//var_dump($cat_names);
			}
			?>
		</tbody>
	</table>
	<?php

	echo "<div id='mz-pagination'>";
	for ($i=1; $i <= $total_pages; $i++) { 
		$currentSpan = "";
		if($i == 1) {
			$currentSpan = 'font-weight: bold; color: red;';
		}
		echo "<span style='margin: 0 5px; cursor: pointer;". $currentSpan. "'>" . $i . "</span>";
	}
	echo "</div>";


//////////////////////////////////////////////////////////////////////////////
	

/*	$category_obj = get_the_category();
	$category = $category_obj[0]->slug;

	$cats = get_the_category();
	$args = array(
		'post_type'		 => 'post',
		'post__not_in' 	 => array( get_the_ID() ),
		'posts_per_page' => 3,
		'cat'     		 => 'mzugh',
		'meta_query' => array(
			array(
				'key' => 'recommended_article',
				'value' => '1',
				'compare' => '=='
			)
		)
	);
	$query = new WP_Query( $args );
	if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();
	endwhile;
	endif;
	print_r($query);
	//wp_reset_postdata(); //end close comment >>/*
//////////////////////////////////////////////////////////////////////////////

	$content = ob_get_clean();
	return $content;
}
*/


function mz_test_ajax_button() {
	//return '<input type="submit" id="test-ajax-button"></input>';
}			
