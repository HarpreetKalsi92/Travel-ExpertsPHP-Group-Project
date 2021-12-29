<!-- Function used to test database connection and return an error if connection failed -->

<?php
	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "travelexperts";
	
	$dbh = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
	//Check for success before continuing
	if (!$dbh) {
		echo "Error number: "
		. mysqli_connect_errno() . PHP_EOL;
		echo "Error message: " 
		. mysqli_connect_error() . PHP_EOL;
		exit;
		} 
?>