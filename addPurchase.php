<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assigment 3 - Purchase Product</title>
</head>
<body>
<?php
include 'connecttodb.php';
?>
<h1></h1>
<ol>
<?php
//Name: Marco Manuel
//Email: mmanuel5@uwo.ca

	//variables that were entered on the previous page
	$whichCustomer = $_POST['customer'];
	$whichProduct = $_POST['productP'];
	$whichQuantity = $_POST['quantityP'];
	//Query which checks to see if a customer has previously purchased that same item.
	$query = "SELECT Quantity FROM Purchase WHERE CustomerID =" . $whichCustomer . " AND ProductID =" . $whichProduct;
	$result = mysqli_query($connection,$query);
	if(!$result)
	{
		die("Database Quantity Query Failed");
	}
	$row = mysqli_fetch_assoc($result);
	
	//if row is null meaning the customer has not purchased this item before
	if($row == NULL)
	{	
		//new query is made which inserts a new row into Purchase table 
		$newQuery = "INSERT INTO Purchase VALUES (".$whichQuantity . ",". $whichCustomer .",".$whichProduct.")";
	}
	else
	{
		//if the customer has purchased this item before, it updates the row's quantity to the original quantity + new Quantity
		$newQuery = "UPDATE Purchase SET Quantity = Quantity+".$whichQuantity." WHERE CustomerID=".$whichCustomer." AND ProductID=".$whichProduct;
	}
	$result=mysqli_query($connection, $newQuery);
	
	if(!$result) {
		die(" Databases query on Purchase Failed! ");
	}
	
	echo "Purchase Successfully Added!";
	mysqli_close($connection);
?>
</ol>
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