<?php
include("includes/connection.inc.php");
$conn = dbConnect("query");
$sql = "select * from items";
// submit query and capture the result
$result = $conn->query($sql) or die (mysqli_error());
// find out how many records were retrieved
$numRows = $result->num_rows;
?>
<html>
	<head>
		<title>Test 2</title>
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
		<a href="http://mitchellihome.ddns.net/insertItem.php">Insert a row</a></br>
		<a href="http://mitchellihome.ddns.net/selectItems.php">Select Items</a></br>
		<a href="http://mitchellihome.ddns.net/itemSummary.php">Item summary</a></br>
		<a href="http://mitchellihome.ddns.net/template.html">Template</a></br>
		<a href="http://www.themitchelli.com">themitchelli.com</a></br>
		</br></br>
	<p>A total of <?php echo $numRows; ?> records were found.</p>
	</body>
</html>
