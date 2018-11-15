<html>
<head>
	<title>Assignment 3</title>
	<link rel="stylesheet" type="text/css" href="assignment3.css">
	<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
</head>
<body>
<script src="assignment3.js"></script>
<?php
	include "connecttodb.php";
?>
<h1>Assignment 3</h1>
<h3>Customer Table</h3>
<table style="width:50%">
<tr>
<th>CustomerID</th>
<th>Firstname</th>
<th>Lastname</th>
<th>City</th>
<th>PhoneNumber</th>
<th>AgentID</th>
</tr>

<?php
	include "getcustomers.php";
?>
</table>

<form action="" method="post">

<select name="pickacustomer" id="pickacustomer">
	<option value="1">Select Here</option>
<?php
include "getcustomerinfo.php";
?>
</select>
</form>
<?php
	include "getCustomerP.php";
?>
<hr>
<hr>
<img src="http://www.csd.uwo.ca/~lreid/blendedcs3319/flippedclassroom/four/kids.png" width="216" height="260">
</body>
</html>

