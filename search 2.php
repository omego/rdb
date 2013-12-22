<?php
include 'header.php'; 
include 'connect.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>Search results</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
	<div class="container">
		
	
<?php
	$query = $_GET['query'];
	// gets value sent over search form

	$min_length = 3;
	// you can set minimum length of the query if you want

	if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then

		$query = htmlspecialchars($query);
		// changes characters used in html to their equivalents, for example: < to &gt;

		$query = mysql_real_escape_string($query);
		// makes sure nobody uses SQL injection

		$raw_results = mysql_query("SELECT * FROM entry
			WHERE (`First_Name` LIKE '%".$query."%') OR (`Cnum` LIKE '%".$query."%')") or die(mysql_error());

		// * means that it selects all fields, you can also write: `id`, `title`, `text`
		// articles is the name of our table

		// '%$query%' is what we're looking for, % means anything, for example if $query is Hello
		// it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
		// or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
echo '<div class="search_box">';
		if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
echo '<table class="table table-striped"><thead><tr><th>First_Name</th><th>C#</th></tr></thead>';

			while($results = mysql_fetch_array($raw_results)){
			// $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
				
				echo "<tr><td>".$results['First_Name']."</td><td>".$results['Cnum']."</td></tr>";
				// posts results gotten from database(title and text) you can also show id ($results['id'])
			}

		}
		else{ // if there is no matching rows do following
			echo "No results";
		}

	}
	else{ // if query length is less than minimum
		echo "Minimum length is ".$min_length;
		
	}
	echo '</div>';
?></div>
</body>
</html>