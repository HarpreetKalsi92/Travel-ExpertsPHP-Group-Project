<!-- Function used for module 11 to insert agent into database -->
<?php	
	function createMySQLiQueryString ($formArray) 
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
	$valString = "";
	$i = 0;
	$len = count($testArray);
	//Builds string variables from associative array passed to function
	foreach($testArray as $agents => $value)
		{
			if($i == 0)
			{
				$valString .= "'";
			}
			
			if($i != 0)
			{
				$agtString .= ", ";
				$valString .= "','";
				$i++;
			}
			else {
				$i++;
			}
			
			$agtString .= $agents;
			$valString .= $value;
			
			if($i == $len)
			{
				$valString .= "'";
			}
		}	
		
	//Inserts strings from loop into $sql
	$sql = "INSERT INTO agents ($agtString) Values ($valString)";
	echo "<br>$agtString";
	echo "<br>$valString";
	
	//Checks to make sure agent was added to database. Returns message based on success or failure.
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