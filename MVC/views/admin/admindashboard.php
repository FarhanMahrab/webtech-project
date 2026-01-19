<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/webtech_project/Hotel_Management/public/css/style.css">
</head>
<body>

<!-- ================= Admin Profile ================= -->
<div class="admin-card">
  <h2>Admin Profile</h2>

  <div class="profile-box">
    <img src="/webtech_project/Hotel_Management/public/images/admin.jpg" class="profile-img">

    <div class="profile-info">
      <p><strong>Username:</strong> Farhan</p>
      <p><strong>Email:</strong> farhan@gmail.com</p>
      <p><strong>Phone:</strong> 01834070547</p>
      <p><strong>Role:</strong> Admin</p>
      <p><strong>Address:</strong> Bashundhara, Dhaka</p>
    </div>
  </div>
</div>


<!-- ================= Edit Profile ================= -->
<div class="admin-card">
  <h2>Edit Profile</h2>

  <form class="edit-form">
    <input type="email" value="farhan@gmail.com">
    <input type="text" value="01834070547">
    <input type="text" value="Administrator">
    <input type="text" value="123456">
    <input type="text" value="Bashundhara, Dhaka">

    <button class="btn-success">Update Information</button>
  </form>
</div>


<!-- ================= User Management ================= -->
<div class="admin-card">
  <div class="top-actions">
    <a href="index.php?page=home">Home</a>
    <a href="index.php?page=add">Add User</a>
  </div>

  <h2>User Management</h2>

  <table class="admin-table">
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Email</th>
      <th>DOB</th>
      <th>Phone</th>
      <th>Gender</th>
      <th>Blood</th>
      <th>Password</th>
      <th>Actions</th>
    </tr>

    <tr>
      <td>1</td>
      <td>Swapnil</td>
      <td>swapnil@gmail.com</td>
      <td>2024-04-03</td>
      <td>1738360521</td>
      <td>Male</td>
      <td>B-</td>
      <td>1234</td>
      <td>
        <button class="action-btn update-btn">Update</button>
        <button class="action-btn delete-btn">Delete</button>
      </td>
    </tr>

       <tr>
      <td>1</td>
      <td>Farhan Mahrab</td>
      <td>farhan@gmail.com</td>
      <td>2024-04-03</td>
      <td>1738360521</td>
      <td>Male</td>
      <td>A+</td>
      <td>1234</td>
      <td>
        <button class="action-btn update-btn">Update</button>
        <button class="action-btn delete-btn">Delete</button>
      </td>
    </tr>
  </table>
</div>


<!-- ================= Staff Management ================= -->
<div class="admin-card">
<h2>Staff Management</h2>
<table class="admin-table">
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Email</th>
      <th>DOB</th>
      <th>Phone</th>
      <th>Gender</th>
      <th>Blood</th>
      <th>Password</th>
      <th>Actions</th>
    </tr>

    <tr>
      <td>1</td>
      <td>Ronaldo</td>
      <td>ronaldo@gmail.com</td>
      <td>2024-04-03</td>
      <td>1738360521</td>
      <td>Male</td>
      <td>B-</td>
      <td>1234</td>
      <td>
        <button class="action-btn update-btn">Update</button>
        <button class="action-btn delete-btn">Delete</button>
      </td>
    </tr>

       <tr>
      <td>1</td>
      <td>Messi</td>
      <td>messi@gmail.com</td>
      <td>2024-04-03</td>
      <td>1738360521</td>
      <td>Male</td>
      <td>A+</td>
      <td>1234</td>
      <td>
        <button class="action-btn update-btn">Update</button>
        <button class="action-btn delete-btn">Delete</button>
      </td>
    </tr>

      <tr>
      <td>1</td>
      <td>MBappe</td>
      <td>mbappe@gmail.com</td>
      <td>2024-04-03</td>
      <td>1738360521</td>
      <td>Male</td>
      <td>B-</td>
      <td>1234</td>
      <td>
        <button class="action-btn update-btn">Update</button>
        <button class="action-btn delete-btn">Delete</button>
      </td>
    </tr>
</table>
</div>


<!-- ================= Room Management ================= -->
<div class="admin-card">
<h2>Room Management</h2>
<table class="admin-table">
    <tr>
      <th>ID</th>
      <th>Username</th>
      <th>Email</th>
      <th>DOB</th>
      <th>Phone</th>
      <th>Gender</th>
      <th>Blood</th>
      <th>Password</th>
      <th>Actions</th>
    </tr>

    <tr>
      <td>1</td>
      <td>Salman</td>
      <td>salman@gmail.com</td>
      <td>2024-04-03</td>
      <td>1738360521</td>
      <td>Male</td>
      <td>B-</td>
      <td>1234</td>
      <td>
        <button class="action-btn update-btn">Update</button>
        <button class="action-btn delete-btn">Delete</button>
      </td>
    </tr>

       <tr>
      <td>1</td>
      <td>Katrina</td>
      <td>katrina@gmail.com</td>
      <td>2024-04-03</td>
      <td>1738360521</td>
      <td>Male</td>
      <td>A+</td>
      <td>1234</td>
      <td>
        <button class="action-btn update-btn">Update</button>
        <button class="action-btn delete-btn">Delete</button>
      </td>
    </tr>

      <tr>
      <td>1</td>
      <td>Tom</td>
      <td>tom@gmail.com</td>
      <td>2024-04-03</td>
      <td>1738360521</td>
      <td>Male</td>
      <td>B-</td>
      <td>1234</td>
      <td>
        <button class="action-btn update-btn">Update</button>
        <button class="action-btn delete-btn">Delete</button>
      </td>
    </tr>
</table>
</div>

<script src="/webtech_project/Hotel_Management/public/js/adminvalidation.js"></script>

</body>
</html>
