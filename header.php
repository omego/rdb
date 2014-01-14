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

	<!-- Loading Bootstrap -->
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
	
	<!-- Loading Flat UI -->
	<link href="css/flat-ui.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/search.css" rel="stylesheet">
	<link href="css/dropit.css" rel="stylesheet">

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js"></script>
<script src="js/dropit.js"></script>


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
		  ?>

		<div class='header-push'>
	<a href="new_record.php" class="btnx-primary col-3-med">Add New</a>

 

<!-- Single button -->
<div class="btn-group">
  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
	 <span class="fui-gear"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
	<li><a href="#">Action</a></li>
	<li><a href="#">Another action</a></li>
	<li><a href="backup.php">Backup</a></li>
	<li class="divider"></li>
	<li><a href="logout.php">logout</a></li>
  </ul>
</div>

<div class="btn-group">
<p> Hi <strong> <? echo $_SESSION['username']; ?></strong>, You are awesome today ;) </p>
</div>



 <div class="clear"></div>




 </div>  	
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
	  