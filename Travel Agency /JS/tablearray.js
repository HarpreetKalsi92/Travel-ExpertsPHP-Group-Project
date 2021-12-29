/*  The following functions are used to load and display a series of images and
	descriptions and display them in a table.  The two arrays used for the images and 
	descriptions are declared as global variables so they can be accessed by all of the 
	functions.  */
var arrImages = new Array();
var arrDescs = new Array();
var arrLinks = new Array();
				
	/* Load the image files and descriptions that will appear in the table on the main
	page.  Don't bother using a loop here, since the image files names and descriptions 
	must be entered individually.  */
function loadImages() {
				
	arrImages[0] = new Image();
	arrImages[0].src = "Images/Africa2500x1250.jpg";
				
	arrImages[1] = new Image();
	arrImages[1].src = "Images/Beach2500x1250.jpg";
				
	arrImages[2] = new Image();
	arrImages[2].src = "Images/jordan2500x1250.jpg";
				
	arrImages[3] = new Image();
	arrImages[3].src = "Images/nam2500x1250.jpg";
				
	arrImages[4] = new Image();
	arrImages[4].src = "Images/Venice2500x1250.jpg";
				
	arrDescs[0] = "Africa";
	arrDescs[1] = "Beach";
	arrDescs[2] = "Jordan";
	arrDescs[3] = "Thailand";
	arrDescs[4] = "Venice";
}
			
function imgLink() {
	arrLinks[0] = "https://africatravelresource.com";
	arrLinks[1] = "https://www.sunwing.ca";
	arrLinks[2] = "https://www.lonelyplanet.com/jordan";
	arrLinks[3] = "https://www.indochinapioneer.com";
	arrLinks[4] = "https://www.lonelyplanet.com/italy/venice";
}
			
function displayPhotoTable() {
			
	// First load the images and their descriptions into the arrays
	loadImages();
			
	tablediv = document.getElementById("photoTable");
				
	// Create the table and header row
	var tbl = document.createElement("table");
	var thdr = document.createElement("th");
	var thdr_txt = document.createTextNode("Mouse over to see photos!");
					
	thdr.appendChild(thdr_txt);
	tbl.appendChild(thdr);
				
	/* Create each row of the table, and append child element to their parent.
	Use the length of the arrDescs array to determine how many rows to add to the table.
	This assumes that the number of images in arrImages matches the number of descriptions
	in arrDescs. */
	for (var i = 0; i < arrDescs.length; i++) {
				
		// Create a new row
		var trow = document.createElement("tr");
				
		// Create a new cell
		var tdata = document.createElement("td");
					
		/*Add a mouseover event handler mouseoverDispImage(i) to the <td>.  Here, the index i is the index of the 
		current cell, as given by the loop counter.  Its value must be written  to the innerHTML string, so that the HTML reads (e.g.) 
				onmouseover='mouseoverDispImage(1)
		for the cell in the second row (index = 1).  */
					
		tdata.innerHTML = "<p class='cell' onmouseover='mouseoverDispImage(" + i + ")'>" + arrDescs[i] + "</p>";
					
		tbl.appendChild(trow);
		trow.appendChild(tdata);
	}
				
				tablediv.appendChild(tbl);
}
			
/* The following function is the mouseover event handler.  When the mouse moves over the cell, the corresponding photo
is displayed in the <div> with id="photodiv".
As described above, this function is passed the current element's index (corresponding to the table row and the matching array element) 
when it is invoked. */
function mouseoverDispImage(i) {
	var phDiv = document.getElementById("photodiv");
	phDiv.innerHTML = "<img class='photo_img' src='" + arrImages[i].src + "'>";
}
			
/* The following function checks the image loaded in the photoDiv tag and opens a new window with the corresponding link. */
function popupWindow(i) {
	var phDiv = document.getElementById("photodiv");
	//if (phDiv.innerHTML) == "<img class='photo_img' src='" + arrImages[0].src + "'>")
	if (phDiv.innerHTML.indexOf("Africa2500x1250.jpg")!=-1)
		newWindow = window.open("https://africatravelresource.com");	
	else if (phDiv.innerHTML.indexOf("Beach2500x1250.jpg")!=-1)
		newWindow = window.open("https://www.sunwing.ca");
	else if (phDiv.innerHTML.indexOf("jordan2500x1250.jpg")!=-1)
			newWindow = window.open("https://www.lonelyplanet.com/jordan");
	else if (phDiv.innerHTML.indexOf("nam2500x1250.jpg")!=-1)
			newWindow = window.open("https://www.indochinapioneer.com");
	else if (phDiv.innerHTML.indexOf("Venice2500x1250.jpg")!=-1)
			newWindow = window.open("https://www.lonelyplanet.com/italy/venice");
	setTimeout(function(){newWindow.close();}, 3000);
}
