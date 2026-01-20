<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Register</title>
  <link rel="stylesheet" href="/webtech_project/Hotel_Management/public/css/style.css">

</head>

<body>
<div class="container">

<h2>Create Account</h2>

<form method="POST" onsubmit="return validateRegistration();">

    <label>Name</label>
    <input type="text" id="name" name="name" required>

    <label>Email</label>
    <input type="email" id="email" name="email" required>

    <label>Phone</label>
    <input type="text" id="phone" name="phone" required>

    <label>Password</label>
    <input type="password" id="password" name="password" required>

    <label>Confirm Password</label>
    <input type="password" id="confirm_password" required>

    <button type="submit" class="btn-primary">Register</button>

</form>

<script src="registration.js"></script>


<p>
Already have an account?  
<a href="index.php?page=login">Login</a>
</p>
<p style="margin-top:10px;">
        <a href="index.php?page=home">Back to Home</a>
    </p>
</div>

</body>
</html>
