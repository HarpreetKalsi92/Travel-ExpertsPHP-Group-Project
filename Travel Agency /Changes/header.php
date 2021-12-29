<!-- Header file attached to every front end web page. Contains to logo, website time of day message and login/logout feature for the website -->
<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<!-- Head Section -->
	<head>
		<title>Travelexperts.com</title>
		<link rel= "stylesheet" type="text/css" href="css/index.css">
		<script type="text/javascript" src="JS/tablearray.js"></script>
	</head>
<header>
<!-- Travel agents logo -->
	<table>
		<tr>
			<td><img src="images/logo.png" alt="Logo" style="width:140px; height:100px;"/>
			<td><h1 style= "color:black; text-align:center;"> Welcome to Travel Experts </h1></td>
		</tr><br>
	</table>
	<!-- Website time of day message -->
	<div class="division">
	<?php
		$day=localtime()[3];
		$month=localtime()[4]+1;
		$year=localtime()[5]+1900;
		$hour=localtime()[2]-8;
		$minute=localtime()[1];
		if($hour<11)
		{
			echo'Good Morning! ';
		}
		elseif($hour<13)
		{
			echo'Good Day! ';
		}
		elseif($hour<17)
		{
			echo'Good Afternoon! ';
		}
		else
		{
			echo'Good Night! ';
		}
		echo 'Today Date is ' . $day . '/' . $month . '/' . $year . ' and the time is ' . $hour . ':' . $minute . '.';
	?></div>
	<br><br>
	<!-- login/logout forms for the website. Displays login info/logout button depending on the session variable -->
	<div class="location">
	<?php
		if(isset($_SESSION['userId'])) {
			echo'<form action="Includes/logout.inc.php" method="POST">
					<button tupe="submit" name="logout-submit">Logout</button>
				</form>';
		}
		else {
			echo'<form action="Includes/login.inc.php" method="POST" >
					<input type="text" name="username" placeholder="Username">
					<input type="password" name="password" placeholder="Password">
					<button class="btn" tupe="submit" name="login-submit">Login</button>
				</form>
				<a href="signup.php">Sign Up</a>';
		}
		if(isset($_SESSION['userId'])) {
			echo '<p> You are logged in.</p>';
			
		}
		else {
			echo '<p> You are not logged in.</p>';
		}
	?> 
</div>
	<hr> <br>
</header>	