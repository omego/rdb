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

//allowedExts variable is an array consisting of file types that can be supported.we are uploading image so image file extensions are used.
$allowedExts = array("gif", "jpeg", "jpg", "png", "zip","x-zip","x-zip-compressed","pdf","x-pdf");
//explode function breaks the string, here used to get the file extension, whenever 
//a dot(.) would be found in the filename,say abc.jpg, the extension jpg would be 
//retrived.
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if (empty($_FILES['file']['name']))
{
echo "empty file";
}
else {
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/jpg")
|| ($_FILES["file"]["type"] == "image/pjpeg")
|| ($_FILES["file"]["type"] == "image/x-png")
|| ($_FILES["file"]["type"] == "application/zip")
|| ($_FILES["file"]["type"] == "application/x-zip")
|| ($_FILES["file"]["type"] == "application/x-zip-compressed")
|| ($_FILES["file"]["type"] == "application/pdf")
|| ($_FILES["file"]["type"] == "application/x-pdf")
|| ($_FILES["file"]["type"] == "image/png"))
&& ($_FILES["file"]["size"] < 400000)
&& in_array($extension, $allowedExts))
 {
 //if any error in file, display it
 if ($_FILES["file"]["error"] > 0)
{
echo "Return Code: " . $_FILES["file"]["error"] . "<br>";
}
 //else upload the file
else
{
echo "Upload: " . $_FILES["file"]["name"] . "<br>";
echo "Type: " . $_FILES["file"]["type"] . "<br>";
echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br>";
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
  echo "Stored in: " . "upload/" . $newname . "." . $extension;
  $imagepath = "upload/" . $newname . "." . $extension ;

  // Data insert lines
  
  $sql_1="INSERT INTO files (upload_name, url, type, size)
  VALUES
  ('$newname','$imagepath','$imagedbtype','$imagedbsize')";

  // Data insert lines
  
  $sql_2="INSERT INTO entry (First_Name, Father_Name, Sure_Name, Saudi_ID, Cnum, Gender, DOB, Mobile, EPT_Date, EPT, Specialty ,Experience, Category, GPA, Qualifications, Status, Comments, upload_name)
  VALUES
  ('$First_Name','$Father_Name','$Sure_Name','$Saudi_ID','$Cnum','$Gender','$DOB','$Mobile','$EPT_Date','$EPT','$Specialty','$Experience','$Category','$GPA','$Qualifications','$Status','$Comments','$newname')";
  
  
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
  echo "<h3 style='text-align:center;'>Your Form Has Been Submitted successfully</h3>";
  echo "<a href='forms.php'><h3 style='text-align:center;'>Click Here, To see your forms</h3></a>";

  }
}
 }
else
 {
  echo "Invalid file";
 }
}
//////////////////////////////////////////////////////////////////////////////////////// Upload


?>

