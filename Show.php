<?php 


 
include 'connect.php';


$result = mysql_query("SELECT * FROM entry ");


echo '<table class="table table-striped"><thead><tr><th>ID</th><th>C#</th><th>First Name</th><th>Sure Name</th><th>Gender</th><th>Qualifications</th><th>Status</th></tr></thead>';

while($row = mysql_fetch_array($result)){


echo "<tr><td>" . $row['id'] . "</td><td>" . $row['Cnum'] . "</td><td>" . $row['First_Name'] . "</td><td>" . $row['Sure_Name'] . "</td><td>" . $row['Gender'] . "</td><td>" . $row['Qualifications'] . "</td><td>" . $row['Status'] . "</td><</tr>";

}

echo "</table>";



?>
