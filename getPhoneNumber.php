<?php
	$customerID = $_POST['customerp'];
	$query = "SELECT PhoneNumber FROM Customer WHERE CustomerID =".$customerID;
	$result = mysqli_query($connection, $query);
	
	if(!$result) {
		die(" Databases query on Customers Failed!. ");
	}
	echo "<ul>";
	while($row = mysqli_fetch_assoc($result)) {
	echo $row["PhoneNumber"];
}
echo "</ul>";
mysqli_free_result($result);

?>
