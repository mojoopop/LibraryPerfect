Spry.Utils.addLoadListener(function() {
	if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	else {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.open("GET", "schoolConfig.xml", false);
	xmlhttp.send();
	xmlDoc = xmlhttp.responseXML;

	document.getElementById("welcomeMsg").innerHTML = "Welcome to the " + xmlDoc.getElementsByTagName("schoolName")[0].childNodes[0].nodeValue + " Library!";



});