<?php

$query = "SELECT * FROM Customer;";
$result = mysqli_query($connection,$query);
if(!$result) {
	die("Database query failed.");
}

while($row = mysqli_fetch_assoc($result)){
	echo "<option value= ".$row["CustomerID"].">" . $row["Firstname"] . " " . $row["Lastname"] . "</option>";
	}
	
mysqli_free_result($result);
?>

