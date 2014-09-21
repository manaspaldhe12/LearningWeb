<?php
//echo "My first PHP script!";

$con=mysqli_connect("manastestsite.zxq.net","923790_manas","webserver123","manastestsite_zxq_testtable");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT FirstName FROM Persons");
$i = 0;
while($row = mysqli_fetch_array($result)) {
  echo $row['FirstName'];
  echo ',';
}

mysqli_close($con);

?>