<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Booking</title>
    <link rel="stylesheet" href="/webtech_project/Hotel_Management/public/css/style.css">

</head>
<body>

<section class="booking-banner">
    <div class="banner-text">
        <h1>Online Booking</h1>
        <p>Home &gt; <span>Booking</span></p>
    </div>
</section>

<section class="booking-section">

    <h2>Booked Your Desired Room</h2>
    <p class="booking-sub">Send us a Message</p>

    <!-- No action, no reload -->
    <form method="POST" action="index.php?page=saveBooking">


        <div class="form-row">
            <div>
                <label>Check In *</label>
                <input type="date" name="checkin" required>
            </div>
            <div>
                <label>Check Out *</label>
                <input type="date" name="checkout" required>
            </div>
        </div>

        <div class="form-row">
            <div>
                <label>Name *</label>
                <input type="text" name="name" required>
            </div>
            <div>
                <label>Email *</label>
                <input type="email" name="email" required>
            </div>
        </div>

        <div class="form-row">
            <div>
                <label>Phone *</label>
                <input type="text" name="phone" required>
            </div>
            <div>
                <label>Room *</label>
                <select name="room" required>
                    <option value="">Select Room</option>
                    <option>Presidential Suite</option>
                    <option>Royal Suite</option>
                    <option>Family Room</option>
                </select>
            </div>
        </div>

        <div class="form-row">
            <div>
                <label>Room Quantity *</label>
                <input type="number" name="quantity" value="1" min="1">
            </div>
            <div>
                <label>Adults *</label>
                <input type="number" name="adults" value="2" min="1">
            </div>
        </div>

        <div class="form-row">
            <div>
                <label>Kids</label>
                <input type="number" name="kids" value="0" min="0">
            </div>
            <div>
                <label>Guest Type *</label>
                <select name="guest_type" required>
                    <option value="">Select</option>
                    <option>Local</option>
                    <option>Foreign</option>
                </select>
            </div>
        </div>

        <button type="submit" class="book-btn">Book</button>

        <!-- Message area -->
        <p id="msg"></p>

    </form>

</section>

<script src="/webtech_project/Hotel_Management/public/js/booking.js"></script>
</body>
</html>
