<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Library Management</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script type="application/x-javascript">

var tllt;
function chooserManager() 
{

	var clickBooks = document.getElementById("manageBooksChooser");
	var hideBooks = document.getElementById("manageBooksChooser");

	var clickStudents = document.getElementById("manageStudentsChooser");
	var hideStudents = document.getElementById("manageStudentsChooser");

	var clickTeachers = document.getElementById("manageTeachersChooser");
	var hideTeachers = document.getElementById("manageTeachersChooser");

	var clickClassrooms = document.getElementById("manageClassroomsChooser");
	var hideClassrooms = document.getElementById("manageClassroomsChooser");
	
	

	clickBooks.onclick = function() 
	{
		if(hideBooks.style.display == "none") 
		{
			hideBooks.style.display = "inline";
		}
		else
		{
			hideBooks.style.display = 'none';
			hideStudents.style.display = 'none';
			hideClassrooms.style.display = 'none';
			hideTeachers.style.display = 'none';
		}
	};
	clickTeachers.onclick = function() 
	{
		//alert(hideClassrooms.style.display = 'block');
		
		if(hideTeachers.style.display == 'block') 
		{
			hideBooks.style.display = 'none';
			hideStudents.style.display = 'none';
			hideClassrooms.style.display = 'none';
			hideTeachers.style.display = 'none';
		
			var xmlhttp=new XMLHttpRequest();
			xmlhttp.onreadystatechange=function()
			{
  				if (xmlhttp.readyState==4 && xmlhttp.status==200)
    			{
		
    				tllt = xmlhttp.responseText;
			
			
					document.getElementById("contentContainer").innerHTML = "<div id='addTeacherContainer' style=' position :absolute;text-align:center; border-style:none; width:320px; background-color:#cccccc; left:5px;'><h1>Add a Teacher</h1>  <form action='addTeacher.php'; method='post'><p>Employee Number  <input type='text' name='empNum' /></p><p>First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='fName'/></p><p>Last Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='lName'/></p><p>Salutation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name='salutation'><option>Mr.</option><option>Mrs.</option><option>Ms.</option><option>Miss</option><option>Dr.</option><option>Prof.</option><option>Father</option><option>Reverend</option></select></p><p>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='email' name='email' /></p><p>Classroom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type='text' name='classroom1' /></p><p>Classroom Two&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='classroom2' /></p><p>Classroom Three&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='classroom3' /></p><input type='submit' name='Submit' value='Add Teacher'</form></div>"+ tllt;
			
    			}
			}
			xmlhttp.open("GET","getTeacherTable.php",true);
			xmlhttp.send();
		
		
		}
	};
	clickClassrooms.onclick = function()
	{
		if(hideClassrooms.style.display == "none")
		{
			hideClassrooms.style.display = "inline";
		}
		else
		{
			hideBooks.style.display = 'none';
			hideStudents.style.display = 'none';
			hideClassrooms.style.display = 'none';
			hideTeachers.style.display = 'none';
			
			document.getElementById("contentContainer").innerHTML = "<select><option>CR1</option><option>CR2</option></select>";
		}
	};
	clickStudents.onclick = function() 
	{
		if(hideStudents.style.display == "none") 
		{
			hideStudents.style.display = "inline";
		}
		else
		{
			hideBooks.style.display = 'none';
			hideStudents.style.display = 'none';
			hideClassrooms.style.display = 'none';
			hideTeachers.style.display = 'none';
		}
	};
}
</script>



</head>

<body style=" background-color:#2E75B6; background-repeat:no-repeat;">
<div id="mainContainer">
  <div id="schoolLogo">
    <p id="pageTitle" style="padding-left:20px; font-size: 96px; position:absolute; top:-50px; " >Kids Library</p>
  </div>
  <h1 id="welcomeMsgContainer">
    <p id="welcomeMsg">Library Management!</p>
  </h1>
  <div id="contentContainer" style="position:absolute; top:100px;width:100%;">
  
  
  <div id="manageTeachersChooser"  style="display:block; visibility:visible;" class="chooserBox"  onclick="chooserManager();"><img id="managerIcons" src="images/managerIcons/teacherManager.png" height="200px"/>
    <h1 id="managerIconTitle">Manage Teachers</h1>
  </div>
  
  <div id="manageStudentsChooser" class="chooserBox"><img id="managerIcons" src="images/managerIcons/manageStudentsIcon.png" height="200px"/>
    <h1 id="managerIconTitle">Manage Students</h1>
  </div>
  
  <div id="manageClassroomsChooser" style="display:block; visibility:visible;" class="chooserBox"  onclick="chooserManager();"><img id="managerIcons" src="images/managerIcons/manageClassroomIcon.png" height="200px"/>
    <h1 id="managerIconTitle">Manage Classrooms</h1>
  </div>
  
  <div id="manageBooksChooser" class="chooserBox"><img id="managerIcons" src="images/managerIcons/bookManagerIcon.png" height="200px"/>
    <h1 id="managerIconTitle">Manage Books</h1>
  </div>
  

  
  
  
  </div>
  
  
</div>
</body>
</html>