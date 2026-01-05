<?php
// db.php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "hotel_system";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
  die("DB Connection failed: " . $conn->connect_error);
}
?>
