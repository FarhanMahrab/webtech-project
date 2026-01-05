<?php
session_start();
if($_SESSION["role"] != "admin") die("Access denied");
?>

<!DOCTYPE html>
<html>
<head>
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">

<h2>Admin Dashboard</h2>

<a class="btn-primary" href="manage-rooms.php">Manage Rooms</a><br><br>
<a class="btn-secondary" href="view-bookings.php">View All Bookings</a>

</div>
</body>
</html>
