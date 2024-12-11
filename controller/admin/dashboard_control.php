<?php 
include '../../connection/connection.php';

$sql1 = "SELECT COUNT(*) as jumlah_dokter FROM user WHERE role = 2";
$sql2 = "SELECT COUNT(*) as jumlah_user FROM user WHERE role = 3";
$sql3 = "SELECT COUNT(*) as jenis_hewan FROM jenis_hewan";
$sql4 = "SELECT COUNT(*) as jenis_penyakit FROM jenis_penyakit";

// eksekusi query

$dokter = $conn->query($sql1);
$user = $conn->query($sql2);
$hewan = $conn->query($sql3);
$penyakit = $conn->query($sql4);

// fetch data
$data_dokter = $dokter->fetch_assoc();
$data_user = $user->fetch_assoc();
$data_hewan = $hewan->fetch_assoc();
$data_penyakit = $penyakit->fetch_assoc();

?>