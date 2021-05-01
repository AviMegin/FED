<?php
$servername = "sql302.epizy.com";
$username = "	epiz_28383775";
$password = "Meginnetje7";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
