<?php
$query = "SELECT * FROM Customer ORDER BY Lastname;";
$result = mysqli_query($connection,$query);
if(!$result) {
	die("Database Query Failed.");
}
while ($row = mysqli_fetch_assoc($result)){
	echo "<tr><option value= ".$row["CustomerID"]."><th>" .$row["CustomerID"] . "</th><th>".
	$row["Firstname"] ."</th><th>". 
	$row["Lastname"] ."</th><th>".
	$row["City"] ."</th><th>".
	$row["PhoneNumber"] ."</th><th>".
	$row["AgentId"]. "</th>".
	 "</option></tr>"; 
}

?>
