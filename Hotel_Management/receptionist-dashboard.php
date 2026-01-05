<?php
session_start();
require "db.php";

if (!isset($_SESSION["role"]) || $_SESSION["role"] !== "receptionist") {
  header("Location: loginpage.html");
  exit;
}

$sql = "SELECT b.id, b.check_in, b.check_out, b.status, g.name AS guest_name, r.room_number
        FROM bookings b
        JOIN guests g ON b.user_id = g.id
        JOIN rooms r ON b.room_id = r.id
        ORDER BY b.id DESC";
$res = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Receptionist Dashboard</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Receptionist Dashboard</h2>
  <p>Welcome Receptionist (ID: <?php echo $_SESSION["user_id"]; ?>)</p>

  <h3>Recent Bookings</h3>
  <table border="1" cellpadding="8">
    <tr>
      <th>ID</th>
      <th>Guest</th>
      <th>Room</th>
      <th>Check-in</th>
      <th>Check-out</th>
      <th>Status</th>
    </tr>
    <?php if ($res && $res->num_rows > 0): ?>
      <?php while($row = $res->fetch_assoc()): ?>
        <tr>
          <td><?php echo $row["id"]; ?></td>
          <td><?php echo htmlspecialchars($row["guest_name"]); ?></td>
          <td><?php echo htmlspecialchars($row["room_number"]); ?></td>
          <td><?php echo $row["check_in"]; ?></td>
          <td><?php echo $row["check_out"]; ?></td>
          <td><?php echo $row["status"]; ?></td>
        </tr>
      <?php endwhile; ?>
    <?php else: ?>
      <tr><td colspan="6">No bookings found.</td></tr>
    <?php endif; ?>
  </table>

  <p><a href="logout.php">Logout</a></p>
</body>
</html>
