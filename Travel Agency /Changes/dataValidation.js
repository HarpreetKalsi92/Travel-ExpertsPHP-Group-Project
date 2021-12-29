
/*By Harpreet kaur*/

//This is used in agentregister. php page
function validateForm(form)
    {	 
		alert(document.getElementById(form));
		for(var i=0; i<form.length-2; i++) 
    {
		//alert(document.getElementById(form));
		if (form.elements[i].value == "")
	{
		alert("Input can't be blank.");
		form.elements[i].focus();
		return false;
	}

	}
		var response = confirm("Please confirm you are ready to submit your information.");
		return response;
		/*if (response == false) // (if (!response)
			{
			return;
			} else
			{
			document.getElementById(form).submit();
			}	*/
			//document.getElementById('agent').submit();
	}
		
       function resetConfirm(form) {
	   var goback = confirm("Please confirm you want to reset your information.");
	   return goback;
	       /*if (goback == false)
	       {
		   return;
	       } else
	       {
		   document.getElementById(form).reset();
	       }*/
    }
