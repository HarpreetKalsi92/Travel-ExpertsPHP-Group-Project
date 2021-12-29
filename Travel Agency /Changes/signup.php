<!-- Sign up page to add the user to the database. -->
<body>
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
	<!-- Sign up form to create username and password -->
	  <div class="wrapper1">
      <div class="contact-us">
	<div class="Signup"></div>
	<form method="POST" action="Includes/signup.inc.php"> 
		  <div class="input-fields">
                <div class="items">
                	 <label for="Username" class="label">Username</label>
		<input type="text" name="username" placeholder="Username"><br></div>

             <div class="items">
          <label for="password" class="label">Password</label>
		<input type="password" name="password" placeholder="Password"><br></div>
		<button class="btn"type="submit" name="signup-submit">Signup</button>
			</div>
           </div>
	</form>

</main>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<br><br><br><br><br><br>
<!-- Footer section -->	
	<?php
		include("footer.php");
	?>
</body>
</html>