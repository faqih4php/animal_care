<?php 
include '../../connection/connection.php';
 // get data from formnya
 $nama = $_POST['nama'];
 $username = $_POST['username'];
 $password = $_POST['password'];

 // make enskripsi password
 $password = password_hash($password, PASSWORD_DEFAULT);
 
 // action for insert data to database
 $sql = "INSERT INTO user VALUES (null, '$nama', '$username', '$password', 3)";

 if($conn->query($sql) == true){
     echo "<script>alert('Register Succes');</script>";
     echo "<script>location.href = '../../pages/auth/sign_in.php';</script>";
 }else {
     echo "<script>alert('Register Failed');</script>";
     echo "<script>location.href = '../../pages/auth/sign_up.php';</script>";
 }

?>