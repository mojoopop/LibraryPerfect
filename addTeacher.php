<?php
$empNum = $_POST["empNum"];
$fName = $_POST["fName"];
$lName = $_POST["lName"];
$salutation = $_POST["saluation"];
$email = $_POST["email"];
$classroom1 = $_POST["classroom1"];
$classroom2 = $_POST["classroom2"];
$classroom3 = $_POST["classroom3"];

$con=mysqli_connect("lb2014.db.8199569.hostedresource.com","lb2014","WebDev@014","lb2014");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"INSERT INTO 'lb2014'.'teachers' ('empNum', 'fName', 'lName', 'salutation', 'email', 'classroom1', 'classroom2', 'classroom3') VALUES ('"+$empNum+"', '"+$fName+"', '"+$lName+"', '"+$saluation+"', '"+$email+"', '"+$classroom1+"', '"+$classroom2+"', '"+$classroom2+"');
");

?>