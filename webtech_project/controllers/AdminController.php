<?php
// controllers/AdminController.php

require_once __DIR__ . '/../config/db.php';

class AdminController {

    private $conn;

    public function __construct() {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'admin') {
            header("Location: login.php");
            exit;
        }

        $db = new Database();
        $this->conn = $db->connect();
    }

    /* ===== Admin Dashboard ===== */
    public function dashboard() {
        include __DIR__ . '/../views/admin/dashboard.php';
    }

    /* ===== Admin Profile ===== */
    public function profile() {
        $id = $_SESSION['user_id'];
        $query = $this->conn->query("SELECT * FROM admins WHERE id=$id");
        return $query->fetch_assoc();
    }

    /* ===== Add User ===== */
    public function addUser($data) {
        $sql = "INSERT INTO guests (name,email,password,phone)
                VALUES (?,?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            "ssss",
            $data['name'],
            $data['email'],
            password_hash($data['password'], PASSWORD_DEFAULT),
            $data['phone']
        );
        return $stmt->execute();
    }

    /* ===== Delete User ===== */
    public function deleteUser($id) {
        return $this->conn->query("DELETE FROM guests WHERE id=$id");
    }

    /* ===== Add Room ===== */
    public function addRoom($data) {
        $sql = "INSERT INTO rooms (room_type, bed_type, price)
                VALUES (?,?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param(
            "ssi",
            $data['room_type'],
            $data['bed_type'],
            $data['price']
        );
        return $stmt->execute();
    }
}
