
<?php

$host = "localhost";
$username = "u333839707_rootin";
$password = "Root@2103";
$database = "u333839707_indigo";

// Connect to the MySQL server
$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
  echo "Failed to connect to the MySQL server: " . mysqli_connect_error();
  exit;
} 

?>