<?php

include 'header2.php'; 
include 'connect.php';


///////////////////////////////////////////////////////////////////////////////////////////// Upload

$update_id = $_POST['id_id'];



$First_Name = $_POST['First_Name'];
$Father_Name = $_POST['Father_Name'];
$Sure_Name = $_POST['Sure_Name'];
$Saudi_ID = $_POST['Saudi_ID'];
$Cnum = $_POST['Cnum'];
$Gender = $_POST['Gender'];
$DOB = $_POST['DOB'];
$Mobile = $_POST['Mobile'];
$EPT_Date = $_POST['EPT_Date'];
$EPT = $_POST['EPT'];
$Specialty = $_POST['Specialty'];
$Experience = $_POST['Experience'];
$Qualifications = $_POST['Qualifications'];
$Category = $_POST['Category'];
$GPA = $_POST['GPA'];
$Status = $_POST['Status'];
$Comments = $_POST['Comments'];

mysql_query("UPDATE entry
 SET
First_Name = '".$First_Name."', Father_Name = '".$Father_Name."', Sure_Name = '".$Sure_Name."', Saudi_ID = '".$Saudi_ID."', Cnum = '".$Cnum."', Gender = '".$Gender."', DOB = '".$DOB."', Mobile = '".$Mobile."', EPT_Date = '".$EPT_Date."', EPT = '".$EPT."', Specialty = '".$Specialty."', Experience = '".$Experience."', Qualifications = '".$Qualifications."', Category = '".$Category."', GPA = '".$GPA."', Status = '".$Status."', Comments = '".$Comments."' WHERE id = '".$update_id."'")
 or die(mysql_error());

?>

<div class="clear">
  	    
</div>

<div class="msg-col">
    <div class="msg-logo"><img src="./images/success.png"></div>
<div class="box-sec" style="text-align:center;">
    <b>Successed!</b>
    
</div>
</div>


