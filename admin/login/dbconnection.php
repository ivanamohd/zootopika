<?php
define('DB_SERVER','localhost');
define('DB_USER','web38');
define('DB_PASS' ,'web38');
define('DB_NAME', 'loginsystem');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);

// Check connection
if (mysqli_connect_error())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
 }

?>

