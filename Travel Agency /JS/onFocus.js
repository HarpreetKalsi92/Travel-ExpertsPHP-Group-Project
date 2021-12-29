// Functions are used to highlight the selected input in the customer registration form. Changes backgroud color and display tooltip text onFocus.

function focusOn(txt) {
	txt.style.background = "#94C5FF";
}

function focusOff(txt) {
	txt.style.background = "";  
}

function tooltipOn(elem) {
	elem.style.display="inline";
}

function tooltipOff(elem) {
	elem.style.display="";
}