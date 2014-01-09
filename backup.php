<?php
// location of your /temp directory relative to this file. In my case this file is in the same directory.
$tempDir = "";
// username for e-commerce MySQL DB
$user = "root";
// password for e-commerce MySQL DB
$password = "root";
// e-commerce DB name to backup
$dbName = "rdb";
// e-commerce DB hostname
$dbHost = "localhost";
// e-commerce backup file prefix
$dbPrefix = "rdb_";

// create backup sql file
$sqlFile = "run.sql";
$createBackup = "mysqldump -h ".$dbHost." -u ".$user." --password='".$password."' ".$dbName." > ".$sqlFile;
exec($createBackup);

//to backup multiple databases, copy all of the above code for each DB, rename the variables to something unique, and set their values to whatever is appropriate for the different databases.
?>