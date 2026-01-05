<?php
include "db.php";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $name  = $_POST["name"];
    $email = $_POST["email"];
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $role = $_POST["role"];

    // Decide which table to use
    if($role == "admin"){
        $stmt = $conn->prepare("INSERT INTO admins(name,email,password) VALUES(?,?,?)");
    }
    elseif($role == "receptionist"){
        $stmt = $conn->prepare("INSERT INTO receptionists(name,email,password) VALUES(?,?,?)");
    }
    else{
        $stmt = $conn->prepare("INSERT INTO guests(name,email,password) VALUES(?,?,?)");
    }

    $stmt->bind_param("sss", $name, $email, $password);
    $stmt->execute();

    $success = "User registered successfully!";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Register</title>

    <!-- external css -->
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">

<h2>Register User</h2>

<?php if(isset($success)) echo "<p style='color:green'>$success</p>"; ?>

<form method="POST">

    <label>Name</label>
    <input type="text" name="name" placeholder="Name" required>

    <label>Email</label>
    <input type="email" name="email" placeholder="Email" required>

    <label>Password</label>
    <input type="password" name="password" placeholder="Password" required>

    

    <button class="btn-primary" type="submit">Register</button>
</form>

</div>
</body>
</html>
