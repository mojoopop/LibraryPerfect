<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="style.css">
<title>Library Perfect: Home</title>

</head>

<body>
<div id="mainContainer">
  <div id="schoolLogo">
    <p id="pageTitle" style="padding-left:20px; font-size: 96px; position:absolute; top:-50px; " >Kids Library</p>
  </div>
  <h1 id="welcomeMsgContainer">
    <p id="welcomeMsg">No welcome messeage!</p>
    
    <script type="text/javascript">	
if (window.XMLHttpRequest) {
		xmlhttp = new XMLHttpRequest();
	}
	else {
		xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.open("GET", "schoolConfig.xml", false);
	xmlhttp.send();
	xmlDoc = xmlhttp.responseXML;

	document.getElementById("welcomeMsg").innerHTML = "Welcome to the " + xmlDoc.getElementsByTagName("schoolName")[0].childNodes[0].nodeValue + " Library!";</script>
    
  </h1>
  <div id="leftSideFirstPage">
    <h2 id="aboutLibrary">About this library</h2>
    <p id="aboutDescription">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
  </div>
  <!--end of left-->
  
  <div id="rightSideFirstPage">
    <div id="loginContainer">
      <h2 id="loginFirstPage">Login</h2>
      <form action="" method="get" style="text-align:left; position:absolute; top:90px; padding-left:25px; font-family: SegoeUI; font-size: 18px; color:#FFF;">
        <div id="feildDescriptions" style=" margin-bottom:-15px;">Username:</div>
        <br />
        <input type="text" name="username" value="Enter your username here!" style="height: 30px; width: 300px; border-radius: 10px;" />
        <br />
        <br />
        <div id="feildDescriptions" style=" margin-bottom:-15px;">Password:</div>
        <br />
        <input type="password" name="pwd" value="Enter your password here!" style="height: 30px; width: 300px; border-radius: 10px;" />
        <br />
        <br />
        <br />
        <input type="submit" name="submit" value="Login"  style="font-size:20px; height: 50px; width: 300px; border-radius: 10px; background-color:#96E005;"/>
      </form>
      <div id="forgotPassword" style="color:#fff; font-family: SegoeUI; position:absolute; left: 100px;top:360px;">Forgot your password?</div>
    </div>
  </div>
</div>
</body>
</html>