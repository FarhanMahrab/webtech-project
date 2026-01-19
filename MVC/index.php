<?php
session_start();

require_once "config/db.php";

$page = $_GET['page'] ?? 'home';

switch ($page) {

    /* ===== STATIC PAGES ===== */
    case 'home':
        require "app/views/static/homepage.php";
        break;

    case 'about':
        require "app/views/static/about.php";
        break;

    case 'contact':
        require "app/views/static/contact.php";
        break;

    case 'policy':
        require "app/views/static/policies.php";
        break;

    /* ===== AUTH ===== */
    case 'login':
        require "app/controllers/AuthController.php";
        $auth = new AuthController();
        require "app/views/auth/login.php";
        break;

    case 'register':
        require "app/views/auth/register.php";
        break;

    /* ===== GUEST ===== */
    case 'booking':
        require "app/views/guest/booking.php";
        break;

    case 'guest':
        require "app/views/guest/dashboard.php";
        break;

    /* ===== ADMIN ===== */
    case 'admin':
        require "app/views/admin/admindashboard.php";
        break;
    
    case 'add':
        require "app/views/static/addUser.php";
        break;
    
    default:
        echo "<h2>404 - Page Not Found</h2>";
}
