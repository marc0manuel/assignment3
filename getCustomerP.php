<?php
//By: Marco Manuel
//Email: mmanuel5@uwo.ca
	//query to list all customers first and last names.
	$query = "SELECT CustomerID, Firstname, Lastname FROM Customer;";
	$result = mysqli_query($connection, $query);
	
	if(!$result) {
		die(" Databases query on Customers Failed!. ");
	}
	echo "<ul>";
	//while loop to output all customer info in radio button format
	while($row = mysqli_fetch_assoc($result)) {
	echo "<input type='radio' name='customerP' id='customerp' value=".$row["CustomerID"].">" . $row["Firstname"]. " " .$row["Lastname"] . "<br>";
	}
echo "</ul>";
mysqli_free_result($result);

?>
