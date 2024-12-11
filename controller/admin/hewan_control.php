<?php 

function get_all_hewan(){
    include '../../../connection/connection.php';
    $sql = "SELECT * FROM jenis_hewan";
    $result = $conn->query($sql);
    return $result;
}

function insert_hewan() {
    include '../../connection/connection.php';
    session_start();
    $nama = $_POST['nama'];

    $sql = "INSERT INTO jenis_hewan VALUES (null, '$nama')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['status'] = "success";
        $_SESSION['msg'] = "Data Berhasil Ditambahkan";
        echo "<script>location.href = '../../pages/admin/nama_hewan/nama_hewan.php';</script>";
    } else {
        $_SESSION['status'] = "error";
        $_SESSION['msg'] = "Data Gagal Ditambahkan";
        echo "<script>location.href = '../../pages/admin/nama_hewan/nama_hewan.php';</script>";
    }
}

function edit_hewan($id) {
    include '../../connection/connection.php';
    session_start();
    $nama = $_POST['nama'];
    $sql = "UPDATE jenis_hewan SET nama = '$nama' WHERE id = $id";
    
    if($conn->query($sql) == TRUE){
        $_SESSION['status'] = "success";
        $_SESSION['msg'] = "Data Berhasil Diubah";
        echo "<script>location.href = '../../pages/admin/nama_hewan/nama_hewan.php';</script>";
    }else{
        $_SESSION['status'] = "error";
        $_SESSION['msg'] = "Data Gagal Diubah";
        echo "<script>location.href = '../../pages/admin/nama_hewan/nama_hewan.php';</script>";
    }
}

function delete_hewan($id){
    include '../../connection/connection.php';
    $sql = "DELETE FROM jenis_hewan WHERE id = $id";
    $conn->query($sql);
}

if (isset($_GET['action'])) {
        
    $action = $_GET['action'];
    if ($action == 'edit') {
        $id = $_GET['id'];
        $data = edit_hewan($id);
        header('location: ../../pages/admin/nama_hewan/edit_nama.php?id=' . $data['id'] . '&nama=' . $data['nama_user']);
    } elseif ($action == 'delete') {
        $id = $_GET['id'];
        delete_hewan($id);
        header('location: ../../pages/admin/nama_hewan/nama_hewan.php');
    }elseif ($action == 'add') {
        insert_hewan();
    }
}  

?>