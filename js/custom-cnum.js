/* JS File */

// Start Ready
$(document).ready(function() {  

	// Icon Click Focus
	$('div.icon').click(function(){
		$('input#search-cnum').focus();
	});

	// Live Search
	// On Search Submit and Get Results
	function search() {
		var query_value = $('input#search-cnum').val();
		$('b#search-string-cnum').html(query_value);
		if(query_value !== ''){
			$.ajax({
				type: "POST",
				url: "search-cnum.php",
				data: { query: query_value },
				cache: false,
				success: function(html){
					$("ul#results-cnum").html(html);
				}
			});
		}return false;    
	}

	$("input#search-cnum").live("keyup", function(e) {
		// Set Timeout
		clearTimeout($.data(this, 'timer'));

		// Set Search String
		var search_string = $(this).val();

		// Do Search
		if (search_string == '') {
			$("ul#results-cnum").fadeOut();
			$('h4#results-text-cnum').fadeOut();
		}else{
			$("ul#results-cnum").fadeIn();
			$('h4#results-text-cnum').fadeIn();
			$(this).data('timer', setTimeout(search, 100));
		};
	});

});