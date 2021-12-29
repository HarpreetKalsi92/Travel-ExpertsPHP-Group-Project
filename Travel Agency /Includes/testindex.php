<?php
	include_once 'functions.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
<?php		
	if (createMySQLiQueryString())
	{
	   echo "Agent inserted.";
	}
	else
	{
	   echo "Agent not inserted.";
	}
?>
	
</body>
</html>