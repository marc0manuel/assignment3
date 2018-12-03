<?php
	$query = "SELECT AgentID,Firstname,Lastname FROM Agent;";
	$result = mysqli_query($connection, $query);
	
	if(!$result) {
		die(" Databases query on AgentID Failed!. ");
	}
	echo "<ul>";
	while($row = mysqli_fetch_assoc($result)) {
	echo "<input type='radio' name='newAgent' value=".$row["AgentID"].">" . $row["Firstname"] . " " . $row["Lastname"] . "<br>";
}
echo "</ul>";
mysqli_free_result($result);

?>
