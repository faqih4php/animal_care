<?php 
// function get_all_user()
// {
//     include '../../../connection/connection.php';
//     $sql = "SELECT user.id, user.nama as nama_user, role.nama as role, user.username from user JOIN role ON user.role = role.id";
//     $result = $conn->query($sql);
//     return $result;
// }

function get_all_penyakit(){
    include '../../../connection/connection.php';
    $sql = "SELECT * FROM jenis_penyakit";
    $result = $conn->query($sql);
    return $result;
}

function insert_penyakit() {
    include '../../connection/connection.php';
    session_start();
    $nama = $_POST['nama'];

    $sql = "INSERT INTO jenis_penyakit VALUES (null, '$nama')";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['status'] = "success";
        $_SESSION['msg'] = "Data Berhasil Ditambahkan";
        echo "<script>location.href = '../../pages/admin/jenis_penyakit/jenis_penyakit.php';</script>";
    } else {
        $_SESSION['status'] = "error";
        $_SESSION['msg'] = "Data Gagal Ditambahkan";
        echo "<script>location.href = '../../pages/admin/jenis_penyakit/jenis_penyakit.php';</script>";
    }
}

function edit_penyakit($id) {
    include '../../connection/connection.php';
    session_start();
    $nama = $_POST['nama'];
    $sql = "UPDATE jenis_penyakit SET nama = '$nama' WHERE id = $id";
    
    if($conn->query($sql) == TRUE){
        $_SESSION['status'] = "success";
        $_SESSION['msg'] = "Data Berhasil Diubah";
        echo "<script>location.href = '../../pages/admin/jenis_penyakit/jenis_penyakit.php';</script>";
    }else{
        $_SESSION['status'] = "error";
        $_SESSION['msg'] = "Data Gagal Diubah";
        echo "<script>location.href = '../../pages/admin/jenis_penyakit/jenis_penyakit.php';</script>";
    }
}

function delete_penyakit($id){
    include '../../connection/connection.php';
    $sql = "DELETE FROM jenis_penyakit WHERE id = $id";
    $conn->query($sql);
}

if (isset($_GET['action'])) {
        
    $action = $_GET['action'];
    if ($action == 'edit') {
        $id = $_GET['id'];
        $data = edit_penyakit($id);
        header('location: ../../pages/admin/jenis_penyakit/edit_jenis.php?id=' . $data['id'] . '&nama=' . $data['nama_user']);
    } elseif ($action == 'delete') {
        $id = $_GET['id'];
        delete_penyakit($id);
        header('location: ../../pages/admin/jenis_penyakit/jenis_penyakit.php');
    }elseif ($action == 'add') {
        insert_penyakit();
    }
}  

?>