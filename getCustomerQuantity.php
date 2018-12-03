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

	//quantity is saved
	$quantity = $_POST['quantity'];
	//Long query to return a table of Customer First and Last name, Product Description, and Purchase Quantity.
	//This query will then only return the values which are above the entered quantity.
	$query = "SELECT Customer.Firstname, Customer.Lastname, Product.Description, Purchase.Quantity FROM Customer LEFT JOIN Purchase ON Customer.CustomerID = Purchase.CustomerID
	LEFT JOIN Product ON Purchase.ProductID = Product.ProductID WHERE Purchase.Quantity >". $quantity;
	$result=mysqli_query($connection, $query);
	
	if(!$result) {
		die(" Databases query on Quantity Failed!. ");
	}
	echo "<table>";
	//while loop to output the rows of customers first and last name, item purchased, and how many were purchased.
	
	while($row = mysqli_fetch_assoc($result)) {
	echo "<tr><th> " .$row["Firstname"] . "</th><th>	". $row["Lastname"]. "</th><th>" .$row["Description"] . "</th><th> ".$row["Quantity"] ."</th><tr>";
}
echo "</table>";
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