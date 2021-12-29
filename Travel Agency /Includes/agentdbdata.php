<!-- Test page not used in any modules. -->

<?php
	include_once 'dbconnect.php';
		
	$first = $_POST['AgtFirstName'];
	$middle = $_POST['AgtMiddleInitial'];
	$last = $_POST['AgtLastName'];
	$phone = $_POST['AgtBusPhone'];
	$email = $_POST['AgtEmail'];
	$position = $_POST['AgtPosition'];
	$id = $_POST['AgencyId'];

	if ($result)
	{
		header("Location: ../index.php?signup=success");
		Return true;
	}
	else
	{
		header("Location: ../agentregister.php?signup=fail");
		Return false;
	}
	
	
?>