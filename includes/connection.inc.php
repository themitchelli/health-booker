<?php
function dbConnect($type) {
  if ($type == "query") {
  $user = "root";
  $pwd = "Matamanoa5";
  }
  else {
    exit("Unrecognised connection type");
    }
  // connection code goes here
  $conn = new mysqli("localhost", $user, $pwd, "db2")
or die ("cannot connect to database");
return $conn;

  }
?>
