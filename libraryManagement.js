
Spry.Utils.addLoadListener(function() {

var clickBooks = document.getElementById("manageBooksChooser");
var hideBooks = document.getElementById("manageBooksChooser");

var clickStudents = document.getElementById("manageStudentsChooser");
var hideStudents = document.getElementById("manageStudentsChooser");

var clickTeachers = document.getElementById("manageTeachersChooser");
var hideTeachers = document.getElementById("manageTeachersChooser");

var clickClassrooms = document.getElementById("manageClassroomsChooser");
var hideClassrooms = document.getElementById("manageClassroomsChooser");

clickBooks.onclick = function() {
	if(hideBooks.style.display == "none") {
		hideBooks.style.display = "inline";
	}
	else{
		hideBooks.style.display = 'none';
		hideStudents.style.display = 'none';
		hideClassrooms.style.display = 'none';
		hideTeachers.style.display = 'none';
	}
};
clickClassrooms.onclick = function() {
	if(hideClassrooms.style.display == "none") {
		hideClassrooms.style.display = "inline";
	}
	else{
		hideBooks.style.display = 'none';
		hideStudents.style.display = 'none';
		hideClassrooms.style.display = 'none';
		hideTeachers.style.display = 'none';
		
		document.getElementById("contentContainer").innerHTML = "<div id='addTeacherContainer' style='text-align:center; border-style:solid; width:325px;'><h1>Add a Teacher</h1>  <form><p>Employee Number  <input type='text' name='empNum' /></p><p>First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='fName'/></p><p>Last Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='lName'/></p><p>Salutation&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name='salutation'><option>Mr.</option><option>Mrs.</option><option>Ms.</option><option>Miss</option><option>Dr.</option><option>Prof.</option><option>Father</option><option>Reverend</option></select></p><p>Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='email' name='tEmail' /></p><p>Classroom&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp<input type='text' name='classroom1' /></p><p>Classroom Two&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='classroom2' /></p><p>Classroom Three&nbsp;&nbsp;&nbsp;&nbsp;<input type='text' name='classroom3' /></p><input type='submit' name='Submit' value='submit'</form></div>";
		


		
	}
};
clickTeachers.onclick = function() {
	if(hideTeachers.style.display == "none") {
		hideTeachers.style.display = "inline";
	}
	else{
		hideBooks.style.display = 'none';
		hideStudents.style.display = 'none';
		hideClassrooms.style.display = 'none';
		hideTeachers.style.display = 'none';
	}
};
clickStudents.onclick = function() {
	if(hideStudents.style.display == "none") {
		hideStudents.style.display = "inline";
	}
	else{
		hideBooks.style.display = 'none';
		hideStudents.style.display = 'none';
		hideClassrooms.style.display = 'none';
		hideTeachers.style.display = 'none';
	}
};
});