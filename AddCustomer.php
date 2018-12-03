<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Assigment 3 - Add Customer</title>
</head>
<body>
<?php
include 'connecttodb.php';
?>
<h1></h1>
<ol>
<?php
//By: Marco Manuel
//Email: mmanuel5@uwo.ca

	//customer values are POST from the previous page and saved as variables.
	$customerID = 0;
	$firstName = $_POST['newFirstname'];
	$lastName = $_POST['newLastname'];
	$city = $_POST['newCity'];
	$phone = $_POST['newPhoneNumber'];
	$agentID = $_POST['newAgent'];
	$uniqueCustomerID = false;
	
	//This method is used to ensure a unique customerID is generated!
	//A boolean to check if uniqueCustomerID is found triggers the while loop to continue/exit
	while($uniqueCustomerID != true)
	{
		
		//generate a random int. This could be changed easily to an integer from 0-999, or 0-9999, but for simplicity sake I did just integers from 0-99.
		$customerID = rand(0,99);
		//query the customer table using the generated integer
		$query = "SELECT CustomerID FROM Customer WHERE CustomerID =" . $customerID;
		$result = mysqli_query($connection,$query);
		if(!$result)
		{	
			die("Database CustomerID Query Failed");
		}
		$row = mysqli_fetch_assoc($result);
		//if no rows were returned, then you have a unique ID, else, go back to the top of while loop and try again!
		if($row == NULL)
		{
			$uniqueCustomerID = true;
		}
		
	}
	
	//New query inserts all user entered customer values and the generated customerID value into the table
	$newQuery = 'INSERT INTO Customer VALUES("'.$customerID .'","'.$firstName.'","'.$lastName.'","'.$city.'","'.$phone.'","'.$agentID.'")';
	
	$result1=mysqli_query($connection, $newQuery);
	
	if(!$result1) {
		die(" Database Insert on Customer Table Failed! ");
	}
	
	echo "Customer Successfully Added!";
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