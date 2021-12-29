/*By Harpreet kaur*/

//This is used in all form validation
function validateForm(form)
    {	 
		alert(document.getElementById(form));
		for(var i=0; i<form.length-2; i++) 
		{
			if (form.elements[i].value == "")
			{
				alert("Input can't be blank.");
				form.elements[i].focus();
				return;
			}

		}
		var response = confirm("Please confirm you are ready to submit your information.");
		return response;
	}
		
function resetConfirm(form) {
	var goback = confirm("Please confirm you want to reset your information.");
	return goback;
}