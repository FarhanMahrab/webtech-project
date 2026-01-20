<?php

require_once __DIR__ . '/../../config/db.php';

class AuthController {

    private $conn;

    public function __construct() {
        $this->conn = $GLOBALS['conn']; // from db.php
    }

    public function login() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $email = $_POST['email'];
            $password = $_POST['password'];

            $stmt = $this->conn->prepare(
                "SELECT * FROM guests WHERE email=?"
            );
            $stmt->bind_param("s", $email);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($user = $result->fetch_assoc()) {
                if (password_verify($password, $user['password'])) {
                    $_SESSION['user_id'] = $user['id'];
                    $_SESSION['role'] = 'guest';
                    header("Location: index.php?page=guest");
                    exit;
                }
            }
            return "Invalid login";
        }
    }
}
