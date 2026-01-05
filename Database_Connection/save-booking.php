<?php
session_start();
include "db.php";

$user = $_SESSION["user_id"];
$room = $_POST["room_id"];
$in   = $_POST["check_in"];
$out  = $_POST["check_out"];

// prepared statement (safe)
$stmt = $conn->prepare(
"INSERT INTO bookings(user_id, room_id, check_in, check_out, status, payment_status)
 VALUES(?, ?, ?, ?, 'pending', 'unpaid')"
);

$stmt->bind_param("iiss", $user, $room, $in, $out);
$stmt->execute();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Booking Saved</title>

<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">

<h2>Booking Submitted</h2>

<p>Your booking request has been sent.  
Please wait for confirmation.</p>

<a class="btn-primary" href="guest-dashboard.php">Back to Dashboard</a>

</div>
</body>
</html>
