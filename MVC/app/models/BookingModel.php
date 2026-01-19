<?php
require_once __DIR__ . "/../../config/db.php";

function saveBooking($data) {
    global $conn;

    $sql = "INSERT INTO bookings 
    (checkin, checkout, name, email, phone, room, adults, kids, guest_type)
    VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param(
        $stmt,
        "ssssssiii",
        $data['checkin'],
        $data['checkout'],
        $data['name'],
        $data['email'],
        $data['phone'],
        $data['room'],
        $data['adults'],
        $data['kids'],
        $data['guest_type']
    );

    return mysqli_stmt_execute($stmt);
}

function getBookings() {
    global $conn;
    return mysqli_query($conn, "SELECT * FROM bookings");
}
