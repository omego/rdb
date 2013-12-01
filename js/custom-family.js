/* JS File */

// Start Ready
$(document).ready(function() {  

	// Icon Click Focus
	$('div.icon').click(function(){
		$('input#search-family').focus();
	});

	// Live Search
	// On Search Submit and Get Results
	function search() {
		var query_value = $('input#search-family').val();
		$('b#search-string-family').html(query_value);
		if(query_value !== ''){
			$.ajax({
				type: "POST",
				url: "search-family.php",
				data: { query: query_value },
				cache: false,
				success: function(html){
					$("ul#results-family").html(html);
				}
			});
		}return false;    
	}

	$("input#search-family").live("keyup", function(e) {
		// Set Timeout
		clearTimeout($.data(this, 'timer'));

		// Set Search String
		var search_string = $(this).val();

		// Do Search
		if (search_string == '') {
			$("ul#results-family").fadeOut();
			$('h4#results-text-family').fadeOut();
		}else{
			$("ul#results-family").fadeIn();
			$('h4#results-text-family').fadeIn();
			$(this).data('timer', setTimeout(search, 100));
		};
	});

});