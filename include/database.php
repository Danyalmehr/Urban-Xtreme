<?php
//define constants for connection info
define("MYSQLUSER","localhost");
define("MYSQLPASS","root");
define("HOSTNAME","");
define("MYSQLDB","userdashboard");

//make connection to database
function db_connect()
{
	$conn = @new mysqli(HOSTNAME, MYSQLUSER, MYSQLPASS, MYSQLDB);
	if($conn -> connect_error) {
		die('Connect Error: ' . $conn -> connect_error);
	}
	return $conn;
} 
?>


