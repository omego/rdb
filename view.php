<?php 

include 'header2.php';
include 'connect.php';

?>




<?php


$member_id = $_GET['id'];

$results = mysql_query("select * from entry where id = $member_id");

$row = mysql_fetch_array($results); 



?>
 
 
 
   <!-- formee-->
 
   <div class="container">
   <div class="box-add">

   <form class="formee" action="edit_record.php" enctype="multipart/form-data" method="post">
 	<input hidden="hidden" type="text" name="Lastupdate" value="<? echo $_SESSION['username'] ?>" />	
 		<div class="alert">
 		  
 		  <span class="fui-info"></span>  Applicant status is <b><?php echo $row['Status'] ?></b> - Created by <b><?php echo $row['Creator'] ?></b>
 		
 		<?
 		
 		if (empty($row['Lastupdate'])) {
	 	echo ' - Never Updated';
 	}else{
	 	echo ' - Updated by <b>' . $row['Lastupdate'] . '</b>';
 	}
 		
 		?>
 		  
 		</div>
 		

 		
 		 <div class="box-sec">


<?php


$upload_name = $row['upload_name'];

$results2 = mysql_query("select * from files where upload_name = $upload_name");

$row2 = mysql_fetch_array($results2); 

$DOB_Day = $row['DOB_Day'];
$DOB_Month = $row['DOB_Month'];
$DOB_Year = $row['DOB_Year'];

$EPT_Date_Day = $row['EPT_Date_Day'];
$EPT_Date_Month = $row['EPT_Date_Month'];
$EPT_Date_Year = $row['EPT_Date_Year'];


?>

 		<?php
 		  //date in mm/dd/yyyy format; or it can be in other formats as well
 		  $birthDate = $DOB_Month . '/' . $DOB_Day . '/' . $DOB_Year;
 		  //explode the date to get month, day and year
 		  $birthDate = explode("/", $birthDate);
 		  //get age from date or birthdate
 		  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
 			? ((date("Y") - $birthDate[2]) - 1)
 			: (date("Y") - $birthDate[2]));
 		?>


			<div class="alert-download">
 
				  Uploaded File Size: <?php echo $row2['size'] ?> KB  -  <b><a href="<?php echo $row2['url'] ?>">Download / View</a></b></div>
 

 
 			</div>
 
 		<div class="box-sec">
 
 				  <div class="grid-4-12">
 						  <label>First Name <em class="formee-req">*</em></label>
 						 <input type="text" name="First_Name" value="<?php echo $row['First_Name'] ?>" />
 				  </div>
 				  <div class="grid-4-12">
 						  <label>Father Name <em class="formee-req">*</em></label>
 						 <input type="text" name="Father_Name" value="<?php echo $row['Father_Name'] ?>" />
 				  </div>
 				  <div class="grid-4-12">
 						  <label>Sure Name <em class="formee-req">*</em></label>
 						 <input type="text" name="Sure_Name" value="<?php echo $row['Sure_Name'] ?>" />
 				  </div>
 
 
 				  <div class="grid-4-12">
 						  <label>Saudi ID/Iqama <em class="formee-req">*</em></label>
 						 <input type="text" name="Saudi_ID" value="<?php echo $row['Saudi_ID'] ?>" />
 				  </div>
 				  <div class="grid-4-12">
 						  <label>C Number <em class="formee-req">*</em></label>
 						 <input type="text" name="Cnum" id="cnum" value="<?php echo $row['Cnum'] ?>" />
 				  </div>
 
 				  <div class="grid-4-12">
 						  <label>Gender <em class="formee-req">*</em></label>
 						  <ul class="formee-list">
	 						
	 						<?php 
	 							if ( $row['Gender'] == 'Male' ) {
	 						  	  echo '<li><input name="Gender" type="radio" value="Male" checked="checked" /> <label>Male</label></li>';
	 						  	  echo '<li><input name="Gender" type="radio" value="Female"  /> <label>Female</label></li>'; 
	 						  	} elseif ( $row['Gender'] == 'Female' ) {
	 						  	  echo '<li><input name="Gender" type="radio" value="Male" /> <label>Male</label></li>';
	 						  	  echo '<li><input name="Gender" type="radio" value="Female" checked="checked" /> <label>Female</label><li>';
	 						  	} ?>  
	 						  
 						  </ul>
 				  </div>
 	<div class="clear"></div>
				 <div class="grid-2-12">
				 		  <label>DOB Day <em class="formee-req">*</em></label>
				 		 <select name="DOB_Day">
							<option value="01" <?PHP if($DOB_Day==01) echo "selected";?>>1</option>
							<option value="02" <?PHP if($DOB_Day==02) echo "selected";?>>2</option>
							<option value="03" <?PHP if($DOB_Day==03) echo "selected";?>>3</option>
							<option value="04" <?PHP if($DOB_Day==04) echo "selected";?>>4</option>
							<option value="05" <?PHP if($DOB_Day==05) echo "selected";?>>5</option>
							<option value="06" <?PHP if($DOB_Day==06) echo "selected";?>>6</option>
							<option value="07" <?PHP if($DOB_Day==07) echo "selected";?>>7</option>
							<option value="08" <?PHP if($DOB_Day==08) echo "selected";?>>8</option>
							<option value="09" <?PHP if($DOB_Day==09) echo "selected";?>>9</option>
							<option value="10" <?PHP if($DOB_Day==10) echo "selected";?>>10</option>
							<option value="11" <?PHP if($DOB_Day==11) echo "selected";?>>11</option>
							<option value="12" <?PHP if($DOB_Day==12) echo "selected";?>>12</option>
							<option value="13" <?PHP if($DOB_Day==13) echo "selected";?>>13</option>
							<option value="14" <?PHP if($DOB_Day==14) echo "selected";?>>14</option>
							<option value="15" <?PHP if($DOB_Day==15) echo "selected";?>>15</option>
							<option value="16" <?PHP if($DOB_Day==16) echo "selected";?>>16</option>
							<option value="17" <?PHP if($DOB_Day==17) echo "selected";?>>17</option>
							<option value="18" <?PHP if($DOB_Day==18) echo "selected";?>>18</option>
							<option value="19" <?PHP if($DOB_Day==19) echo "selected";?>>19</option>
							<option value="20" <?PHP if($DOB_Day==20) echo "selected";?>>20</option>
							<option value="21" <?PHP if($DOB_Day==21) echo "selected";?>>21</option>
							<option value="22" <?PHP if($DOB_Day==22) echo "selected";?>>22</option>
							<option value="23" <?PHP if($DOB_Day==23) echo "selected";?>>23</option>
							<option value="24" <?PHP if($DOB_Day==24) echo "selected";?>>24</option>
							<option value="25" <?PHP if($DOB_Day==25) echo "selected";?>>25</option>
							<option value="26" <?PHP if($DOB_Day==26) echo "selected";?>>26</option>
							<option value="27" <?PHP if($DOB_Day==27) echo "selected";?>>27</option>
							<option value="28" <?PHP if($DOB_Day==28) echo "selected";?>>28</option>
							<option value="29" <?PHP if($DOB_Day==29) echo "selected";?>>29</option>
							<option value="30" <?PHP if($DOB_Day==30) echo "selected";?>>30</option>
							<option value="31" <?PHP if($DOB_Day==31) echo "selected";?>>31</option>
				 		 </select>
				   </div>
 
 				  <div class="grid-3-12">
 						  <label>DOB Month <em class="formee-req">*</em></label>
 						 <select name="DOB_Month">
 						 <option value="01" <?PHP if($DOB_Month==01) echo "selected";?>>January</option>
 						 <option value="02" <?PHP if($DOB_Month==02) echo "selected";?>>February</option>
 						 <option value="03" <?PHP if($DOB_Month==03) echo "selected";?>>March</option>
 						 <option value="04" <?PHP if($DOB_Month==04) echo "selected";?>>April</option>
 						 <option value="05" <?PHP if($DOB_Month==05) echo "selected";?>>May</option>
 						 <option value="06" <?PHP if($DOB_Month==06) echo "selected";?>>June</option>
 						 <option value="07" <?PHP if($DOB_Month==07) echo "selected";?>>July</option>
 						 <option value="08" <?PHP if($DOB_Month==08) echo "selected";?>>August</option>
 						 <option value="09" <?PHP if($DOB_Month==09) echo "selected";?>>September</option>
 						 <option value="10" <?PHP if($DOB_Month==10) echo "selected";?>>October</option>
 						 <option value="11" <?PHP if($DOB_Month==11) echo "selected";?>>November</option>
 						 <option value="12" <?PHP if($DOB_Month==12) echo "selected";?>>December</option>
 						 </select>
 				  </div>
					 <div class="grid-2-12">
					 		  <label>DOB Year <em class="formee-req">*</em></label>


							<select name="DOB_Year">
							<?
							
							 $starting_year  =date('Y', strtotime('-50 year'));
							
							 $current_year = date('Y');
							 for($starting_year; $starting_year <= $current_year; $starting_year++) {
								 echo '<option value="'.$starting_year.'"';
								 if( $starting_year ==  $DOB_Year ) {
										echo ' selected="selected"';
								 }
								 echo ' >'.$starting_year.'</option>';
							 }     
							 
							 ?>          
							<select>


					   </div>
 
 
				 <div class="grid-2-12">
				 		  <label>Age </label>
				 		 <input disabled="disabled" type="text" name="Mobile" value="<?php echo $age; ?>" />
				   </div>
 
 				  <div class="grid-3-12">
 						  <label>Mobile NO. <em class="formee-req">*</em></label>
 						 <input type="text" name="Mobile" value="<?php echo $row['Mobile'] ?>" />
 				  </div>
 				  

 				    
 		  </div>
 
 
 
 		  <div class="box-sec">
 
 		  <div class="clear"></div>
 		  				 <div class="grid-2-12">
 		  				 		  <label>DOB Day <em class="formee-req">*</em></label>
 		  				 		 <select name="EPT_Date_Day">
 		  							<option value="01" <?PHP if($EPT_Date_Day==01) echo "selected";?>>1</option>
 		  							<option value="02" <?PHP if($EPT_Date_Day==02) echo "selected";?>>2</option>
 		  							<option value="03" <?PHP if($EPT_Date_Day==03) echo "selected";?>>3</option>
 		  							<option value="04" <?PHP if($EPT_Date_Day==04) echo "selected";?>>4</option>
 		  							<option value="05" <?PHP if($EPT_Date_Day==05) echo "selected";?>>5</option>
 		  							<option value="06" <?PHP if($EPT_Date_Day==06) echo "selected";?>>6</option>
 		  							<option value="07" <?PHP if($EPT_Date_Day==07) echo "selected";?>>7</option>
 		  							<option value="08" <?PHP if($EPT_Date_Day==08) echo "selected";?>>8</option>
 		  							<option value="09" <?PHP if($EPT_Date_Day==09) echo "selected";?>>9</option>
 		  							<option value="10" <?PHP if($EPT_Date_Day==10) echo "selected";?>>10</option>
 		  							<option value="11" <?PHP if($EPT_Date_Day==11) echo "selected";?>>11</option>
 		  							<option value="12" <?PHP if($EPT_Date_Day==12) echo "selected";?>>12</option>
 		  							<option value="13" <?PHP if($EPT_Date_Day==13) echo "selected";?>>13</option>
 		  							<option value="14" <?PHP if($EPT_Date_Day==14) echo "selected";?>>14</option>
 		  							<option value="15" <?PHP if($EPT_Date_Day==15) echo "selected";?>>15</option>
 		  							<option value="16" <?PHP if($EPT_Date_Day==16) echo "selected";?>>16</option>
 		  							<option value="17" <?PHP if($EPT_Date_Day==17) echo "selected";?>>17</option>
 		  							<option value="18" <?PHP if($EPT_Date_Day==18) echo "selected";?>>18</option>
 		  							<option value="19" <?PHP if($EPT_Date_Day==19) echo "selected";?>>19</option>
 		  							<option value="20" <?PHP if($EPT_Date_Day==20) echo "selected";?>>20</option>
 		  							<option value="21" <?PHP if($EPT_Date_Day==21) echo "selected";?>>21</option>
 		  							<option value="22" <?PHP if($EPT_Date_Day==22) echo "selected";?>>22</option>
 		  							<option value="23" <?PHP if($EPT_Date_Day==23) echo "selected";?>>23</option>
 		  							<option value="24" <?PHP if($EPT_Date_Day==24) echo "selected";?>>24</option>
 		  							<option value="25" <?PHP if($EPT_Date_Day==25) echo "selected";?>>25</option>
 		  							<option value="26" <?PHP if($EPT_Date_Day==26) echo "selected";?>>26</option>
 		  							<option value="27" <?PHP if($EPT_Date_Day==27) echo "selected";?>>27</option>
 		  							<option value="28" <?PHP if($EPT_Date_Day==28) echo "selected";?>>28</option>
 		  							<option value="29" <?PHP if($EPT_Date_Day==29) echo "selected";?>>29</option>
 		  							<option value="30" <?PHP if($EPT_Date_Day==30) echo "selected";?>>30</option>
 		  							<option value="31" <?PHP if($EPT_Date_Day==31) echo "selected";?>>31</option>
 		  				 		 </select>
 		  				   </div>
 		  
 		   				  <div class="grid-3-12">
 		   						  <label>DOB Month <em class="formee-req">*</em></label>
 		   						 <select name="EPT_Date_Month">
 		   						 <option value="01" <?PHP if($EPT_Date_Month==01) echo "selected";?>>January</option>
 		   						 <option value="02" <?PHP if($EPT_Date_Month==02) echo "selected";?>>February</option>
 		   						 <option value="03" <?PHP if($EPT_Date_Month==03) echo "selected";?>>March</option>
 		   						 <option value="04" <?PHP if($EPT_Date_Month==04) echo "selected";?>>April</option>
 		   						 <option value="05" <?PHP if($EPT_Date_Month==05) echo "selected";?>>May</option>
 		   						 <option value="06" <?PHP if($EPT_Date_Month==06) echo "selected";?>>June</option>
 		   						 <option value="07" <?PHP if($EPT_Date_Month==07) echo "selected";?>>July</option>
 		   						 <option value="08" <?PHP if($EPT_Date_Month==08) echo "selected";?>>August</option>
 		   						 <option value="09" <?PHP if($EPT_Date_Month==09) echo "selected";?>>September</option>
 		   						 <option value="10" <?PHP if($EPT_Date_Month==10) echo "selected";?>>October</option>
 		   						 <option value="11" <?PHP if($EPT_Date_Month==11) echo "selected";?>>November</option>
 		   						 <option value="12" <?PHP if($EPT_Date_Month==12) echo "selected";?>>December</option>
 		   						 </select>
 		   				  </div>
 		  					 <div class="grid-2-12">
 		  					 		  <label>DOB Year <em class="formee-req">*</em></label>
 		  
 		  
 		  							<select name="EPT_Date_Year">
 		  							<?
 		  
 		  							 $starting_year  =date('Y', strtotime('-50 year'));
 		  
 		  							 $current_year = date('Y');
 		  							 for($starting_year; $starting_year <= $current_year; $starting_year++) {
 		  								 echo '<option value="'.$starting_year.'"';
 		  								 if( $starting_year ==  $EPT_Date_Year ) {
 		  										echo ' selected="selected"';
 		  								 }
 		  								 echo ' >'.$starting_year.'</option>';
 		  							 }     
 		  
 		  							 ?>          
 		  							<select>
 		  
 		  
 		  					   </div>

 
 		  <div class="grid-2-12">
 				  <label>EPT Score <em class="formee-req">*</em></label>
 				 <input type="text" name="EPT" id="ept" value="<?php echo $row['EPT'] ?>" />
 		  </div>
 
 		  <div class="grid-12-12">
 
 		  </div> 
 
 		  <div class="grid-6-12">
 				  <label>Specialty <em class="formee-req">*</em></label>
 				 <input type="text" name="Specialty" value="<?php echo $row['Specialty'] ?>" />
 		  </div>
 
 		  <div class="grid-6-12">
 				  <label>Experience <em class="formee-req">*</em></label>
 				 <input type="text" name="Experience" value="<?php echo $row['Experience'] ?>" />
 		  </div>
 
 
 		  <div class="grid-4-12">
 				  <label>Qualifications</label>
 				  <select name="Qualifications">
	 				  
	 				  <?php
	 				  if ( $row['Qualifications'] == 'High School' ) {
	 				    echo '<option selected="selected" value="High School">High School</option>';
	 				    echo '<option value="Diploma">Diploma</option>';
	 				    echo '<option value="Bachelor">Bachelor</option>'; 
	 				    echo '<option value="Master">Master</option>';
	 				    echo '<option value="PhD">PhD</option>';
	 				  } elseif ( $row['Qualifications'] == 'Diploma' ) {
	 					echo '<option value="High School">High School</option>';
	 				    echo '<option selected="selected" value="Diploma">Diploma</option>';
	 				    echo '<option value="Bachelor">Bachelor</option>'; 
	 				    echo '<option value="Master">Master</option>';
	 				    echo '<option value="PhD">PhD</option>';
	 				  } elseif ( $row['Qualifications'] == 'Bachelor' ) {
						echo '<option value="High School">High School</option>';
						echo '<option value="Diploma">Diploma</option>';
						echo '<option selected="selected" value="Bachelor">Bachelor</option>'; 
						echo '<option value="Master">Master</option>';
						echo '<option value="PhD">PhD</option>'; 
					  } elseif ( $row['Qualifications'] == 'Master' ) {
						echo '<option value="High School">High School</option>';
						echo '<option value="Diploma">Diploma</option>';
						echo '<option value="Bachelor">Bachelor</option>'; 
						echo '<option selected="selected" value="Master">Master</option>';
						echo '<option value="PhD">PhD</option>';
	 				  } elseif ( $row['Qualifications'] == 'PhD' ) {
						echo '<option value="High School">High School</option>';
						echo '<option value="Diploma">Diploma</option>';
						echo '<option value="Bachelor">Bachelor</option>'; 
						echo '<option value="Master">Master</option>';
						echo '<option selected="selected" value="PhD">PhD</option>';
					  }
	 				  ?>
	 				  
	 				  
	 				 
 				  </select>
 		  </div>
 
 		  <div class="grid-4-12">
 				  <label>GPA <em class="formee-req">*</em></label>
 				 <input type="text" name="GPA" value="<?php echo $row['GPA'] ?>" />
 		  </div>
 
 
 		  <div class="grid-6-12">
 				  <label>Category</label>
 				  <select name="Category">		  
	 				  				  <?php
	 				   				  if ( $row['Category'] == 'Administrative' ) {
	 				   					echo '<option selected="selected" value="Administrative">Administrative</option>';
	 				   					echo '<option value="Technical">Technical</option>';
	 				   					echo '<option value="IT">IT</option>'; 
	 				   					echo '<option value="Academic">Academic</option>';
	 				   				  } elseif ( $row['Category'] == 'Technical' ) {
	 				   					echo '<option value="Administrative">Administrative</option>';
	 				   					echo '<option selected="selected" value="Technical">Technical</option>';
	 				   					echo '<option value="IT">IT</option>'; 
	 				   					echo '<option value="Academic">Academic</option>';
	 				   				  } elseif ( $row['Category'] == 'IT' ) {
	 				   					echo '<option value="Administrative">Administrative</option>';
	 				   					echo '<option value="Technical">Technical</option>';
	 				   					echo '<option selected="selected" value="IT">IT</option>'; 
	 				   					echo '<option value="Academic">Academic</option>';
	 				  				  } elseif ( $row['Category'] == 'Academic' ) {
	 				   					echo '<option value="Administrative">Administrative</option>';
	 				   					echo '<option value="Technical">Technical</option>';
	 				   					echo '<option value="IT">IT</option>'; 
	 				   					echo '<option selected="selected" value="Academic">Academic</option>';
	 				   				  }
	 				   				  ?>
 				  </select>
 		  </div>
 
 		  <div class="grid-6-12">
 				  <label>Status</label>
 				  <select name="Status">
	 				  
	 				 			      <?php
	 				   				  if ( $row['Status'] == 'Under Process' ) {
	 				   					echo '<option selected="selected" value="Under Process">Under Process</option>';
	 				   					echo '<option value="Approved">Approved</option>';
	 				   					echo '<option value="Disapproved">Disapproved</option>'; 
	 				   				  } elseif ( $row['Status'] == 'Approved' ) {
	 				   					echo '<option value="Under Process">Under Process</option>';
	 				   					echo '<option selected="selected" value="Approved">Approved</option>';
	 				   					echo '<option value="Disapproved">Disapproved</option>'; 
	 				   				  } elseif ( $row['Status'] == 'Disapproved' ) {
	 				   					echo '<option value="Under Process">Under Process</option>';
	 				   					echo '<option value="Approved">Approved</option>';
	 				   					echo '<option selected="selected" value="Disapproved">Disapproved</option>'; 
	 				  				  }
	 				   				  ?>
	 				  
 				  </select>
 		  </div>
 
 		  </div>
 
 		  <div class="box-sec">
 
 
 		  <div class="grid-12-12">
 				  <label>Comments <em class="formee-req">*</em></label>
 				 <textarea name="Comments" id="" placeholder="Add Comments ..." cols="30" rows="10"><?php echo $row['Comments'] ?></textarea>
 		  </div>
 
 		</div>
 
 
  <input  name="id_id" hidden="hidden" type="text" value="<?php echo $row['id'] ?>">
 
 		 <div class="grid-12-12">
 		  <input type="submit" value="Update" title="Send" class="right">
 		 </div>
 
   </form>
   <!-- formee-->
   </div>
 </div>
 
 
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
