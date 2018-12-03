<!DOCTYPE html>
<!--
//By: Marco Manuel
//Email: mmanuel5@uwo.ca
-->
<html>
<head>
<meta charset="utf-8">
<title>Assigment 3 - Customer Purchases</title>
</head>
<body>
<?php
include 'connecttodb.php';
?>
<h1>Here are The Purchases:</h1>
<ol>
<?php
	//whichCus is used store the POST variable saved from the previous page as "customer" which is the customerID we will be working with!
	$whichCus = $_POST['customer'];
	//Long query but bare with me!
	//This query returns a table of the customer's first and lastname, and product descriptions that they have purchased.
	//It does so by connectig 3 tables, Customer Table, Purchase Table and Product Table!
	$query = "SELECT Customer.Firstname, Customer.Lastname, Product.Description FROM Customer LEFT JOIN Purchase ON Customer.CustomerID = Purchase.CustomerID
	LEFT JOIN Product ON Purchase.ProductID = Product.ProductID WHERE Customer.CustomerID=" . $whichCus;
	$result=mysqli_query($connection, $query);
	
	if(!$result) {
		die(" Databases query on Customers Failed!. ");
	}
	//while loop to return all the rows of products the customer bought. While loop is used as sometimes a customer may have more than one purchase!
	echo "<ul>";
	while($row = mysqli_fetch_assoc($result)) {
	echo "<li> " . $row["Description"] . "</li>";
}
echo "</ul>";
mysqli_free_result($result);
?>
</ol>
<?php
	mysqli_close($connection);
	?>
	
</body>
</html>
<html>
<body>
<br>
<form action="index.php" method="post">
<input type="submit" value="Home Page!">
</form>
</body>
</html>