<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assigment 3 - Customer Quantity Purchases</title>
</head>
<body>
<?php
include 'connecttodb.php';
?>
<h1>Here are The Purchases:</h1>
<ol>
<?php
//Name: Marco Manuel
//Email: mmanuel5@uwo.ca

	//productID we are looking up
	$productID = $_POST['productP'];
	
	//query which selects the SUM(Purchase.quantity) and Product Description and Product Cost from Purchase and Product tables WHERE Product.productID = ProductID we are looking for.
	$query = "SELECT SUM(Purchase.Quantity) AS 'SQuantity', Product.Description, Product.Cost FROM Purchase LEFT JOIN Product ON Purchase.ProductID = Product.ProductID WHERE Product.ProductID =".$productID;
	$result=mysqli_query($connection, $query);
	
	if(!$result) {
		die(" Databases query on Purchase Failed!. ");
	}
	
	$row = mysqli_fetch_assoc($result);
	//Echo's out total quantity sold and total sales by writing the Descripion = Cost*SQuantity
	echo "Product Sales Informtation For: " . $row["Description"]. "<br> Total Quantity Sold: ". $row["SQuantity"] . "<br>Total Sales: $". $row["Cost"]*$row["SQuantity"];


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