<?



$con=mysqli_connect("lb2014.db.8199569.hostedresource.com","lb2014","WebDev@014","lb2014");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM teachers");
echo "<table style=''><tr><th>Employee Number</th><th>First Name</th><th>Last Name</th><th>Salutation</th><th>Email</th><th>Classroom</th><th>Classroom 2</th><th>Classroom 3</th></tr>";
while($row = mysqli_fetch_array($result))
  {
  $teacherTableHTML = "<tr><td>" . $row['empNum'] . "</td><td>" . $row['fName'] . "</td><td>" . $row['lName'] . "</td><td>" . $row['salutation'] . "</td><td>" . $row['email'] . "</td><td>" . $row['classroom1'] . "</td><td>" . $row['classroom2'] . "</td><td>" . $row['classroom3'] . "</td></tr>";
  
  
  echo $teacherTableHTML;

  }
  
echo "</table>";

mysqli_close($con);

?>
