<?php
include("includes/connection.inc.php");
// connect to MySQL
$conn = dbConnect("query");
?>
<!DOCTYPE html>
<html>
<head>
<title>Test5</title>
		<link href="favicon.ico" rel="icon" type="image/x-icon" />
		<link href="css/style.css" rel="stylesheet" type="text/css" />
		<meta name="description" content="This will descriibe how or what my site is used for" />
		<meta name="keywords" content="learn, html5, css, sports, gym" />
		<meta name="robots" content="index, follow" />
		<meta http-equiv="Cache-Control" content="public" />
		<meta http-equiv="Expires" content="0" />
		<meta name="copyright" content="Copyright The Mitchelli 2010-2019" />
		<!-- comments
		Multi
		line
		comment -->

</head>
<body>
		<a href="http://mitchellihome.ddns.net/index.html">Home</a></br>			
		<a href="http://mitchellihome.ddns.net/insertrowv3.php">Insert a row</a></br>
		<a href="http://mitchellihome.ddns.net/selectItems.php">Select Items</a></br>
		<a href="http://mitchellihome.ddns.net/searchItems.php">Search Items</a></br>
		<a href="http://mitchellihome.ddns.net/itemSummary.php">Item summary</a></br>
		<a href="http://mitchellihome.ddns.net/template.html">Template</a></br>
		<a href="http://www.themitchelli.com">themitchelli.com</a></br>
	</br></br>
	
<form method="post" action="">
Item Filter: <input name="itemFilter" type="text" /></br>
Submit: <input type="submit" value="Submit form" /></br>
</form>	
<div class="SQLTable width200">
<?php
$sql = "SELECT itemID, itemName, itemPrice FROM items WHERE itemName like '%$_POST[itemFilter]%'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table width=100% cellpadding=10 cellspacing=0 border=1><tr><th><b>ItemID</b></th><th><b>ItemName</b></th><th><b>ItemPrice</b></th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      //  echo "<tr><td>" . $row["itemID"]. "</td><td>" . $row["itemName"]. " " . $row["itemPrice"]. "</td></tr>";
       	echo "<tr><td>" . $row["itemID"]. "</td><td>" . $row["itemName"]. "</td><td>" . $row["itemPrice"]. "</td></tr>" ;
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?> 
</div>
</body>
</html>
