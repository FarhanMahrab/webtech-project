<?php
session_start();
require "db.php";

$email = trim($_POST["email"] ?? "");
$password = $_POST["password"] ?? "";

if ($email === "" || $password === "") {
  header("Location: loginpage.html?error=1");
  exit;
}

function tryLogin($conn, $table, $role, $email, $password) {
  $sql = "SELECT id, password FROM $table WHERE email = ? LIMIT 1";
  $stmt = $conn->prepare($sql);
  if (!$stmt) return false;

  $stmt->bind_param("s", $email);
  $stmt->execute();
  $res = $stmt->get_result();

  if ($row = $res->fetch_assoc()) {
    $dbPass = $row["password"];

    // ✅ Works if password is hashed
    if (password_verify($password, $dbPass)) {
      $_SESSION["user_id"] = $row["id"];
      $_SESSION["role"] = $role;
      return true;
    }

    // ✅ ALSO works if password is saved as plain text (like 12345)
    if ($password === $dbPass) {
      $_SESSION["user_id"] = $row["id"];
      $_SESSION["role"] = $role;
      return true;
    }
  }
  return false;
}

if (tryLogin($conn, "admins", "admin", $email, $password)) {
  header("Location: admin_dashboard.php");
  exit;
}
if (tryLogin($conn, "receptionists", "receptionist", $email, $password)) {
  header("Location: receptionist-dashboard.php");
  exit;
}
if (tryLogin($conn, "guests", "guest", $email, $password)) {
  header("Location: guest-dashboard.php");
  exit;
}

header("Location: loginpage.html?error=1");
exit;
