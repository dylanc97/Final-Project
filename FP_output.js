//Output Javascript

function testJS(gName, imgName) {
	localStorage["displayName"] = null;
	localStorage["displayImg"] = null;
	localStorage["displayName"] = gName;
	localStorage["displayImg"] = "images/" + imgName;
}

function onload() {
	document.getElementById('gName').innerHTML = localStorage["displayName"];
	
	document.getElementById("imageid").src = localStorage["displayImg"];
}