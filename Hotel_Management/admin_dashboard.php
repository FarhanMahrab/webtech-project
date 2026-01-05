<?php
session_start();
require "db.php";

if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "admin") {
  header("Location: loginpage.html");
  exit;
}

// simple counts
$guestsCount = $conn->query("SELECT COUNT(*) AS c FROM guests")->fetch_assoc()["c"];
$roomsCount  = $conn->query("SELECT COUNT(*) AS c FROM rooms")->fetch_assoc()["c"];
$bookCount   = $conn->query("SELECT COUNT(*) AS c FROM bookings")->fetch_assoc()["c"];
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Admin Dashboard</h2>
  <p>Welcome Admin (ID: <?php echo $_SESSION["user_id"]; ?>)</p>

  <h3>System Summary</h3>
  <ul>
    <li>Total Guests: <?php echo $guestsCount; ?></li>
    <li>Total Rooms: <?php echo $roomsCount; ?></li>
    <li>Total Bookings: <?php echo $bookCount; ?></li>
  </ul>

  <h3>Quick Links</h3>
  <ul>
    <li><a href="manage_rooms.php">Manage Rooms</a></li>
    <li><a href="manage-bookings.php">Manage Bookings</a></li>
  </ul>

  <p><a href="logout.php">Logout</a></p>
</body>
</html>
