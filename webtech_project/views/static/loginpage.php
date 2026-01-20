<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="/webtech_project/Hotel_Management/public/css/style.css">

</head>

<body>
<div class="container">

<h2>Login</h2>

<form method="POST" action="login.php">
  <label>Email</label>
  <input type="email" name="email" placeholder="Email" required>

  <label>Password</label>
  <input type="password" name="password" placeholder="Password" required>

  <a href="admindashboard.php" button class="btn-primary" type="submit">Login</button>
</form>

<p>
  <a href="forgotpassword.php">Forgot password?</a><br>
  Don’t have an account?
  <a href="registration.php">Register</a>
</p>

</div>
</body>
</html>
