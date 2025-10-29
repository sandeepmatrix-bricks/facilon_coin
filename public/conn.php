<?php
$servername = "fs-prod-db.mysql.database.azure.com";
$username = "fs-prod-app-db";
$password = "LYWX35q112U0SVz24";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>