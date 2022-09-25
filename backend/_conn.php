<?php
$servername = "localhost";
$username = "root";
$connectionpassword = "";
$dbname = "traffic jam";
// Create connection
$conn = new mysqli($servername, $username, $connectionpassword, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>