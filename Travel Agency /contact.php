<!-- Coded by Jeff Melling -->
<body onload="displayPhotoTable()">
<!-- Header Section, logo and website name -->
		<?php
			include("header.php");
		?>
<!-- Navigation bar -->		
		<?php
			include("menu.php");
		?>
<!-- Main section, travel pictures -->			
		<main>
			<h2>Contact Us</h2>
			<div>
			<?php
				include("Includes/contact.inc.php");
			?>
			</div>
		</main>
<!-- Footer section -->	
		<?php
			include("footer.php");
		?>
</body>
</html>