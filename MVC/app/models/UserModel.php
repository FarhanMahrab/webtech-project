<?php
require_once __DIR__ . "/../../config/db.php";

function getUserByEmail($email, $table) {
    global $conn;
    $sql = "SELECT * FROM $table WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    return mysqli_stmt_get_result($stmt);
}
