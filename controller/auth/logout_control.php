<?php
// Start the session
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

header('Location:/animal_care/pages/auth/sign_in.php');
?>