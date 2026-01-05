<?php
// reset-password.php
session_start();
require "db.php";

$token = $_GET["token"] ?? "";
$token = trim($token);

if ($token === "") {
  die("Token expired or invalid");
}

$token_hash = hash("sha256", $token);

/* Find matching token + not expired */
$stmt = $conn->prepare("SELECT id FROM guests WHERE reset_token = ? AND reset_expires > NOW()");
$stmt->bind_param("s", $token_hash);
$stmt->execute();
$res = $stmt->get_result();

$user = $res->fetch_assoc();
if (!$user) {
  die("Token expired or invalid");
}

/* If form submitted, update password */
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $newpass = $_POST["new_password"] ?? "";
  $newpass = trim($newpass);

  if ($newpass === "") {
    die("Password is required");
  }

  $new_hash = password_hash($newpass, PASSWORD_DEFAULT);

  $upd = $conn->prepare("UPDATE guests SET password = ?, reset_token = NULL, reset_expires = NULL WHERE id = ?");
  $upd->bind_param("si", $new_hash, $user["id"]);
  $upd->execute();

  header("Location: loginpage.html?reset=success");
  exit;
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Reset Password</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="container">
    <h2>Reset Password</h2>

    <form method="POST">
      <label>New Password</label>
      <input type="password" name="new_password" required>
      <button type="submit">Update Password</button>
    </form>
  </div>
</body>
</html>
