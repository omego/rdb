<?php 

include 'header.php';
include 'connect.php';

$BackupFile = mysql_query("select * from Backup ORDER BY id DESC limit 1");

?>

   <div class="container">
      <div class="box-add">
   
   		<form class="formee" action="edit_record.php" enctype="multipart/form-data" method="post">
   
   		<div class="box-sec">
   
   			<?
   
   
   
   
   
   
   			echo '<table class="table"><thead class="table-head"><tr><th>Backup Date</th><th>Dwonload</th></tr></thead>';
   
   			while($row = mysql_fetch_array($BackupFile)){
   
   
   			echo "<tbody class='table-body'><tr><td>" . $row['Backup_date'] . "</td><td><a href='" . $row['Backup_url'] . "'>Download</a></td></tr></tbody>";
   
   			}
   
   			echo "</table>";
   
   
   
   			?>
   
   
   
   	  		</div>
   
   	  	</form>
      </div>
    </div><!-- formee-->

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
