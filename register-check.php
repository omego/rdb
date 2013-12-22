<?php 


include 'header.php';
include 'connect.php';

$Email = $_POST['Email'];



$sql = 'SELECT Email FROM register WHERE Email = "' . $Email . '"';

if ($sql == $Email) {
	echo "right";
}else{
	echo "not found";
}



?>