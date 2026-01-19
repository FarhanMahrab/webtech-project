<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Contact — Hotel Noor</title>

  <link rel="stylesheet" href="/webtech_project/Hotel_Management/public/css/style.css">

</head>

<body>

<header>
  <div class="logo">Hotel Noor</div>

  <nav>
    <a href="index.php?page=homepage">Home</a>
    <a href="index.php?page=about">About</a>
    
    <a href="index.php?page=login">Login</a>
  </nav>
</header>

<div class="container">

<h2>Contact Us</h2>

<p>
Have a question, need help, or want to make a booking?  
We’d love to hear from you!
</p>

<h3>Get in Touch</h3>

<p>
📍 <strong>Address:</strong> Dhaka, Bangladesh<br>
📞 <strong>Phone:</strong> +880-123-456789<br>
✉ <strong>Email:</strong> support@hotelnoor.com
</p>

<h3>Send us a message</h3>

<form method="POST" action="#">
  <label>Your Name</label>
  <input type="text" placeholder="Enter your name" required>

  <label>Email</label>
  <input type="email" placeholder="Enter your email" required>

  <label>Message</label>
  <textarea style="width:100%; height:120px;" placeholder="Write your message here..." required></textarea>

  <button class="btn-primary" type="submit">Send Message</button>
</form>

</div>

<footer style="background:#101926; color:white; margin-top:40px;">

  <div style="display:grid; grid-template-columns:repeat(4,1fr); gap:25px; padding:40px;">

    <div>
      <h2>Hotel Noor</h2>
      <p>Your premier destination for comfort, relaxation, and great service.</p>

      <p>📧 support@hotelnoor.com</p>
      <p>📞 +880 123 456 789</p>

      <p style="margin-top:8px;">
        🌐 📘 📸 💼
      </p>
    </div>

    <div>
      <h3>Let us help you</h3>
      <p><a href="index.php?page=about" style="color:#cfd3da; text-decoration:none;">About Us</a></p>
      <p><a href="index.php?page=gallery" style="color:#cfd3da; text-decoration:none;">Photo Gallery</a></p>
      <p><a href="index.php?page=services" style="color:#cfd3da; text-decoration:none;">Accommodations</a></p>
      <p><a href="index.php?page=contact" style="color:#cfd3da; text-decoration:none;">Support</a></p>
    </div>

    <div>
      <h3>Get to know us</h3>
      <p><a href="index.php?page=contact" style="color:#cfd3da; text-decoration:none;">Contact Us</a></p>
      <p><a href="index.php?page=policies" style="color:#cfd3da; text-decoration:none;">Privacy Policy</a></p>
      <p><a href="index.php?page=policies" style="color:#cfd3da; text-decoration:none;">Terms & Conditions</a></p>
      <p><a href="#" style="color:#cfd3da; text-decoration:none;">FAQs</a></p>
    </div>

    <div>
      <h3>Address</h3>
      <p>Dhaka, Bangladesh</p>
      <p>Email: support@hotelnoor.com</p>
      <p>Hotline: +880 123 456 789</p>
    </div>

  </div>

  <div style="border-top:1px solid #2b3548; padding:12px; text-align:center; color:#aab0bd;">
    © Hotel Noor — All rights reserved — 2026
  </div>

</footer>


</body>
</html>
