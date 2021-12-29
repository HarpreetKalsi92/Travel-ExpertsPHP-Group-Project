<!-- Data validation for signup page. -->

<?php
if(isset($_POST['signup-submit'])) {
	//Data check for database connection
	require 'dbconnect.php';
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	//Check if any imputs are empty
	if (empty($username) || empty($password)) {
		header("Location: ../signup.php?error=emptyfields&username=".$username);
		exit();
		//Check for invalid username characters
	} else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
		header("Location: ../signup.php?error=invaliduid");
		exit();
	} else {
			$sql = "SELECT uidUsers FROM users WHERE uidUsers=?";
			$stmt = mysqli_stmt_init($dbh);
			//Check for sql errors
			if (!mysqli_stmt_prepare($stmt, $sql)){
				header("Location: ../signup.php?error=sqlerror1");
				exit();
			} else {
					mysqli_stmt_bind_param($stmt, "s", $username);
					mysqli_stmt_execute($stmt);
					mysqli_stmt_store_result($stmt);
					$resultCheck = mysqli_stmt_num_rows($stmt);
					//Checks to make sure a username is not takem
					if($resultCheck > 0)
					{
						header("Location: ../signup.php?error=usertaken");
						exit();
					} else {
							$sql = "INSERT INTO users (uidUsers, pwdUsers) VALUES (?, ?)";
							$stmt = mysqli_stmt_init($dbh);
							if (!mysqli_stmt_prepare($stmt, $sql)){
								header("Location: ../signup.php?error=sqlerror2");
								exit();
								//Hashes the password and adds the username and password to the database
							} else {
									$hashedPwd = password_hash($password, PASSWORD_DEFAULT);
										
									mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPwd);
									mysqli_stmt_execute($stmt);
									header("Location: ../signup.php?signup=success");
									exit();
									}
							}	
					}
			}
	mysqli_stmt_close($stmt);
	mysqli_close($dbh);
}
else {
	header("Location: ../signup.php");
				exit();
}
