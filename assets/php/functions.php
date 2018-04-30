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

// the SQL string that fetches data....
$selectSQL = "SELECT `title`, `description`, `image`, `id` FROM `treatment`";
// This is a prepared statement, not necessary with this simple query with no variables, but anyway...

// run query and store the resource into variable
$res = $conn->query($selectSQL);

//Custom vardump function. Thanks to Peter Nocker.
function Dump($v)
{
  echo "<pre style='background-color:#fff;'>";
  var_dump($v);
  echo "</pre>";
}

?>