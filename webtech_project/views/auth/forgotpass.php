<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Forgot Password</title>
  <link rel="stylesheet" href="/webtech_project/Hotel_Management/public/css/style.css">

</head>

<body>
<div class="container">

<h2>Forgot Password</h2>

<p>Enter your email and we’ll send reset instructions.</p>

<form method="POST" onsubmit="return validateForgotPassword();">

    <label>Email</label>
    <input type="email" id="email" name="email" required>
    

    <button type="submit" class="btn-primary">Send Reset Link</button>

</form>

<script src="/Motel_Management/public/js/booking.js"></script>


<p>
Remembered it?  
<a href="login-frontend.php">Back to login</a>
</p>

</div>
</body>
</html>
