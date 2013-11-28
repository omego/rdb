/* JS File */

// Start Ready
$(document).ready(function() {  

	// Icon Click Focus
	$('div.icon').click(function(){
		$('input#search-id').focus();
	});

	// Live Search
	// On Search Submit and Get Results
	function search() {
		var query_value = $('input#search-id').val();
		$('b#search-string-id').html(query_value);
		if(query_value !== ''){
			$.ajax({
				type: "POST",
				url: "search-id.php",
				data: { query: query_value },
				cache: false,
				success: function(html){
					$("ul#results-id").html(html);
				}
			});
		}return false;    
	}

	$("input#search-id").live("keyup", function(e) {
		// Set Timeout
		clearTimeout($.data(this, 'timer'));

		// Set Search String
		var search_string = $(this).val();

		// Do Search
		if (search_string == '') {
			$("ul#results-id").fadeOut();
			$('h4#results-text-id').fadeOut();
		}else{
			$("ul#results-id").fadeIn();
			$('h4#results-text-id').fadeIn();
			$(this).data('timer', setTimeout(search, 100));
		};
	});

});