<?php
$q = intval($_GET['q']);

$con = mysqli_connect('localhost','root','root','rdb');
if (!$con)
  {
  die('Could not connect: ' . mysqli_error($con));
  }

mysqli_select_db($con,"rdb");
$sql="SELECT * FROM entry WHERE Category = '".$q."'";

$result = mysqli_query($con,$sql);

echo "<table border='1'>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Age</th>
<th>Hometown</th>
<th>Job</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['First_Name'] . "</td>";
  echo "<td>" . $row['Category'] . "</td>";
  echo "<td>" . $row['Cnum'] . "</td>";
  echo "<td>" . $row['Status'] . "</td>";
  echo "<td>" . $row['Job'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?> 