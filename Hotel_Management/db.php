<?php
$host = "127.0.0.1";
$user = "root";
$pass = "";
$db   = "hotel_system";
$port = 3307; // <-- IMPORTANT: use the same port shown in phpMyAdmin (your screenshot shows 3307)

$conn = new mysqli("127.0.0.1", "root", "", "hotel_system", 3307);


if ($conn->connect_error) {
    die("DB Connection failed: " . $conn->connect_error);
}
?>
