<!-- function.class.php is a modified version of functions.php for module 11. 
	Recieves the post data as an associative array and the variable $agent created 
	from the Agent class. Inserts the data into the myPhpAdmin databse -->
<?php	
	function createMySQLiQueryString ($formArray, $agent) 
	{
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
		
	$testArray = $formArray;
	
	$agtString = "";
	$i = 0;
	$len = count($testArray);
	foreach($testArray as $agents => $value)
		{
			if($i != 0)
			{
				$agtString .= ", ";
				$i++;
			}
			else {
				$i++;
			}
			
			$agtString .= $agents;
		}	
	$sql = "INSERT INTO agents ($agtString) Values ($agent)";
	echo "<br>$agtString";
	echo "<br>$agent";
	
	$result = mysqli_query($dbh, $sql);
	if ($result)
	{
		echo("<br><br>Agent added");
		Return true;
	}
	else
	{
		echo("<br><br>Agent not added");
		Return false;
	}
	};
?>