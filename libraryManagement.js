
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
		
		document.getElementById("contentContainer").innerHTML = "<p>Balmoral Sucks</p>";
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