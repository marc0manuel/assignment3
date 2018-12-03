<?php
//Name: Marco Manuel
//Email: mmanuel5@uwo.ca
	
	//This query selects Product Description and ProductID from Product LEFT Joining on Purchase and only outputting where Purchase.ProductID = NULL
	//Purchase.ProductID = NULL means that the ProductID is not in the Purchase Table.
	$query = "SELECT Product.Description, Product.ProductID FROM Product LEFT JOIN Purchase ON Product.ProductID = Purchase.ProductID WHERE Purchase.ProductID IS NULL";
	$result = mysqli_query($connection, $query);
	
	if(!$result) {
		die(" Databases query on Customers Failed!. ");
	}
	echo "<ul>";
	//While loop to output all the product Descriptions that have not been purchased!
	while($row = mysqli_fetch_assoc($result)) {
	echo "<option value= ".$row["ProductID"].">" . $row["Description"]. "</option>";
}
echo "</ul>";
mysqli_free_result($result);

?>
