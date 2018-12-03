<?php
//By: Marco Manuel
//Email: mmanuel5@uwo.ca

//session is used to save variables from the first page all the way to the next page.
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Assignment 3 - Update Phone Number</title>
	<link rel="stylesheet" type="text/css" href="assignment3.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<?php
include 'connecttodb.php';
?>
<h1>Update Phone Number:</h1>
<ol>
Current Phone Number: 
<?php
	//Get customer phone number
	$customerID = $_POST["customerp"];
	
	$query = 'SELECT CustomerID, PhoneNumber FROM Customer WHERE CustomerID ='.$customerID;
	
	$result=mysqli_query($connection, $query);
	
	if(!$result) {
		die(" Database Select on Customer Table Failed! ");
	}
	$row = mysqli_fetch_assoc($result);
	
	//echo out old phone number
	echo $row["PhoneNumber"];
	//save customerID so on the next php page we will know which customer to update!
	$_SESSION['customerID'] = $row["CustomerID"];
	
	
?>
<!--
Prompt to enter a new phone number,
when "Update Phone Number!" is pressed, you are redirected to confirmPhoneUpdate.php to finish the job off!
-->
<br>
Enter Phone Number (xxx-xxxx):
<br>
<form action="confirmPhoneUpdate.php" method="post">
<input type="text" name='newP' value="" max="8">
<input type="submit" value="Update Phone Number!">
</form>

</ol>
</body>
</html>