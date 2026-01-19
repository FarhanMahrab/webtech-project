<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin | Add User</title>

    <!--  CSS -->
    <link rel="stylesheet" href="/webtech_project/Hotel_Management/public/css/style.css">

</head>
<body>

<header>
    <div class="logo">Noorwatch Admin</div>
    <nav>
        <a href="index.php?page=home">Dashboard</a>
        <a href="logout.php">Logout</a>
    </nav>
</header>

<div class="container">

    <h2>Add New User</h2>

    <!-- ADD USER FORM -->
    <form onsubmit="return validateAddUser();" method="POST" action="add_user.php">

        <label>Full Name *</label>
        <input type="text" id="user_name" name="name" placeholder="Enter full name">

        <label>Email *</label>
        <input type="email" id="user_email" name="email" placeholder="Enter email">

        <label>Phone *</label>
        <input type="text" id="user_phone" name="phone" placeholder="Enter phone number">

        <label>Password *</label>
        <input type="password" id="user_password" name="password" placeholder="Enter password">

        <label>User Role *</label>
        <select id="user_role" name="role">
            <option value="">Select Role</option>
            <option value="admin">Admin</option>
            <option value="receptionist">Receptionist</option>
            <option value="guest">Guest</option>
        </select>

        <br><br>

        <button type="submit" class="btn-success">Add User</button>
        <a href="index.php?page=admin" class="btn btn-secondary">Cancel</a>

    </form>

</div>

<!-- JS Validation -->
<script src="/webtech_project/Hotel_Management/public/js/adminvalidation.js"></script>

</body>
</html>
