<!--
Assignment 3
By: Marco Manuel
Email: mmanuel5@uwo.ca
Comments: This was a fun assignment to do! The knowledge that was learned in this class was very transferable and 
really helped add to my skill set on my resume!
-->

<html>
<head>
<meta charset="utf-8">
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
<!--
Select a customer refers to the getcustomerinfo.php which outputs all the customer names into an ordered list.
When you select a customer , and press "Get Purchases" you are redirected
to getPurchases.php!
-->

Select A Customer:
<form action="getPurchases.php" method="post">
<select name='customer' id='customer'>
<option value="1">Select Here</option>
<?php
include "getcustomerinfo.php";
?>
</select>
<input type="submit" value="Get Purchases!">
</form>
<hr>
<hr>

<!--
The product table is next! 
A table is made of all the products (query located in getProducts.php)
I had a hard time adding sort to the table as if its a new page, I did not know how to set a variable to be a default value.
So to compromise, the table will be shown to you once you choose your sorting for it. 
The table can be sorted ascending/descending on Description or Cost!
-->

<h3>Product Table</h3>
<form action="" method="get">
<table style="width:50%" value="?sort=DDown">
<tr>
<th>ProductID</th>
<th>Description     <a href="?sort=DUp">Up</a>/<a href="?sort=DDown">Down</a></th>
<th>Cost     <a href="?sort=CUp">Up</a>/<a href="?sort=CDown">Down</a></th>
<th>Stock</th>
</tr>
<?php
	if(isset($_GET['sort'])){
	include "getproducts.php";
	}
?>
</table>
</form>
<hr>
<hr>
<!--
Making a purchase!
Simplifying the purchase making process by ensuring no errors occur. Lists and Radio Buttons are provided for who makes the purchase and what are they purchasing.
When the 3 values are inputted, pressing the purchase button will add to the purchase if a previous purchase exists of that item from that customer exists.
or will create a purchase if no purchase of that item from that customer exists.
-->
<h3> Make a Purchase</h3>


<form action="addPurchase.php" method="post">
<table>
<tr><th>
Select A Customer:
<select name='customer' id='customer'>
<option value="1">Select Here</option>
<?php
include "getcustomerinfo.php";
?>
</select>
	</th><th>
Select a Product:

<?php
	include "getProductList.php";
	?>
	</th><th>
Select Product Quantity to Purchase:
<br>
<input type="number" name="quantityP" value="quantity" min="1"></th></tr>
</table>
<input type="submit" value="Purchase!">
</form>
<hr>
<hr>

<!--
Adding a customer prompts the user to enter all customer values and saves those values as variables to be used in the query on the next page
When the button "Add Customer!" is pressed, the page is redirected to addCustomer.php to query adding the customer.
-->
Add a Customer:
<form action="addCustomer.php" method="post">
<table>
<tr><th>
Enter Firstname:
<br>
<input type="text" name="newFirstname" value="">
</th><th>
Enter Lastname:
<br>
<input type="text" name="newLastname" value="">
</th><th>
Enter City:
<br>
<input type="text" name="newCity" value="">
</th><th>
Enter Phone Number (xxx-xxxx):
<br>
<input type="text" name="newPhoneNumber" value="" max="8">
</th><th>
Select Agent:
<br>
<?php
	include "getAgentID.php";
	?>
</th>
</tr>
</table>
<input type="submit" value="Add Customer!">
</form>
<hr>
<hr>
<!--
Changing a customer Phone number.
getcustomerinfo.php is used again to show a list of all customers. 
When 'Update Phone Number' Is pressed, you are redirected to updatePhoneNumber.php page.

-->
Change Customer Phone Number:
<form action="updatePhoneNumber.php" method="post">
<select name="customerp" id="customerp">
<br>
<option value="1">Select Here</option>
<?php
include "getcustomerinfo.php";
?>
</select>
<input type="submit" value="Update Phone Number!">
</form>
<hr>
<hr>

<!--
Deleting a Customer
getcustomerinfo.php is used again to get the customer first and last name.
This information is outputting in a drop down bar where the user will select a customer
and press "Delete customer" after. When the button is pressed, the page is redirected to deleteCustomer.php
-->
Delete a Customer:
<form action="deleteCustomer.php" method="post">
<select name='customer' id='customer'>
<option value="1">Select Here</option>
<?php
include "getcustomerinfo.php";
?>
</select>
<input type="submit" value="Delete Customer!">
</form>
<hr>
<hr>

<!--
Check customer Quantity Purchase
This checks which customers have made purchases over a certain quantity of any item.
Input quantity you want to check and press "Get Customers!" and you are redirected to
getCustomerQuantity.php
-->
Check Customer Quantity Purchases:
<form action="getCustomerQuantity.php" method="post">
Enter Quantity to Check Over:
<br>
<input type="number" name="quantity" value="">
<input type="submit" value="Get Customers!">
</form>
<hr>
<hr>

<!--
Checking which products have never been purchased.
Simple code in this file links to neverBoughtProducts.php to return a list
-->
Products that have never been purchased:
<?php
	include "neverBoughtProducts.php";
?>
<hr>
<hr>
<!--
Find Product Sales
Select a product from radio buttons provided by getProductList.php
When "Get Product Sales!" is pressed you are redirected to 
getProductSales.php page
-->
Find Product Sales:
<form action="getProductSales.php" method="post">

<?php
	include "getProductList.php";
?>
<input type="submit" value="Get Product Sales!">
</form>
</body>
</html>

