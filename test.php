<?



include 'header2.php';
include 'connect.php';

$Create_Month = $_POST['Create_Month'];

$Create_Year = $_POST['Create_Year'];

$results2 = mysql_query("select * from entry where Create_Month = '". $Create_Month ."' and Create_Year = '". $Create_Year ."'");

$row2 = mysql_fetch_array($results2); 

echo $row2['Cnum'] ;

?>


<form action="test.php" method="post">
	
	<input name="Create_Month" type="text">
	
	<input name="Create_Year" type="text">
	
	<p><input type="submit" value="Next"></p>
</form>
