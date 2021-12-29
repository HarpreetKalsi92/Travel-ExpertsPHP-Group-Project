<!-- Coded by Jeff Melling -->
<!-- Script is used to provide contact info to the contacts webpage from the database -->
<?php
	include ("dbconnect.php");
	
	$sql = "SELECT AgncyAddress, AgncyCity, AgncyProv, AgncyPostal, AgncyPhone FROM agencies";
	$result = $dbh->query($sql);
	
	if ($result->num_rows > 0 )
	{
		//Output data for each row
		echo'<div class="agentdata">';
		$counter = 1;
		while($row = $result->fetch_assoc())
		{
			echo "<h3>Agency " . $counter . "</h3>Address: " . $row["AgncyAddress"] . ", " . $row["AgncyCity"] . ", " . $row["AgncyProv"] . " " . $row["AgncyPostal"] . "<br>Phone: " . $row["AgncyPhone"] . "<br><br>";
			$counter++;
		}
		echo'</div>';
		echo '
			<div class="mapouter">
					<iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=1155%208th%20Ave%20SW&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
					<a href="https://www.yellowrocketagency.com"></a>
				</div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style>
			</div>';
	}
	else
	{
		echo("0 Results");
		Return false;
	}

	$sql2 = "SELECT AgtFirstName, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition FROM agents";
	$result2 = $dbh->query($sql2);
	
	if ($result2->num_rows > 0 )
	{
		//Output data for each row
		echo "<h3>Agent Directory</h3>";
		echo'<div class="agencyaddress">';
		while($row = $result2->fetch_assoc())
		{
			echo $row["AgtFirstName"] . " " . $row["AgtLastName"] . ", " . $row["AgtPosition"] . "<br> Phone:" . $row["AgtBusPhone"] . "<br> Email: " . $row["AgtEmail"] . "<br><br>";
		}
		echo'</div>';
	}
	else
	{
		echo("0 Results");
		Return false;
	}
	
	$dbh->close();