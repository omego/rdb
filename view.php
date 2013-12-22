<?php 

include 'header2.php';
include 'connect.php';

?>




<?php

include 'connect.php';



$member_id = $_GET['id'];

$results = mysql_query("select * from entry where id = $member_id");

$row = mysql_fetch_array($results); 



?>
 
 
 
   <!-- formee-->
 
   <div class="container">
   <div class="box-add">

   <form class="formee" action="insert_record.php" enctype="multipart/form-data" method="post">
 		
 		<div class="alert">
 		  
 		  <span class="fui-info"></span>  Applicant status is <b><?php echo $row['Status'] ?></b>.</div>
 		
 		 <div class="box-sec">


<?php


$upload_name = $row['upload_name'];

$results2 = mysql_query("select * from files where upload_name = $upload_name");

$row2 = mysql_fetch_array($results2); 



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
 						 <input type="text" name="Cnum" value="<?php echo $row['Cnum'] ?>" />
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
 
 				  <div class="grid-6-12">
 						  <label>Date of Birth <em class="formee-req">*</em></label>
 						 <input type="text" name="DOB" id="datepicker" value="<?php echo $row['DOB'] ?>" />
 				  </div>
 
 				  <div class="grid-6-12">
 						  <label>Mobile NO. <em class="formee-req">*</em></label>
 						 <input type="text" name="Mobile" value="<?php echo $row['Mobile'] ?>" />
 				  </div>
 		  </div>
 
 
 
 		  <div class="box-sec">
 
 		  <div class="grid-4-12">
 				  <label>Date of EPT <em class="formee-req">*</em></label>
 				 <input type="text" name="EPT_Date" id="datepicker-2" value="<?php echo $row['EPT_Date'] ?>" />
 		  </div>
 
 		  <div class="grid-2-12">
 				  <label>EPT Score <em class="formee-req">*</em></label>
 				 <input type="text" name="EPT" value="<?php echo $row['EPT'] ?>" />
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
