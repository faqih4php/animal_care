<?php 

session_start();

if (!isset($_SESSION['id'])) {
    header('Location:/animal_care/pages/auth/sign_in.php');
}


?>