<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Receptionist Dashboard</title>
  <link rel="stylesheet" href="/webtech_project/Hotel_Management/public/css/style.css">

</head>
<body>

<header>
    <div class="logo">Receptionist Dashboard</div>
    <nav>
        <a href="homepage.php">Home</a>
        <a href="logout.php">Logout</a>
    </nav>
</header>

<!-- ================= RECEPTIONIST PROFILE ================= -->
<div class="container">
    <h2>My Profile</h2>

    <p><strong>Name:</strong> Ronaldo </p>
    <p><strong>Email:</strong> ronaldo@noorwatch.com</p>
    <p><strong>Phone:</strong> 018XXXXXXXX</p>
    <p><strong>Role:</strong> Receptionist</p>
</div>

<!-- ================= GUEST BOOKINGS ================= -->
<div class="container">
    <h2>Guest Booking Details</h2>

    <table>
        <tr>
            <th>Booking ID</th>
            <th>Guest Name</th>
            <th>Room Type</th>
            <th>Check In</th>
            <th>Check Out</th>
            <th>Status</th>
            <th>Action</th>
        </tr>

        <tr>
            <td>BK101</td>
            <td>Farhan Mahrab</td>
            <td>Deluxe Sea View</td>
            <td>2026-02-10</td>
            <td>2026-02-14</td>
            <td>Pending</td>
            <td>
                <button class="btn-success">Confirm</button>
                <button class="btn-danger">Cancel</button>
            </td>
        </tr>

        <tr>
            <td>BK102</td>
            <td>SWapnil</td>
            <td>Family Connecting</td>
            <td>2026-03-01</td>
            <td>2026-03-05</td>
            <td>Confirmed</td>
            <td>
                <button class="btn-danger">Cancel</button>
            </td>
        </tr>
    </table>
</div>

<!-- ================= CHECK-IN / CHECK-OUT ================= -->
<div class="container">
    <h2>Check-In / Check-Out</h2>

    <form>
        <label>Booking ID</label>
        <input type="text" placeholder="Enter booking ID">

        <label>Guest Name</label>
        <input type="text" placeholder="Guest name">

        <label>Action</label>
        <select>
            <option>Check In</option>
            <option>Check Out</option>
        </select>

        <button class="btn-primary">Submit</button>
    </form>
</div>

<footer>
    © 2026 Noorwatch Hotel Management System
</footer>

</body>
</html>
