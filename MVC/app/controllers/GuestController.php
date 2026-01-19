<?php
// controllers/GuestController.php

require_once __DIR__ . '/../config/db.php';

class GuestController {

    private $conn;

    public function __construct() {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'guest') {
            header("Location: login.php");
            exit;
        }

        $db = new Database();
        $this->conn = $db->connect();
    }

    /* ===== Guest Dashboard ===== */
    public function dashboard() {
        include __DIR__ . '/../views/guest/dashboard.php';
    }

    /* ===== Guest Profile ===== */
    public function profile() {
        $id = $_SESSION['user_id'];
        $result = $this->conn->query("SELECT * FROM guests WHERE id=$id");
        return $result->fetch_assoc();
    }

    /* ===== Guest Bookings ===== */
    public function bookings() {
        $id = $_SESSION['user_id'];
        $sql = "SELECT * FROM bookings WHERE guest_id=$id";
        return $this->conn->query($sql);
    }
}
