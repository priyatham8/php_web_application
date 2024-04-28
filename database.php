<?php

$hostName = "database-2.cxmk24i8apw9.us-east-1.rds.amazonaws.com";
$dbUser = "admin";
$dbPassword = "admin123";
$dbName = "mydb";
$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);
if (!$conn) {
    die("Something went wrong;");
}

?>
