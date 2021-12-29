<?php
	include ("dbconnect.php");
	
	$sql = "SELECT * FROM packages";
	$result = $dbh->query($sql);
	
	if ($result->num_rows > 0 )
	{
		//Output data for each row
		echo'<div id="wrapper">';
		$counter = 1;
		while($packages = $result->fetch_assoc())
		{
			echo"
				<table>
	        		<tr>
	        			<th colspan='3'>".$packages["PkgName"]."</th>
	        		</tr>
	        		<tr>
	        			<td rowspan='3'><img src=".$packages["Image"]." alt='Caribbean New Year'style='width:250px; height:200px;'/>
	        			</td>
	        			<td colspan='2'>".$packages["PkgDesc"]."</td>
	        		</tr>
	         		<tr>
	        			<td>Price:".$packages["PkgBasePrice"]."</td>
	        			<td><button type=submit value='submit' style='width:100%''>Order</button></td>
	       	 		</tr>
	       	 		<tr>
	       	 			<td>Dates: ".$packages["PkgStartDate"]." to ".$packages["PkgEndDate"]."</td>
	       	 		</tr>
	        	</table></br>
				";
		}
	}
		$dbh->close();







		