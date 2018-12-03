<?php
//By: Marco Manuel
//Email: mmanuel5@uwo.ca

//Query All customers ORDERED by Last name! (I read the assignment, alphabetically ordered by Lastname!) 
$query = "SELECT * FROM Customer ORDER BY Lastname;";
$result = mysqli_query($connection,$query);
if(!$result) {
	die("Database Query Failed.");
}

//The way I did it was to output the information in a table.
//This seemed to be the most efficient and effective way to display the customer information!
while ($row = mysqli_fetch_assoc($result)){
	echo "<tr><option value= ".$row["CustomerID"]."><th>" .$row["CustomerID"] . "</th><th>".
	$row["Firstname"] ."</th><th>". 
	$row["Lastname"] ."</th><th>".
	$row["City"] ."</th><th>".
	$row["PhoneNumber"] ."</th><th>".
	$row["AgentId"]. "</th>".
	 "</option></tr>"; 
}

?>
