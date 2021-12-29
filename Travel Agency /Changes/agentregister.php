
<!--By Harpreet kaur-->

<!-- This form is used to submit agent data into the database. The form sends the post data to Includes/formtodb.php-->
<body>
<!-- Header Section, logo and website name -->
		<?php
			include("header.php");
		?>
<!-- Navigation bar -->	
		<?php
			include("menu.php");
		?>
<body>
<!-- Register agent form -->
	<h2>Register an Agent</h2>
	<div class="form-style-8">
	<h2>Add New Agent </h2>	
	<span id='msgbox'></span>
	<form method="POST" id="agent" action="Includes/formtodb.php"> 
		<input type="text" name="AgtFirstName" placeholder="Agent First Name"onfocus="focusOn(this); tooltipOn(ttagtfirst)" onblur="focusOff(this); tooltipOff(ttagtfirst)"><div class="tooltip" id="ttagtfirst" >eg:jyoti</div> 

		<input type="text" name="AgtMiddleInitial" placeholder="Agent Middle Initial" onfocus="focusOn(this); tooltipOn(ttagtmiddle)" onblur="focusOff(this); tooltipOff(ttagtmiddle)"><div class="tooltip" id="ttagtmiddle" >  eg:k</div> 

		<input type="text" name="AgtLastName" placeholder="Agent Last Name"onfocus="focusOn(this); tooltipOn(ttagtlast)" onblur="focusOff(this); tooltipOff(ttagtlast)"><div class="tooltip" id="ttagtlast" > eg:sirname</div> 

		<input type="text" name="AgtBusPhone" placeholder="Agent Business Phone"onfocus="focusOn(this); tooltipOn(ttagtbusphone)" onblur="focusOff(this); tooltipOff(ttagtbusphone)"><div class="tooltip" id="ttagtbusphone" > eg:123-456-7890</div> 

		<input type="email" name="AgtEmail" placeholder="Agent Email"onfocus="focusOn(this); tooltipOn(ttagtemail)" onblur="focusOff(this); tooltipOff(ttagtemail)"><div class="tooltip" id="ttagtemail" > eg.name@travelagent.com</div> 

		<input type="text" name="AgtPosition" placeholder="Agent Position"onfocus="focusOn(this); tooltipOn(ttagtposition)" onblur="focusOff(this); tooltipOff(ttagtposition)"><div class="tooltip" id="ttagtposition" > eg: Junior/Senior</div> 

		<input type="text" name="AgencyId" placeholder="Agency ID"onfocus="focusOn(this); tooltipOn(ttagencyid)" onblur="focusOff(this); tooltipOff(ttagencyid)"><div class="tooltip" id="ttagencyid" >eg:1 or 2.</div><br><br> 

		<input type="submit" class="submit" value="Add Agent" onclick="return validateForm(form)" />
		<input type="reset" class="reset" value="Reset" onclick="return resetConfirm(form)" />
	</form>
    </div>
<!-- Footer section -->	
		<?php
			include("footer.php");
		?> 
		<script type="text/javascript" src="JS/onFocus.js"></script>
		<script type="text/javascript" src="JS/confirm.js"></script>
		<script type="text/javascript" src="JS/dataValidation.js"></script>
</body>
</html>