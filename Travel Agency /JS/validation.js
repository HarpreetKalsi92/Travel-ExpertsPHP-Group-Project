/* Data validation form used to validate data entered into the register.php / customer signup page. Checks if an input is empty and alerts and focus on the empty input. */
function validateForm(form)
         {
			 
        if (form.elements[0].value == "")
            {
            alert("First Name must have a value.");
            form.elements[0].focus();
            return;
            }
        if (form.elements[1].value == "")
            {
            alert("Last Name must have a value.");
            form.elements[1].focus();
            return;
            }
		if (form.elements[2].value == "")
            {
            alert("Address must have a value.");
            form.elements[2].focus();
            return;
            }
		if (form.elements[3].value == "")
            {
            alert("City must have a value.");
            form.elements[3].focus();
            return;
            }
		if (form.elements[4].value == "")
            {
            alert("Province must have a value.");
            form.elements[4].focus();
            return;
            }
		if (form.elements[6].value == "")
            {
            alert("Username must have a value.");
            form.elements[6].focus();
            return;
            }
		if (form.elements[7].value == "")
            {
            alert("Password must have a value.");
            form.elements[7].focus();
            return;
            }	
		if (form.elements[8].value == "")
            {
            alert("Email must have a value.");
            form.elements[8].focus();
            return;
            }
		var regEx=/^[A-Za-z]\d[A-Za-z][ -]?\d[A-Za-z]\d$/;
		if (regEx.test(document.getElementById("postal").value))
			{}
			else
			{
			alert('Invalid Postal Code');
			form.elements[5].focus();
            return;
			}
		var response = confirm("Please confirm you are ready to submit your information.");
		if (response == false) // (if (!response)
			{
			return;
			} else
			{
			document.getElementById("registration").submit();
			}	
		/* Resets the registration form. */
		function resetConfirm() {
		var goback = confirm("Please confirm you want to reset your information.");
		if (goback == false)
		{
			return;
		} else
		{
			document.getElementById("registration").reset();
		}
}
