<?php
session_start();
require "db.php"; 


if (!isset($_SESSION["user_id"]) || !isset($_SESSION["role"]) || $_SESSION["role"] !== "guest") {
  header("Location: loginpage.html?error=1");
  exit;
}


if (!isset($conn) || $conn->connect_error) {
  die("DB connection failed.");
}

$user_id = $_SESSION["user_id"];


$stmt = $conn->prepare("SELECT id, name, email FROM guests WHERE id = ?");
if (!$stmt) {
  die("Prepare failed: " . $conn->error);
}
$stmt->bind_param("i", $user_id);
$stmt->execute();
$res = $stmt->get_result();
$guest = $res->fetch_assoc();

if (!$guest) {
  
  session_destroy();
  header("Location: loginpage.html?error=1");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Guest Dashboard</title>
  <style>
    body{font-family:Arial; background:#f4f6ff; padding:30px;}
    .box{background:#fff; max-width:700px; padding:20px; border-radius:12px; box-shadow:0 8px 25px rgba(0,0,0,.08);}
    .btn{display:inline-block; padding:10px 14px; background:#111827; color:#fff; text-decoration:none; border-radius:8px;}
    .muted{color:#555}
  </style>
</head>
<body>
  <div class="box">
    <h2>Welcome, <?php echo htmlspecialchars($guest["name"]); ?> ✅</h2>
    <p class="muted"><b>Email:</b> <?php echo htmlspecialchars($guest["email"]); ?></p>

    <hr>

    <h3>Your Options</h3>
    <ul>
      <li>View available rooms</li>
      <li>Book a room</li>
      <li>See your bookings</li>
    </ul>

    <a class="btn" href="logout.php">Logout</a>
  </div>
</body>
</html>
