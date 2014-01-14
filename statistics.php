<?php 

include 'header.php';
include 'connect.php';
$php_var = 10;
$php_sd = 50;

$Genderm = mysql_query("select Gender from entry where Gender = 'Male'");
$Genderm_num_rows = mysql_num_rows($Genderm);
echo "$Genderm_num_rows";
$Genderf = mysql_query("select Gender from entry where Gender = 'Female'");
$Genderf_num_rows = mysql_num_rows($Genderf);
echo "$Genderf_num_rows";

?>

<script src="/rdb/chart/Chart.js"></script>

   <!-- formee-->

   <div class="container">
   <div class="box-add">
	   <div class="box-sec">
		
		
		<canvas id="canvas-gender" height="400" width="400"></canvas>
		<table class="right table" style="width:300px;"><thead class="table-head"><tr><th>Gender</th><th>Count</th></tr></thead>
		<tbody class='table-body'>
			<tr>
				<td>
					<span style="color:#615F5C;">█</span>  Male
				</td>
				<td>
					 <? echo "$Genderm_num_rows"; ?>
				</td>
		    	</tr>
		    	<tr>
			    	<td>
			    		<span style="color:#C8C0B6;">█</span>  Female
			    	</td>
		    			<td>
		    				 <? echo "$Genderf_num_rows"; ?>
		    			</td>
		  </tr>
		</tbody>
	</table>
		
			
    	   </div>
    	   
    	   <div class="box-sec">
    	   
    	   
    	     <canvas id="canvas" height="450" width="450"></canvas>
    	   
    	   
    	   </div>
    	   		   
    </div>
    </div>
<!-- formee-->

 	<!-- Load JS here for greater good =============================-->
 	<script>
 	
 		var pieData = [
 				{
 					value: <? echo $Genderm_num_rows; ?>,
 					color:"#807E7B"
 				},
 				{
 					value : <? echo $Genderf_num_rows; ?>,
 					color : "#D3CCC3"
 				}
 	
 			];
 	
 	var myPie = new Chart(document.getElementById("canvas-gender").getContext("2d")).Pie(pieData);
 	var myExp = new Chart(document.getElementById("canvas-exp").getContext("2d")).Pie(pieData);
 	
 	</script>
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
