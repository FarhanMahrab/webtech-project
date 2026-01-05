<?php
session_start();
if($_SESSION["role"] == "guest") die("Access denied");

include "db.php";

/* --------- APPROVE / CANCEL --------- */
if(isset($_GET["approve"])){
    $id = $_GET["approve"];
    $stmt = $conn->prepare("UPDATE bookings SET status='confirmed' WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

if(isset($_GET["cancel"])){
    $id = $_GET["cancel"];
    $stmt = $conn->prepare("UPDATE bookings SET status='cancelled' WHERE id=?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
}

/* --------- LOAD BOOKINGS --------- */
$bookings = $conn->query("
SELECT b.id, u.name, r.room_type, b.status
FROM bookings b
JOIN users u ON b.user_id = u.id
JOIN rooms r ON b.room_id = r.id
");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Manage Bookings</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">

<h2>Bookings</h2>

<table>
<tr>
    <th>Guest</th>
    <th>Room</th>
    <th>Status</th>
    <th>Action</th>
</tr>

<?php while($b = $bookings->fetch_assoc()){ ?>
<tr>
    <td><?= $b['name'] ?></td>
    <td><?= $b['room_type'] ?></td>
    <td><?= $b['status'] ?></td>

    <td>
        <a class="btn-success" href="?approve=<?= $b['id'] ?>">Approve</a>
        <a class="btn-danger" href="?cancel=<?= $b['id'] ?>">Cancel</a>
    </td>
</tr>
<?php } ?>

</table>

</div>
</body>
</html>
