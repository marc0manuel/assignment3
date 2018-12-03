<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assigment 3 - Delete Customer</title>
</head>
<body>
<?php
include 'connecttodb.php';
?>
<ol>
<?php
//Name: Marco Manuel
//Email: mmanuel5@uwo.ca


	//customerID is saved as $whichCus
	$whichCus = $_POST['customer'];
	
	//query to delete purchases from Purchase table where the CustomerID is found
	$query = "DELETE FROM Purchase WHERE CustomerID=".$whichCus;
	$result=mysqli_query($connection, $query);
	
	if(!$result) {
		die(" Databases query on Customers Failed!. ");
	}
	
	//query to delete from Customer table where the CustomerID is found.
	$query = "DELETE FROM Customer WHERE CustomerID=".$whichCus;
	$result=mysqli_query($connection, $query);
	
	if(!$result) {
		die(" Databases query on Customers Failed!. ");
	}
	
	echo "<h1>Successfully deleted Customer</h1>";
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