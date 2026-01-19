<?php
// session.php

// Secure session cookie settings
session_set_cookie_params([
  "lifetime" => 0,        // cookie expires when browser closes
  "path" => "/",
  "domain" => "",
  "secure" => false,      // set true if HTTPS
  "httponly" => true,     // JS cannot access cookie
  "samesite" => "Strict"  // prevents CSRF
]);

session_start();
