<!-- Coded by Jeff Melling -->
<body>
<!-- Header Section, logo and website name -->
		<?php
			include ("Includes/dbconnect.php");
			include("header.php");
		?>
<!-- Navigation bar -->	
		<?php
			include("menu.php");
		?>
<!-- Main section, registration form -->		
		<main>
			<h2>Holiday Booking</h2>
			<div class="form-style-8">
				<h2>Book a holiday</h2>
				<form method="POST" id="registration" action="bookingdatatodb.php">
					<input type="hidden" name="package" value="<?php echo $_GET['order']; ?>" />
					<input type="text" name="first" id="first" placeholder="First Name" onfocus="focusOn(this); tooltipOn(ttfirst)" onblur="focusOff(this); tooltipOff(ttfirst)"><div class="tooltip" id="ttfirst" >Please enter your first name.</div>
					<input type="text" name="last" id="last" placeholder="Last Name" onfocus="focusOn(this); tooltipOn(ttlast)" onblur="focusOff(this); tooltipOff(ttlast)"><div class="tooltip" id="ttlast">Please enter your last name.</div>
					<input type="text" name="address" id="address" placeholder="Address" onfocus="focusOn(this); tooltipOn(ttaddress)" onblur="focusOff(this); tooltipOff(ttaddress)"><div class="tooltip" id="ttaddress">Please enter your home address.</div>
					<input type="text" name="city" id="city" placeholder="City" onfocus="focusOn(this); tooltipOn(ttcity)" onblur="focusOff(this); tooltipOff(ttcity)"><div class="tooltip" id="ttcity">Please enter your city..</div>
					<select type="text" name="province" id="province" placeholder="Province"><div class="tooltip" id="ttprovince">Please enter your first name.</div>
						<option value="alberta">Alberta</option>
						<option value="britishColumbia">British Columbia</option>
						<option value="manitoba">Manitoba</option>
						<option value="newBrunswick">New Brunswick</option>
						<option value="newfoundland">Newfoundland and Labrador</option>
						<option value="novaScotia">Nova Scotia</option>
						<option value="ontario">Ontario</option>
						<option value="pei">P.E.I.</option>
						<option value="quebec">Quebec</option>
						<option value="saskatchewan">Saskatchewan</option>
						<option value="nwt">N.W.T.</option>
						<option value="yukon">Yukon</option>
						<option value="nunavut">Nunavut</option>
					<input type="text" name="postal" id="postal" placeholder="Postal Code" onfocus="focusOn(this); tooltipOn(ttpostal)" onblur="focusOff(this); tooltipOff(ttpostal)"><div class="tooltip" id="ttpostal">Format A1B 2C3.</div>
					<input type="text" name="country" id="country" placeholder="Country" onfocus="focusOn(this); tooltipOn(ttcountry)" onblur="focusOff(this); tooltipOff(ttcountry)"><div class="tooltip" id="ttcountry">Please enter your country.</div>
					<input type="text" name="homephone" id="homephone" placeholder="Home phone" onfocus="focusOn(this); tooltipOn(tthomephone)" onblur="focusOff(this); tooltipOff(tthomephone)"><div class="tooltip" id="tthomephone">Please enter your home phone number.</div>
					<input type="text" name="busphone" id="Busphone" placeholder="Business phone" onfocus="focusOn(this); tooltipOn(ttbusphone)" onblur="focusOff(this); tooltipOff(ttbusphone)"><div class="tooltip" id="ttbusphone">Please enter your business phone number.</div>
					<input type="email" name="email" id="email" placeholder="Email" onfocus="focusOn(this); tooltipOn(ttemail)" onblur="focusOff(this); tooltipOff(ttemail)"><div class="tooltip" id="ttemail">Please enter your email.</div>
					<select name="Travel Agent">
					<?php
						$resultSet = $dbh->query("SELECT AgtFirstName, AgtLastName FROM agents");
						while($rows = $resultSet->fetch_assoc())
						{
							$agentFName = $rows['AgtFirstName'];
							$agentLName = $rows['AgtLastName'];
							echo"<option>$agentFName $agentLName</option>";
						}
					?>
					<input type="number" min="1" name="travellerCounter" id="traveller" placeholder="Traveller Count" onfocus="focusOn(this); tooltipOn(ttpostal)" onblur="focusOff(this); tooltipOff(ttpostal)"><div class="tooltip" id="ttpostal">Please insert the number of travellers on your trip.</div>
					<select name="Trip Type">
					<?php
						$resultSet = $dbh->query("SELECT TTName FROM triptypes");
						while($rows = $resultSet->fetch_assoc())
						{
							$tripType = $rows['TTName'];
							echo"<option>$tripType</option>";
						}
					?>
					<br><br>
					<!-- onclick="validateForm(form)" ADD THIS FUNCTION BACK INTO THE SUBMIT INPUT -->
					<input type="submit" class="submit" value="Submit"/>
					<input type="reset" class="reset" value="Reset" onclick="resetConfirm(form)"/>
				</form>
			</div>
			<br>
		</main>
<!-- Footer section -->		
		<?php
			include("footer.php");
		?>
		<!-- Custom Javascript -->
		<script type="text/javascript" src="JS/confirm.js"></script>
		<script type="text/javascript" src="JS/dataValidation.js"></script>
		<script type="text/javascript" src="JS/onFocus.js"></script>
</body>
</html>