<!-- Coded by Harman Kaur & Jeff Melling -->
<?php
	include ("dbconnect.php");
	
	$sql = "SELECT * FROM packages";
	$result = $dbh->query($sql);
	
	if ($result->num_rows > 0 )
	{
		//Output data for each row
		$counter=1;
		while($packages = $result->fetch_assoc())
		{
			$currentDate = date("Y-m-d");
			$endDate = date("Y-m-d", strtotime($packages["PkgEndDate"]));
			$startDate = date("Y-m-d", strtotime($packages["PkgStartDate"]));

			if($currentDate < $endDate) {
				echo"
				<table width='600px' class='vacpkg'>
	        		<tr>
	        			<th class='vacpkgcell' colspan='3'>".$packages["PkgName"]."</th>
	        		</tr>
	        		<tr>
	        			<td class='vacpkgcell' rowspan='3' width='250px'><img src=".$packages["Image"]." alt='Caribbean New Year'style='width:250px; height:200px;'/>
	        			</td>
	        			<td colspan='2'>".$packages["PkgDesc"]."</td>
	        		</tr>
	         		<tr>
	        			<td>Price:".$packages["PkgBasePrice"]."</td>
	        			<td rowspan='2'><a id=order".$counter." href='register.php?order=".$counter."' class=>Order</button></td>
	       	 		</tr>";
					if($currentDate < $startDate) {
						echo"
							<tr>
								<td>Dates: ".substr($packages["PkgStartDate"],0,10)." to ".substr($packages["PkgEndDate"],0,10)."</td>
							</tr>";
					} else {
						echo"
							<tr>
								<td>Dates: <span style='color:red;font-weight:bold'>".substr($packages["PkgStartDate"],0,10)."</span> to ".substr($packages["PkgEndDate"],0,10)."</td>
							</tr>";
					}
	        	echo"</table></br>";
			} else {
				echo'';
			}
			$counter++;
		}
	}
		$dbh->close();