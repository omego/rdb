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
$DOB_Day = $_POST['DOB_Day'];
$DOB_Month = $_POST['DOB_Month'];
$DOB_Year = $_POST['DOB_Year'];
$Mobile = $_POST['Mobile'];
$EPT_Date_Day = $_POST['EPT_Date_Day'];
$EPT_Date_Month = $_POST['EPT_Date_Month'];
$EPT_Date_Year = $_POST['EPT_Date_Year'];
$EPT = $_POST['EPT'];
$Specialty = $_POST['Specialty'];
$Experience = $_POST['Experience'];
$Qualifications = $_POST['Qualifications'];
$Category = $_POST['Category'];
$GPA = $_POST['GPA'];
$Status = $_POST['Status'];
$Comments = $_POST['Comments'];

$Lastupdate = $_POST['Lastupdate'];

mysql_query("UPDATE entry
 SET
First_Name = '".$First_Name."', Father_Name = '".$Father_Name."', Sure_Name = '".$Sure_Name."', Saudi_ID = '".$Saudi_ID."', Cnum = '".$Cnum."', Gender = '".$Gender."', DOB_Day = '".$DOB_Day."', DOB_Month = '".$DOB_Month."', DOB_Year = '".$DOB_Year."', Mobile = '".$Mobile."', EPT_Date_Day = '".$EPT_Date_Day."', EPT_Date_Month = '".$EPT_Date_Month."', EPT_Date_Year = '".$EPT_Date_Year."', EPT = '".$EPT."', Specialty = '".$Specialty."', Experience = '".$Experience."', Qualifications = '".$Qualifications."', Category = '".$Category."', GPA = '".$GPA."', Status = '".$Status."', Comments = '".$Comments."' , Lastupdate = '".$Lastupdate."' WHERE id = '".$update_id."'")
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


