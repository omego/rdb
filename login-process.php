<?php

include 'connect.php';
include 'safein.php';

$username = safein($_POST['username']);
$password = safein($_POST['password']);

 $encrypted_password = md5($password);

$result = mysql_query("SELECT * FROM users WHERE username = '$username' AND password = '$encrypted_password'
");

if(mysql_num_rows($result))
{
  // Login
  session_start();
  $_SESSION['username'] = htmlspecialchars($username); // htmlspecialchars() sanitises XSS // منع الحقن
  // Redirect
  header('Location: index.php');
}
else
{
  // Redirect
  header('Location: login-er.php');

}







?>