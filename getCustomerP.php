<?php
	$whichCus = $_POST["pickacustomer"];
	$query = "SELECT Customer.Firstname, Customer.Lastname, Product.Description FROM Customer
	LEFT JOIN Purchase ON Customer.CustomerID = Purchase.CustomerID
	LEFT JOIN Product ON Purchase.ProductID = Product.ProductID
	WHERE Customer.CustomerID =" . $whichCus;
	$result = mysqli_query($connection, $query);
	
	if(!$result) {
		die(" Databases query on Customers Failed!. ");
	}
	echo "<ul>";
	echo "Item(s) Purchased:";
	while($row = mysqli_fetch_assoc($result)) {
	echo "<li> " . $row["Description"] . "</li>";
}
echo "</ul>";
mysqli_free_result($result);
?>
