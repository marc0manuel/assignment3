<?php
//Name: Marco Manuel
//Email: mmanuel5@uwo.ca

	//Query to select all ProductID's and Descriptions from Product table.
	$query = "SELECT ProductID, Description FROM Product;";
	$result = mysqli_query($connection, $query);
	
	if(!$result) {
		die(" Databases query on Customers Failed!. ");
	}
	echo "<ul>";
	//while loop which echos radio buttons of each product name with the inner value of its productID.
	while($row = mysqli_fetch_assoc($result)) {
	echo "<input type='radio' name='productP' value=".$row["ProductID"].">" . $row["Description"] . "<br>";
}
echo "</ul>";
mysqli_free_result($result);

?>
