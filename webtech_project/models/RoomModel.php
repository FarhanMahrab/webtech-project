<?php
require_once __DIR__ . "/../../config/db.php";

function getAllRooms() {
    global $conn;
    return mysqli_query($conn, "SELECT * FROM rooms");
}

function addRoom($room_no, $type, $bed, $price) {
    global $conn;
    $sql = "INSERT INTO rooms VALUES (?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "issi", $room_no, $type, $bed, $price);
    return mysqli_stmt_execute($stmt);
}
