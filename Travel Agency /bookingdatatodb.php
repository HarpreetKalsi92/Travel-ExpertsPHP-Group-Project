<!-- Coded by Jeff Melling -->

<body>
<!-- Header Section, logo and website name -->
	<?php
		include ("Includes/dbconnect.php");
		include("header.php");
	?>
<!-- Navigation bar -->	
	<?php
		include("menu.php");
	?>
<!-- Main section, registration form -->		
<main>
<?php
	$dbServername = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "travelexperts";
	
	$dbh = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
	//Check for success before continuing
	if (!$dbh) {
		echo "Error number: " . mysqli_connect_errno() . PHP_EOL;
		echo "Error message: " . mysqli_connect_error() . PHP_EOL;
		exit;
		}
		
	$formArray = $_POST;
	
	$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
 
	function generate_string($input, $strength = 16) {
		$input_length = strlen($input);
		$random_string = '';
		for($i = 0; $i < $strength; $i++) {
			$random_character = $input[mt_rand(0, $input_length - 1)];
			$random_string .= $random_character;
		}
 
		return $random_string;
	}
	
	$resultSet = $dbh->query("SELECT AgentId, AgtFirstName, AgtLastName FROM agents");
		while($rows = $resultSet->fetch_assoc())
			{
				$agentFName = $rows['AgtFirstName'];
				$agentLName = $rows['AgtLastName'];
				$agentName = "$agentFName $agentLName";
				if($formArray['Travel_Agent'] = $agentName)
				{
					$agentId = $rows['AgentId'];
				}
			}

	$sql = "INSERT INTO customers (CustFirstName, CustLastName, CustAddress, CustCity, CustProv, CustPostal, CustCountry, CustHomePhone, CustBusPhone, CustEmail, AgentId) Values ('${formArray['first']}','${formArray['last']}','${formArray['address']}','${formArray['city']}','${formArray['province']}','${formArray['postal']}','${formArray['country']}','${formArray['homephone']}','${formArray['busphone']}','${formArray['email']}',$agentId)";
	//Checks to make sure customer was added to database. Returns message based on success or failure.
	$result = mysqli_query($dbh, $sql);
	if ($result)
	{
		echo("<br><br>Customer added");
		$bookingDate = date("y-m-d", time());
		$bookingNo = generate_string($permitted_chars, 6);
		$custId = mysqli_insert_id ($dbh);
	
		$sql2 = "INSERT INTO bookings (BookingDate,BookingNo,TravelerCount,CustomerId,TripTypeId,PackageId) Values ('$bookingDate','$bookingNo',${formArray['travellerCounter']},$custId,'${formArray['Trip_Type']}',${formArray['package']})";
		//Checks to make sure booking was added to database. Returns message based on success or failure.
		$result2 = mysqli_query($dbh, $sql2);
		if ($result2)
		{
			echo("<br><br>Booking added");
			Return true;
		}
		else
		{
			echo("<br><br>Booking not added");
			Return false;
		}
	}
	else
	{
		echo("<br><br>Customer not added");
		Return false;
	}
?>
</main>
<!-- Footer section -->		
		<?php
			include("footer.php");
		?>
		<!-- Custom Javascript -->
		<script type="text/javascript" src="JS/confirm.js"></script>
		<script type="text/javascript" src="JS/dataValidation.js"></script>
		<script type="text/javascript" src="JS/onFocus.js"></script>
</body>
</html>