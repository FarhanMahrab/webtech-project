<?php
// forgot-process.php
session_start();
require "db.php";

$email = trim($_POST["email"] ?? "");

if ($email === "") {
  die("Email is required");
}

/* Check email exists in guests */
$stmt = $conn->prepare("SELECT id FROM guests WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$res = $stmt->get_result();

if (!$row = $res->fetch_assoc()) {
  die("No account found with this email.");
}

$user_id = (int)$row["id"];

/* Create token */
$token = bin2hex(random_bytes(16));            // token for URL (plain)
$token_hash = hash("sha256", $token);          // token saved in DB (hashed)
$expires = date("Y-m-d H:i:s", time() + 900);  // 15 minutes

/* Save in guests table */
$upd = $conn->prepare("UPDATE guests SET reset_token = ?, reset_expires = ? WHERE id = ?");
$upd->bind_param("ssi", $token_hash, $expires, $user_id);
$upd->execute();

/* Show reset link (since you are not sending email) */
echo "Reset link (copy & open): <br>";
echo "<a href='reset-password.php?token=$token'>reset-password.php?token=$token</a>";
