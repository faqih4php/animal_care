<?php 

session_start();
if (isset($_SESSION['id'])) {
    if ($_SESSION['role'] == 1) {
        header('Location:../admin/admin.php');
    } elseif ($_SESSION['role'] == 2) {
        header('Location:../dokter/dokter.php');
    }elseif ($_SESSION['role'] == 3) {
        header('Location:../user/user.php');
    }
}



?>