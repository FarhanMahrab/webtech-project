<?php
session_start();
if($_SESSION["role"] != "guest") die("Access denied");

include "db.php";

$rooms = mysqli_query($conn, "SELECT * FROM rooms WHERE status='available'");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Search Rooms</title>

<link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">

<h2>Available Rooms</h2>

<table>
<tr>
    <th>Room Type</th>
    <th>Price</th>
    <th>Book</th>
</tr>

<?php while($r = mysqli_fetch_assoc($rooms)){ ?>
<tr>
    <td><?= $r['room_type'] ?></td>
    <td>$<?= $r['price'] ?></td>

    <td>
        <form method="POST" action="save-booking.php">
            <input type="hidden" name="room_id" value="<?= $r['id'] ?>">

            Check-in:
            <input type="date" name="check_in" required>

            Check-out:
            <input type="date" name="check_out" required>

            <button class="btn-primary" type="submit">Book</button>
        </form>
    </td>
</tr>
<?php } ?>

</table>

</div>
</body>
</html>
