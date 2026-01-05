<?php
session_start();
if($_SESSION["role"] != "receptionist") die("Access denied");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Receptionist Dashboard</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">

<h2>Receptionist Panel</h2>

<a class="btn-primary" href="manage-bookings.php">Manage Bookings</a>

</div>
</body>
</html>
