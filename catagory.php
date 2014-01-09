<?php 


include 'connect.php';










?>



   <!-- formee-->


   <div class="box-index">
		<div class="box-sec">
		<form class="formee" action="ept_search.php" enctype="multipart/form-data" method="post">
		
	
			
			<table class="table">
			  <thead class="table-head">
				<tr>
				  <th>Catagory</th>
				  <th>Count</th>
				</tr>
			  </thead>
			  <tbody class="table-body">
				<tr>
				  <td><a href="administrative.php">Administrative</a></td>

				  <td>
				<? 
				$administrative = mysql_query("select * from entry where Category = 'administrative'");
				$administrative_num_rows = mysql_num_rows($administrative);
				
				echo "$administrative_num_rows";
				 ?>	  
				 </td>
				</tr>
				<tr>
				  <td><a href="technical.php">Technical</a></td>

				  <td>
				  <? 
				  $technical = mysql_query("select * from entry where Category = 'Technical'");
				  $technical_num_rows = mysql_num_rows($technical);
				  
				  echo "$technical_num_rows";
				   ?>	  
				  </td>
				</tr>
				<tr>
				  <td><a href="it.php">IT</a></td>

				  <td>				  <? 
				  $it = mysql_query("select * from entry where Category = 'IT'");
				  $it_num_rows = mysql_num_rows($it);
				  
				  echo "$it_num_rows";
				   ?>	  </td>
				</tr>
				<tr>
				  <td><a href="academic.php">Academic</a></td>

				  <td><? 
				$Academic = mysql_query("select * from entry where Category = 'Academic'");
				$Academic_num_rows = mysql_num_rows($Academic);
				
				echo "$Academic_num_rows";
				 ?></td>
				</tr>
			  </tbody>
			</table>
			
			<div class="grid-2-12">
			<label>EPT Day</label>
			<select name="EPT_Date_Day">
			 <option value="01">01</option>
			 <option value="02">02</option>
			 <option value="03">03</option>
			 <option value="04">04</option>
			 <option value="05">05</option>
			 <option value="06">06</option>
			 <option value="07">07</option>
			 <option value="08">08</option>
			 <option value="09">09</option>
			 <option value="10">10</option>
			 <option value="11">11</option>
			 <option value="12">12</option>
			 <option value="13">13</option>
			 <option value="14">14</option>
			 <option value="15">15</option>
			 <option value="16">16</option>
			 <option value="17">17</option>
			 <option value="18">18</option>
			 <option value="19">19</option>
			 <option value="20">20</option>
			 <option value="21">21</option>
			 <option value="22">22</option>
			 <option value="23">23</option>
			 <option value="24">24</option>
			 <option value="25">25</option>
			 <option value="26">26</option>
			 <option value="27">27</option>
			 <option value="28">28</option>
			 <option value="29">29</option>
			 <option value="30">30</option>
			 <option value="31">31</option>
			</select>
			</div>
			
			<div class="grid-3-12">
			<label>EPT Month</label>
			<select name="EPT_Date_Month">
			   <option value="01">January</option>
			   <option value="02">February</option>
			   <option value="03">March</option>
			   <option value="04">April</option>
			   <option value="05">May</option>
			   <option value="06">June</option>
			   <option value="07">July</option>
			   <option value="08">August</option>
			   <option value="09">September</option>
			   <option value="10">October</option>
			   <option value="11">November</option>
			   <option value="12">December</option>
			</select>
			</div>
			
			<div class="grid-2-12">
			<label>EPT Year</label>
			<select name="EPT_Date_Year">
			   <?
			   $starting_year  =date('Y', strtotime('-5 year'));    
			   $current_year = date('Y');
			   for($starting_year; $starting_year <= $current_year; $starting_year++) {
				 echo '<option value="'.$starting_year.'"';
								 echo ' >'.$starting_year.'</option>';
			   }     ?>   
			</select>
			</div>
			<div class="grid-12-12">
			 <input type="submit" value="Send" title="Send" class="right">
			</div>

      		
      		
      		
      	</form>
    </br>
      	<form action="exp_search.php" method="post">
			<div class="grid-4-12">
					<label>Experince <em class="formee-req">*</em></label>
					<input type="text" name="EXP_from" value="" />
			</div>
			<p><input type="submit" value="send"></p>
		</form>
		</div>

 </div>
<!-- formee-->
