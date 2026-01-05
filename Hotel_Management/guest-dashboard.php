<?php
session_start();
if($_SESSION["role"] != "guest") die("Access denied");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Guest Dashboard</title>

    <!-- External CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">

<h2>Guest Dashboard</h2>

<a class="btn-primary" href="search-rooms.php">Search Rooms</a><br><br>
<a class="btn-secondary" href="my-bookings.php">My Bookings</a>

</div>
</body>
</html>
