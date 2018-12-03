<?php
//By: Marco Manuel
//Email: mmanuel5@uwo.ca

//This query gets all customer Information ordering it by Lastname
$query = "SELECT * FROM Customer ORDER BY Lastname;";
$result = mysqli_query($connection,$query);
if(!$result) {
	die("Database query failed.");
}
//while loop which outputs each row printing out first and last name and saving the value as customerID
while($row = mysqli_fetch_assoc($result)){
	echo "<option value= ".$row["CustomerID"].">" . $row["Firstname"] . " " . $row["Lastname"] . "</option>";
	}
	
mysqli_free_result($result);
?>

