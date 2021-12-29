//Confirm and reset functions used for submit and reset buttons.

function subConfirm() {
	var response = confirm("Please confirm you are ready to submit your information.");
	if (response == false) // (if (!response)
	{
		return;
	} else
	{
		document.getElementById("registration").submit();
	}
}
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