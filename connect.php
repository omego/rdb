<?php
mysql_connect("localhost", "root", "root") or die(mysql_error());
//echo "Connected to MySQL<br />";
mysql_select_db("RDB") or die(mysql_error());
mysql_query("SET NAMES 'utf8'");
mysql_query('SET CHARACTER SET utf8'); 
//echo "Connected to Database";
?>