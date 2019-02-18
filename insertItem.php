<?php
include("includes/connection.inc.php");
// connect to MySQL
/* https://www.createchsol.com/forms-without-tables/ format form */
$conn = dbConnect("query");
?>
<!DOCTYPE html>
<html>
<head>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<title>InsertRow</title>
</head>
<body>
		<a href="http://mitchellihome.ddns.net/index.html">Home</a></br>			
		<a href="http://mitchellihome.ddns.net/insertItem.php">Insert a row</a></br>
		<a href="http://mitchellihome.ddns.net/searchItems.php">Search Items</a></br>
		<a href="http://mitchellihome.ddns.net/selectItems.php">Select Items</a></br>
		<a href="http://mitchellihome.ddns.net/itemSummary.php">Item summary</a></br>
		<a href="http://mitchellihome.ddns.net/template.html">Template</a></br>
		<a href="http://www.themitchelli.com">themitchelli.com</a></br>
		</br></br>
<div id="Form1Layout">
<form method="post" action="insertedrow.php">
<label>Item Name: </label><input name="itemName" type="text" /></br>
<label>Item Price: </label><input name="itemPrice" type="text" /></br>
<!-- <input type="submit" value="Submit form" /></br> -->
<button class = "My_Button">Submit</button>
</form>
</div>




</body>
</html>
