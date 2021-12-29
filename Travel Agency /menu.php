<!-- Menu header attached to all front end webpage -->
<nav>
	<ul>
		<li><a href="index.php"><img src="Images/home.png" class="menu" width="50" height="50" title="Home" alt="Home"></a></li>
		<li><a href="contact.php"><img src="Images/contact.svg" class="menu" width="50" height="50" title="Contact" alt="Contact"></a></li>
		<li><a href="links.php"><img src="Images/link.svg" class="menu" width="50" height="50" title="Links" alt="Links"></a></li>
		<li><a href="vacationpackage.php"><img src="Images/package.png" class="menu" width="50" height="50" title="Vacation Packages" alt="Packages"></a></li>
		<!-- Only displays add agent page if logged in -->
		<?php
		if(isset($_SESSION['userId'])) {
			echo'<li><a href="agentregister.php"><img src="Images/login.png" class="menu" width="50" height="50" title="Add Agent" alt="Add Agent"></a></li>';
		} 
		?>
	</ul>
	
</nav><br>