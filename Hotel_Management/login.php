<?php
session_start();
include "db.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Check Admin
    $q = mysqli_query($conn, "SELECT * FROM admins WHERE email='$email'");
    if($u = mysqli_fetch_assoc($q)){
        if(password_verify($password, $u["password"])){
            $_SESSION["role"] = "admin";
            $_SESSION["user_id"] = $u["id"];
            header("Location: admin-dashboard.php");
            exit;
        }
    }

    // Check Receptionist
    $q = mysqli_query($conn, "SELECT * FROM receptionists WHERE email='$email'");
    if($u = mysqli_fetch_assoc($q)){
        if(password_verify($password, $u["password"])){
            $_SESSION["role"] = "receptionist";
            $_SESSION["user_id"] = $u["id"];
            header("Location: receptionist-dashboard.php");
            exit;
        }
    }

    // Check Guest
    $q = mysqli_query($conn, "SELECT * FROM guests WHERE email='$email'");
    if($u = mysqli_fetch_assoc($q)){
        if(password_verify($password, $u["password"])){
            $_SESSION["role"] = "guest";
            $_SESSION["user_id"] = $u["id"];
            header("Location: guest-dashboard.php");
            exit;
        }
    }

    $error = "Invalid email or password";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <!-- 🔗 HERE is your external CSS -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">

<h2>Login</h2>

<?php if(isset($error)) echo "<p style='color:red'>$error</p>"; ?>

<form method="POST">
    <label>Email</label>
    <input type="email" name="email" placeholder="Email" required>

    <label>Password</label>
    <input type="password" name="password" placeholder="Password" required>

    <button class="btn-primary" type="submit">Login</button>
</form>

</div>
</body>
</html>
