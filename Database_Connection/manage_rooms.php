<?php
session_start();
if($_SESSION["role"] != "admin") die("Access denied");

include "db.php";

if($_POST){
    $type  = $_POST["type"];
    $price = $_POST["price"];

    // safer insert (prepared statement)
    $stmt = $conn->prepare("INSERT INTO rooms(room_type, price) VALUES(?, ?)");
    $stmt->bind_param("sd", $type, $price);
    $stmt->execute();
}

$rooms = mysqli_query($conn, "SELECT * FROM rooms");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Manage Rooms</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">

<h2>Manage Rooms</h2>

<h3>Add Room</h3>

<form method="POST">
    <label>Room type</label>
    <input type="text" name="type" placeholder="Room type" required>

    <label>Price</label>
    <input type="number" name="price" placeholder="Price" required>

    <button class="btn-primary" type="submit">Add</button>
</form>

<h3>Rooms</h3>

<table>
<tr>
    <th>Type</th>
    <th>Price</th>
    <th>Status</th>
</tr>

<?php while($r = mysqli_fetch_assoc($rooms)){ ?>
<tr>
    <td><?= $r['room_type'] ?></td>
    <td>$<?= $r['price'] ?></td>
    <td><?= $r['status'] ?></td>
</tr>
<?php } ?>

</table>

</div>
</body>
</html>
