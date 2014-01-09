<?php 

include 'header.php';

include 'connect.php';


$EPT_Date_Day = $_POST['EPT_Date_Day'];
$EPT_Date_Month = $_POST['EPT_Date_Month'];
$EPT_Date_Year = $_POST['EPT_Date_Year'];




?>



   <!-- formee-->

   <div class="container">
   <div class="box-add">
		
		<form class="formee" action="edit_record.php" enctype="multipart/form-data" method="post">
		
		<div class="box-sec">
			
			<?
			
			
			$results = mysql_query("select * from entry where EPT_Date_Day = '". $EPT_Date_Day ."' and EPT_Date_Month = '". $EPT_Date_Month ."' and EPT_Date_Year = '". $EPT_Date_Year ."'");
			

			
			
			echo '<table class="table"><thead class="table-head"><tr><th>First Name</th><th>C#</th><th>Gender</th><th>Category</th><th>Status</th><th>View</th></tr></thead>';
			
			while($row = mysql_fetch_array($results)){
			
			
			echo "<tbody class='table-body'><tr><td>" . $row['First_Name'] . "</td><td>" . $row['Cnum'] . "</td><td>" . $row['Gender'] . "</td><td>" . $row['Category'] . "</td><td>" . $row['Status'] . "</td><td><a href='view.php?id=" . $row['id'] . "'>view</a></td></tr></tbody>";
			
			}
			
			echo "</table>";

			
			
			?>
			
			
      		
      		</div>
      		
      	</form>
   </div>
 </div>
<!-- formee-->

 	<!-- Load JS here for greater good =============================-->
 	<script src="js/jquery-1.8.3.min.js"></script>
 	<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
 	<script src="js/jquery.ui.touch-punch.min.js"></script>
 	<script src="js/bootstrap.min.js"></script>
 	<script src="js/bootstrap-select.js"></script>
 	<script src="js/bootstrap-switch.js"></script>
 	<script src="js/flatui-checkbox.js"></script>
 	<script src="js/flatui-radio.js"></script>
 	<script src="js/jquery.tagsinput.js"></script>
 	<script src="js/jquery.placeholder.js"></script>
 	<script src="js/jquery.stacktable.js"></script>
 	<script src="js/application.js"></script>
   </body>
 </html>
