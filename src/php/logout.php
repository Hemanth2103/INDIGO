<?php
// Start the session
session_start();

// Unset the session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to the login page or any other desired page
header("Location: ../login.html");
exit();
?>
