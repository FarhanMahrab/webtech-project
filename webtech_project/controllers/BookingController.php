<?php

require_once __DIR__ . '/../../config/db.php';

class BookingController {

    private $conn;

    public function __construct() {
        $this->conn = $GLOBALS['conn'];
    }

    public function saveBooking() {

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $check_in  = $_POST['check_in'];
            $check_out = $_POST['check_out'];
            $room      = $_POST['room'];

            $stmt = $this->conn->prepare(
                "INSERT INTO bookings (room_id, check_in, check_out) VALUES (?, ?, ?)"
            );
            $stmt->bind_param("iss", $room, $check_in, $check_out);
            $stmt->execute();

            echo "Booking Successful";
        }
    }
}
