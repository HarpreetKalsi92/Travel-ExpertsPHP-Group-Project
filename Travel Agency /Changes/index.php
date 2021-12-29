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
			<table align="center"> 
				<tr>
				<td><div class="gallery"><img src="images/venice.jpg" alt="Venice" style="width:400px; height:320px;"/></td></div>
			    <td><div class="gallery"><img src="images/newyork.jpg" alt="New York" style="width:400px; height:320px;"/></td></div>
				<td><div class="gallery"><img src="images/cancun.jpg" alt="Cancun" style="width:400px; height:320px;"/></td></div>
				</tr>
			</table><br>
<!--Image Array-->
			<h2>Pick a Destination!</h2>
					<br>
			<div id="wrapper">
				<div id="photoTable">
				</div>
				<div id="photodiv" onclick="popupWindow()">
				</div>
			</div>
		</main>	
<!-- Footer section -->	
		<?php
			include("footer.php");
		?>
</body>
</html>