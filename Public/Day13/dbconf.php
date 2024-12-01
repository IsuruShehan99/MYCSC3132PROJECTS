<?php
$dbHost =getenv('DB_HOST');
$dbname =getenv('DB_NAME');
$dbuser =getenv('DB_USER');
$dbpass =getenv('DB_PASS');

try {
	
	$connect = mysqli_connect(SERVERNAME,USERNAME,PASSWORD,DBNAME);
	if (!$connect) {
		die("connection failed".mysqli_connect_error());
	} 
	else {
		echo "Connected successfully";
	}
} 
catch (Exception $e) {
	die($e->getMessage());
}

//echo "abc<br>";

?>