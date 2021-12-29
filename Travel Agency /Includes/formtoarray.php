<!-- Used in module 11 to send post data to functions.php. Neither are used in final website for module 13. -->

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
		
	include_once 'functions.php';
	
	$formArray = $_POST;

	createMySQLiQueryString ($formArray);
	
?>