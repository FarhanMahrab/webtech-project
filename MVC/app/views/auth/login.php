<!-- app/views/auth/login.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="/webtech_project/Hotel_Management/public/css/style.css">
</head>
<body>

<div class="container">
    <h2>Login</h2>

    <form method="POST" action="index.php?page=login">
        <label>Email</label>
        <input type="email" name="email" required>

        <label>Password</label>
        <input type="password" name="password" required>

        <button type="submit" class="login-btn">Login</button>
        <a href="index.php?page=register" class="register-btn">Register</a>
    </form>
</div>

<script src="/webtech_project/Hotel_Management/public/js/login.js"></script>
</body>
</html>
