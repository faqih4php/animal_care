<?php 
// function get_all_user()
// {
//     include '../../../connection/connection.php';
//     $sql = "SELECT user.id, user.nama as nama_user, role.nama as role, user.username from user JOIN role ON user.role = role.id";
//     $result = $conn->query($sql);
//     return $result;
// }

function get_all_dokter(){
    include '../../../connection/connection.php';
    $sql = "SELECT user.id, user.nama as nama_user, role.nama as nama_role, user.username from user JOIN role ON user.role = role.id WHERE role = 2";
    $result = $conn->query($sql);
    return $result;
}

function insert_dokter() {
    include '../../connection/connection.php';
    session_start();
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];

    $sql = "INSERT INTO user VALUES (null, '$nama', '$username', '$password', $role)";

    if ($conn->query($sql) === TRUE) {
        $_SESSION['status'] = "success";
        $_SESSION['msg'] = "Data Berhasil Ditambahkan";
        echo "<script>location.href = '../../pages/admin/dokter/dokter.php';</script>";
    } else {
        $_SESSION['status'] = "error";
        $_SESSION['msg'] = "Data Gagal Ditambahkan";
        echo "<script>location.href = '../../pages/admin/dokter/dokter.php';</script>";
    }
}

function edit_dokter($id) {
    include '../../connection/connection.php';
    session_start();
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $role = $_POST['role'];
    $sql = "UPDATE user SET nama = '$nama', username = '$username', password = '$password', role = $role WHERE id = $id";
    
    if($conn->query($sql) == TRUE){
        $_SESSION['status'] = "success";
        $_SESSION['msg'] = "Data Berhasil Diubah";
        echo "<script>location.href = '../../pages/admin/dokter/dokter.php';</script>";
    }else{
        $_SESSION['status'] = "error";
        $_SESSION['msg'] = "Data Gagal Diubah";
        echo "<script>location.href = '../../pages/admin/dokter/dokter.php';</script>";
    }
}

function delete_dokter($id){
    include '../../connection/connection.php';
    $sql = "DELETE FROM user WHERE id = $id";
    $conn->query($sql);
}

if (isset($_GET['action'])) {
        
    $action = $_GET['action'];
    if ($action == 'edit') {
        $id = $_GET['id'];
        $data = edit_dokter($id);
        header('location: ../../pages/admin/dokter/edit_dokter.php?id=' . $data['id'] . '&nama=' . $data['nama_user'] . '&role=' . $data['role'] . '&username=' . $data['username']);
    } elseif ($action == 'delete') {
        $id = $_GET['id'];
        delete_penyakit($id);
        header('location: ../../pages/admin/dokter/dokter.php');
    }elseif ($action == 'add') {
        insert_dokter();
    }
}  

?>