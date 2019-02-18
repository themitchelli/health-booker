<?php
include("includes/connection.inc.php");
// connect to MySQL
$conn = dbConnect("query");
?>
<!DOCTYPE html>
<html>
<head>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<title>InsertedRow</title>
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

You just posted <?php echo $_POST["itemName"]; ?>, <?php echo $_POST["itemPrice"]; ?> !! </br>
Is that right?
<?php
$sql = "INSERT INTO items ( itemName, itemPrice) VALUES 
('$_POST[itemName]','$_POST[itemPrice]')";
// submit query and capture the result
$result = $conn->query($sql) or die (mysqli_error());
$conn->close();
?> 

</body>
</html>
