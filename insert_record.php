<?php

include 'header.php'; 
include 'connect.php';
include 'safein.php';


$First_Name = $_POST['First_Name'];
$Father_Name = $_POST['Father_Name'];
$Sure_Name = $_POST['Sure_Name'];
$Saudi_ID = $_POST['Saudi_ID'];
$Cnum = $_POST['Cnum'];
$Gender = $_POST['Gender'];
$Mobile = $_POST['Mobile'];
$EPT = $_POST['EPT'];
$EPT_Date = $_POST['EPT_Date'];
$Qualifications = $_POST['Qualifications'];
$Specialty = $_POST['Specialty'];
$Category = $_POST['Category'];
$GPA = $_POST['GPA'];
$Experience = $_POST['Experience'];
$Status = $_POST['Status'];
$Comments = $_POST['Comments'];

// Data insert lines

$sql="INSERT INTO entry (First_Name, Father_Name, Sure_Name, Saudi_ID, Cnum, Gender, Mobile, EPT, EPT_Date, Qualifications, Specialty, Category, GPA, Experience, Status, Comments)
VALUES
('$First_Name','$Father_Name','$Sure_Name','$Saudi_ID','$Cnum','$Gender','$Mobile','$EPT','$EPT_Date','$Qualifications','$Specialty','$Category','$GPA','$Experience','$Status','$Comments')";
mysql_query("SET NAMES 'utf8'");
mysql_query('SET CHARACTER SET utf8'); 
if (!mysql_query($sql))
  {
  die('Error: ' . mysql_error());
  }
echo "<h3 style='text-align:center;'>Your Form Has Been Submitted successfully</h3>";
echo "<a href='forms.php'><h3 style='text-align:center;'>Click Here, To see your forms</h3></a>";


?>

