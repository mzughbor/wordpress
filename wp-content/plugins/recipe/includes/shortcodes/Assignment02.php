<?php



////////////////////////////////////////
		/*
function mz_list() {
	$posts = get_posts();

	ob_start();
	//echo "<ul>";
	?>

	<table>
		<style type="text/css" media="screen">
			table, tr,td{
				border: 1px solid #333;
			}
		</style>
		<thead>
			<tr>
				<th colspan="3">The First Assignment...</th>
			</tr>
		</thead>
		<tbody>			
			<tr>
				<td>ID</td>
				<td>Title</td>
				<td>Categories</td>
			</tr>
		
			<?php
				foreach($posts as $post_obj){
					echo"<tr>";
						echo "<td>" . $post_obj->ID . "</td>";
						echo "<td>" . $post_obj->post_title . "</td>";
						$category_detail = get_the_category($post_obj->ID);//$post->ID
						echo "<td>";
						foreach($category_detail as $cd){
							echo $cd->cat_name;
						}
						echo "</td>";
					echo"</tr>";
				}
				?>
		</tbody>
	</table>
	<?php
//echo "</ul>";
	$content = ob_get_clean();

	return $content;
}*/


//id
//title
//categoris
