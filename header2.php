<?php
ob_start();
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
	<meta charset="utf-8">
	<title>RDB Main</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Loading JS -->
	<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<script>
	$(function() {
	$( "#datepicker" ).datepicker();
	});
	
	$(function() {
	$( "#datepicker-2" ).datepicker();
	});
	</script>

	<!-- Loading css -->
	<link href="css/formee-style.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/formee-structure.css" rel="stylesheet">
 	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">

	<link rel="shortcut icon" href="images/favicon.ico">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
	<!--[if lt IE 9]>
	  <script src="js/html5shiv.js"></script>
	<![endif]-->
  </head>
  <body>
	  <?php 
	  error_reporting(E_ALL); ini_set('display_errors', 'On'); 


	  if(isset($_SESSION['username']))
	  {
		  // Logged in
		  echo "<div class='header-push'>";
		  echo '<div style="float:left;text-align:center;font-size:14px;"><p><span class="fui-gear"></span> Hi <strong>'. $_SESSION['username']. '</strong>, You are awesome today ;) <a href="logout.php">logout</a></p></div>';
?>
  
 
 <a href="index.php" class="btnx-primary col-3-med">Home</a>
 </div>
  	</div>
  	<div class="clear">
		
	</div>
   </div>
   

 

<?
	  }
	  else
	  {
	    // Not logged in
	    header('Location: login.php');
	    exit();
	  }
	  
	  ?>
	  