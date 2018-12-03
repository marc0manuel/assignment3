<?php
//By: Marco Manuel
//Email: mmanuel5@uwo.ca

//We start with the basic Query first of getting all the information from the Product Table
$query = "SELECT * FROM Product";


//next, we choose see what sorting method was chosen from the previous page and add to the query the corresponding value

if($_GET["sort"] != NULL)
{
$sortBy = $_GET["sort"];
if ($sortBy == 'DUp')
{
	$query .=" ORDER BY Description ASC";
}
elseif ($sortBy == 'DDown')
{
	$query .=" ORDER BY Description DESC";
}
elseif($sortBy == 'CUp')
{
	$query .=" ORDER BY Cost ASC";
}
elseif ($sortBy == 'CDown')
{
	$query .=" ORDER BY Cost Desc";
}
}
$result=mysqli_query($connection,$query);

if(!$result) {
	die("Database Query Failed.");
}
//We use a while loop to loop through all the rows and output in table format!
while ($row = mysqli_fetch_assoc($result)){
	echo "<tr><option value= ".$row["ProductID"]."><th>" .$row["ProductID"] . "</th><th>".
	$row["Description"] ."</th><th>". 
	$row["Cost"] ."</th><th>".
	$row["Stock"] ."</th>".
	 "</option></tr>"; 
}

?>
