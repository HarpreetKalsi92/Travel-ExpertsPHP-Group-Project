<!-- Logs the user out and destroys the seesion variable -->
<?php
	session_start();
	session_unset();
	session_destroy();
	header("Location: ../index.php");
?>