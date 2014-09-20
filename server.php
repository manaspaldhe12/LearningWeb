<?php
//echo "My first PHP script!";

$con=mysqli_connect("manastestsite.zxq.net","923790_manas","webserver123","manastestsite_zxq_testtable");
// Check connection
//if (mysqli_connect_errno()) {
//  echo "Failed to connect to MySQL: " . mysqli_connect_error();
//}
//else{
//	echo "successfully connected to database! :) \n\n";
//}
/*
$val = mysqli_query($con, 'SELECT * FROM Persons');
if($val){
	$sql="CREATE TABLE Persons(FirstName CHAR(30),LastName CHAR(30),Age INT)";
	if (mysqli_query($con,$sql)) {
  		echo "Table persons created successfully";
	} else {
  		echo "Error creating table: " . mysqli_error($con);
	}
}

mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age) VALUES ('Peter', 'Griffin',35)");

mysqli_query($con,"INSERT INTO Persons (FirstName, LastName, Age) VALUES ('Glenn', 'Quagmire',33)"); */

$result = mysqli_query($con,"SELECT FirstName FROM Persons");
echo '<select name="formGender">';
echo '<option value="">Select...</option>';
$i = 0;
while($row = mysqli_fetch_array($result)) {
  echo '<option value=';
  echo $i;
  echo '>';
  echo $row['FirstName'];
  echo '</option>';
  $i++;
}
echo '</select>';

mysqli_close($con);

?>