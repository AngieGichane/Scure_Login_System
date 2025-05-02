<?php
// Start the session to access session data
session_start();

// Destroy the session
session_unset();
session_destroy();

// Redirect to login page
header('Location: login.php');
exit;
?>