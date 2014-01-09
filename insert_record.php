<?php

include 'header.php'; 
include 'connect.php';
include 'safein.php';

///////////////////////////////////////////////////////////////////////////////////////////// Upload

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

$Creator = $_POST['Creator'];

$Lastupdate = $_POST['Lastupdate'];

//allowedExts variable is an array consisting of file types that can be supported.we are uploading image so image file extensions are used.
$allowedExts = array("gif", "jpeg", "jpg", "png", "zip","x-zip","x-zip-compressed","pdf","x-pdf");
//explode function breaks the string, here used to get the file extension, whenever 
//a dot(.) would be found in the filename,say abc.jpg, the extension jpg would be 
//retrived.
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if (empty($_FILES['file']['name']))
{
  header('Refresh: 3; url=new_record.php');
  
  ?>
  
  


  <div class="clear">
  
  </div>
<div class="msg-col">
    <div class="msg-logo"><img src="./images/error.png"></div>
<div class="box-sec" style="text-align:center;">
    <b><? echo "empty file";?>
      
      
    </b>

</div>
</div>
<?
}
else {
 //if any error in file, display it
 if ($_FILES["file"]["error"] > 0)
{
echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
}
 //else upload the file
else
{
$newname = date('dmYhms');
$imagedbtype = $_FILES["file"]["type"];
$imagedbsize = ($_FILES["file"]["size"] / 1024);

 //file will be uploaded in the upload directory..but also need to check whether 
 //the directory consists a same filename already or not..if it does contains
 // a file say abc.jpg already..it would display the msg file already exist
if (file_exists("upload/" . $_FILES["file"]["name"]))
  {
  echo $_FILES["file"]["name"] . " already exists. ";
  }
//else it will upload it in upload directory, you can name the directory acc to you..
//but conventionally upload is used as the directory name
else
  {
  move_uploaded_file($_FILES["file"]["tmp_name"],
  "upload/" . $newname . "." . $extension);
  $imagepath = "upload/" . $newname . "." . $extension ;

  // Data insert lines
  
  $sql_1="INSERT INTO files (upload_name, url, type, size)
  VALUES
  ('$newname','$imagepath','$imagedbtype','$imagedbsize')";

  // Data insert lines
  
  $sql_2="INSERT INTO entry (First_Name, Father_Name, Sure_Name, Saudi_ID, Cnum, Gender, DOB_Day, DOB_Month ,DOB_Year, Mobile, EPT_Date_Day, EPT_Date_Month, EPT_Date_Year, EPT, Specialty ,Experience, Category, GPA, Qualifications, Status, Comments, upload_name, Creator, Lastupdate)
  VALUES
  ('$First_Name','$Father_Name','$Sure_Name','$Saudi_ID','$Cnum','$Gender','$DOB_Day','$DOB_Month','$DOB_Year','$Mobile','$EPT_Date_Day','$EPT_Date_Month','$EPT_Date_Year','$EPT','$Specialty','$Experience','$Category','$GPA','$Qualifications','$Status','$Comments','$newname','$Creator','$Lastupdate')";
  
  
  mysql_query("SET NAMES 'utf8'");
  mysql_query('SET CHARACTER SET utf8'); 
  if (!mysql_query($sql_1))
    {
    die('Error: ' . mysql_error());
    }
    if (!mysql_query($sql_2))
    {
    die('Error: ' . mysql_error());
    }
?>

<div class="clear">

</div>

<div class="msg-col">
    <div class="msg-logo"><img src="./images/success.png"></div>
<div class="box-sec" style="text-align:center;">
    <b>Successed!</b>

</div>
</div>


<?

  header('Refresh: 3; url=new_record.php');

  }
}


   ?>

  <?

}
//////////////////////////////////////////////////////////////////////////////////////// Upload


?>

