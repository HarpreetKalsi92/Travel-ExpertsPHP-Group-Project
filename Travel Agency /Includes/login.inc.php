<!-- Data validation and connection checks for login inputs -->

<?php
if(isset($_POST['login-submit'])) {
	require 'dbconnect.php';
	
	$username = $_POST['username'];	
	$password = $_POST['password'];
	
	//Checks for empty fields
	if(empty($password)) {
		header("Location: ../index.php?error=emptyfields");
		exit();
		//Checks for connection errors
	} else {
			$sql = "SELECT * FROM users WHERE uidUsers=?;";
			$stmt = mysqli_stmt_init($dbh);
			if(!mysqli_stmt_prepare($stmt,$sql)) {
				header("Location: ../index.php?error=sqlerror");
				exit();
			} else {
					mysqli_stmt_bind_param($stmt, "s", $username);
					mysqli_stmt_execute($stmt);
					//Searches for password in database
					$result = mysqli_stmt_get_result($stmt);
					if($row = mysqli_fetch_assoc($result)) {
						$pwdCheck = password_verify($password, $row['pwdUsers']);
						//Returns error if password is inccorect
						if($pwdCheck == false) {
							header("Location: ../index.php?error=wrongpwd");
							exit();
						}
						//Logs in the user if credentials are correct and starts the session variable
						else if($pwdCheck == true) {
							session_start();
							$_SESSION['userId'] = $row['idUsers'];
							$_SESSION['userUid'] = $row['uidUsers'];
					
							header("Location: ../agentregister.php?login=success");
							exit();
						};
					} else {
						header("Location: ../index.php?error=nouser");
						exit();
					}
			}
	}
}
else {
	header("Location: ../index.php");
	exit();
}