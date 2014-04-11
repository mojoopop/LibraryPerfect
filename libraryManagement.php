<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library Management</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script src="SpryAssets/SpryDOMUtils.js" type="text/javascript"></script>
<script src="index.js" type="text/javascript"></script>
<script src="libraryManagement.js" type="text/javascript"></script>
<script type="application/x-javascript">
function getTeacherListTable(){
	
	var xmlhttp=new XMLHttpRequest();
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("contentContainer").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","libraryPageDB.php",true);
xmlhttp.send();
	
}

</script>


<?php include 'libraryPageDB.php'; ?>
</head>

<body style=" background-color:#2E75B6; background-repeat:no-repeat;">
<div id="mainContainer">
  <div id="schoolLogo">
    <p id="pageTitle" style="padding-left:20px; font-size: 96px; position:absolute; top:-50px; " >Kids Library</p>
  </div>
  <h1 id="welcomeMsgContainer">
    <p id="welcomeMsg">Library Management!</p>
  </h1>
  <div id="contentContainer" style="position:absolute; top:100px;width:100%;">Hello
  
  
  <div id="manageTeachersChooser" class="chooserBox"><img id="managerIcons" src="images/managerIcons/teacherManager.png" height="200px"/>
    <h1 id="managerIconTitle">Manage Teachers</h1>
  </div>
  
  <div id="manageStudentsChooser" class="chooserBox"><img id="managerIcons" src="images/managerIcons/manageStudentsIcon.png" height="200px"/>
    <h1 id="managerIconTitle">Manage Students</h1>
  </div>
  
  <div id="manageClassroomsChooser" class="chooserBox" onclick="getTeacherListTable()"><img id="managerIcons" src="images/managerIcons/manageClassroomIcon.png" height="200px"/>
    <h1 id="managerIconTitle">Manage Classrooms</h1>
  </div>
  
  <div id="manageBooksChooser" class="chooserBox"><img id="managerIcons" src="images/managerIcons/bookManagerIcon.png" height="200px"/>
    <h1 id="managerIconTitle">Manage Books</h1>
  </div>
  

  
  
  
  </div>
  
  
</div>
</body>
</html>