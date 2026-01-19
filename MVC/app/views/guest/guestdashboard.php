<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Guest Dashboard</title>
   <link rel="stylesheet" href="/webtech_project/Hotel_Management/public/css/style.css">

</head>
<body>

<header>
    <div class="logo">Guest Dashboard</div>
    <nav>
        <a href="homepage.html">Home</a>
        <a href="logout.php">Logout</a>
    </nav>
</header>

<!-- ================= GUEST PROFILE ================= -->
<div class="container">
    <h2>My Profile</h2>

    <p><strong>Name:</strong> Farhan Mahrab</p>
    <p><strong>Email:</strong> farhan@gmail.com</p>
    <p><strong>Phone:</strong> 017XXXXXXXX</p>
    <p><strong>Address:</strong> Dhaka, Bangladesh</p>
</div>

<!-- ================= EDIT PROFILE ================= -->
<div class="container">
    <h2>Edit Profile</h2>

    <form>
        <label>Name</label>
        <input type="text" value="Farhan Mahrab">

        <label>Email</label>
        <input type="email" value="farhan@gmail.com">

        <label>Phone</label>
        <input type="text" value="017XXXXXXXX">

        <label>Address</label>
        <input type="text" value="Dhaka, Bangladesh">

        <button class="btn-primary">Update Profile</button>
    </form>
</div>

<!-- ================= BOOKING DETAILS ================= -->
<div class="container">
    <h2>My Room Bookings</h2>

    <table>
        <tr>
            <th>Booking ID</th>
            <th>Room Type</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Guests</th>
            <th>Status</th>
        </tr>

        <tr>
            <td>BK001</td>
            <td>Deluxe Sea View</td>
            <td>2026-02-10</td>
            <td>2026-02-14</td>
            <td>2 Adults</td>
            <td>Confirmed</td>
        </tr>

        <tr>
            <td>BK002</td>
            <td>Family Connecting</td>
            <td>2026-03-01</td>
            <td>2026-03-05</td>
            <td>4 Guests</td>
            <td>Pending</td>
        </tr>
    </table>
</div>

<footer>
    © 2026 Noorwatch Hotel Management System
</footer>

</body>
</html>
