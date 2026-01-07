<?php
// registration.php
session_start();
require "db.php";

$name = trim($_POST["name"] ?? "");
$email = trim($_POST["email"] ?? "");
$password = $_POST["password"] ?? "";

// basic validation
if ($name === "" || $email === "" || $password === "") {
  header("Location: register.html?error=1");
  exit;
}

// check db connection
if (!isset($conn) || $conn->connect_error) {
  die("DB connection failed.");
}

// email already exists?
$check = $conn->prepare("SELECT id FROM guests WHERE email = ?");
if (!$check) {
  die("Prepare failed: " . $conn->error);
}
$check->bind_param("s", $email);
$check->execute();
$checkRes = $check->get_result();

if ($checkRes && $checkRes->num_rows > 0) {
  // email already registered
  header("Location: register.html?exists=1");
  exit;
}

// hash password (this is why DB shows different text)
$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

// insert guest
$insert = $conn->prepare("INSERT INTO guests (name, email, password) VALUES (?, ?, ?)");
if (!$insert) {
  die("Prepare failed: " . $conn->error);
}
$insert->bind_param("sss", $name, $email, $hashedPassword);

if ($insert->execute()) {
  // success -> go to login page
  header("Location: loginpage.html?registered=success");
  exit;
} else {
  header("Location: register.html?error=1");
  exit;
}
