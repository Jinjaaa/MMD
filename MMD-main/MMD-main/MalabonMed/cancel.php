<?php
session_start();

// Clear all session variables
session_unset();

// Optionally, you can destroy the session if you want to completely remove it
// session_destroy();

// Redirect to a confirmation page or back to the main page
header("Location: reservation.php"); // Change 'index.php' to your desired page
exit();
?>