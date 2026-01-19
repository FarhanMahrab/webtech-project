<?php
// controllers/ReceptionistController.php

require_once __DIR__ . '/../config/db.php';

class ReceptionistController {

    private $conn;

    public function __construct() {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'receptionist') {
            header("Location: login.php");
            exit;
        }

        $db = new Database();
        $this->conn = $db->connect();
    }

    /* ===== Receptionist Dashboard ===== */
    public function dashboard() {
        include __DIR__ . '/../views/receptionist/dashboard.php';
    }

    /* ===== View All Bookings ===== */
    public function bookings() {
        return $this->conn->query("SELECT * FROM bookings ORDER BY id DESC");
    }

    /* ===== Update Booking Status ===== */
    public function updateStatus($id, $status) {
        $sql = "UPDATE bookings SET status=? WHERE id=?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("si", $status, $id);
        return $stmt->execute();
    }
}
