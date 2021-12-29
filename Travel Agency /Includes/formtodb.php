<!-- Recieves agent form data for module 13, calls the Agent class and passes both variables to function.class.php -->

<?php
	include_once("agent.inc.php");
	include_once("function.class.php");
	
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
	$formArray = $_POST;
	$agent = new Agent($_POST['AgtFirstName'],$_POST['AgtMiddleInitial'],$_POST['AgtLastName'],$_POST['AgtBusPhone'],$_POST['AgtEmail'],$_POST['AgtPosition'],$_POST['AgencyId']);
	createMySQLiQueryString ($formArray, $agent); 
	
?>