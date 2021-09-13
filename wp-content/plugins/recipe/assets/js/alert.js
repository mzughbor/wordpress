var	page = 1;

jQuery(document).ready(function($) {

	$('#cat').change(function(event) {
		page = 1;
		posts_tabel(page);
	});

	$('#order_by').change(function(event) {
		posts_tabel(page);
	});

	$('#order').change(function(event) {
		posts_tabel(page);
	});

	$('#mz-pagination').delegate('span', 'click', function(event) {
		page = $(this).html();
		posts_tabel(page);
	});

	function posts_tabel(page_a){
		var data = {
			action: 'mz_test_ajax_first_try',
			cat: $('#cat').val(),
			page: page_a,
			order_ASC_DESC: $('#order').val(),
			order_by: $('#order_by').val(),	
		};

		console.log(data.page);

		$.post( mz_obj.mz_ajax_url, data, function(response) { //loclaize...
			tableBody = $("tbody.mz_ajax"); 
			tableBody.empty(); 
	 		$( ".mz_span" ).text( "There are " + response.total_posts + " posts!!");
			$.each(response.posts, function(index, val) {
				//console.log('ffffffffffffffffff');
				markup = "<tr class='mz_counter' >"
				+ "<td> " + val.ID + "</td>"
				+ "<td> " + val.post_title + "</td>"
				+ "<td> ";
				$.each(response.post_cat[val.ID], function(index, cat) {
					markup += cat.name + ", ";
				});
				markup += "</td>" + "</tr>";
				//+ "<td> " + val.data.display_name + "</td>"
				tableBody.append(markup);	
			});	

			del_spans = $("#mz-pagination"); 
			del_spans.empty(); 

			var i;
			for (i = 1; i <= response.total_pages; i++) {
				var currentSpan = '';
				if(i == page_a) {
					currentSpan = 'font-weight: bold; color: red;';
				}
				print_spans = "<span style='margin: 0 5px; cursor: pointer; " + currentSpan + "'>" + i + "</span>"; 
				del_spans.append(print_spans);
			}				
			console.log('Response here ...',response);
		});
	}
});
