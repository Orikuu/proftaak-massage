<?php
//Connect to database
$servername = "Localhost";
$username = "root";
$password = "";
$dbname = "care";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Custom vardump function. Thanks to Peter Nocker.
function Dump($v)
{
  echo "<pre style='background-color:#fff;'>";
  var_dump($v);
  echo "</pre>";
}

?>