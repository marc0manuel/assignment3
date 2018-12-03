<?php
//By: Marco Manuel
//Email: mmanuel5@uwo.ca


//session_start is used to get the saved value from updatePhoneNumber.php
//w3Schools showed a simple tutorial on how session works.
session_start();
include "connecttodb.php";

	//get values 
	$PhoneNumber = $_POST['newP'];
	$customerID = $_SESSION["customerID"];
	//Query which updates phone number of customerID 
	$query = 'UPDATE Customer SET PhoneNumber ="'.$PhoneNumber .'"WHERE CustomerID='.$_SESSION['customerID'];
	$result=mysqli_query($connection, $query);
	if(!$result) {
		die(" Database Select on Customer Table Failed! ");
	}
	echo "Successfully Changed Number";
	

mysqli_close($connection);



?>
<html>
<body>
<br>
<form action="index.php" method="post">
<input type="submit" value="Home Page!">
</form>
</body>
</html>