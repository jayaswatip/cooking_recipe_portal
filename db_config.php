<?php
// Step 1: Define database details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "recipe_portal";

// Step 2: Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Step 3: Check the connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
