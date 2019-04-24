//Output Javascript

function testJS(gName, imgName) {
	localStorage["displayName"] = null;
	localStorage["displayImg"] = null;
	localStorage["username"] = null;
	localStorage["displayName"] = gName;
	localStorage["displayImg"] = "images/" + imgName;
	
	var url = location.href;
	localStorage["username"] = url.substr(58);
}

function onload(){
	var temp = localStorage["username"];
	var url = location.href + "/?username=" + temp + "&gname=" + localStorage["displayName"];

	location.href = url;
	//history.pushState(null, null, url);
	
	// For displaying gname and img
	document.getElementById('gName').innerHTML = localStorage["displayName"];
	document.getElementById("imageid").src = localStorage["displayImg"];
}