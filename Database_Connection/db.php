<?php

$host = "localhost";
$user = "root";
$pass = "";
$db   = "hotel_system";

$conn = mysqli_connect($host, $user, $pass);

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

/* Create database if not exists */
mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS $db");
mysqli_select_db($conn, $db);

/* USERS TABLES (roles separated like your login system) */

mysqli_query($conn, "
CREATE TABLE IF NOT EXISTS admins(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
)
");

mysqli_query($conn, "
CREATE TABLE IF NOT EXISTS receptionists(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
)
");

mysqli_query($conn, "
CREATE TABLE IF NOT EXISTS guests(
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
)
");

/* ROOMS TABLE */

mysqli_query($conn, "
CREATE TABLE IF NOT EXISTS rooms(
    id INT AUTO_INCREMENT PRIMARY KEY,
    room_type VARCHAR(100),
    price DECIMAL(10,2),
    status VARCHAR(20) DEFAULT 'available'
)
");

/* BOOKINGS TABLE */

mysqli_query($conn, "
CREATE TABLE IF NOT EXISTS bookings(
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT,
    room_id INT,
    check_in DATE,
    check_out DATE,
    status VARCHAR(20) DEFAULT 'pending',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)
");

?>
