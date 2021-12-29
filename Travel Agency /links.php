<!-- Contains the links for external websites. -->
<body >
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
			<?php
				include("variables.php");
				print'<table>';
				$counter = 1;
				foreach($urlArray as $key=>$value)
				{
					print "<tr>";
					print "<td>".$counter.".</td>";
					print "<td><a href=".$key.">Visit ".$value."</a></td>";
					print "</tr>";
					$counter++;
				}
				print'</table>';
			?>
		</main>	
<!-- Footer section -->	
		<?php
			include("footer.php");
		?>
</body>
</html>