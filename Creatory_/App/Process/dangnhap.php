<?php
    include '../../config/database.php';
    include '../../Connection/connection.php';
    session_start();
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];
    
    $sql_checkmail = "SELECT * FROM taikhoan";
    $result_checkmail = mysqli_query($conn,$sql_checkmail);
    while ($row = mysqli_fetch_assoc($result_checkmail)){
        if($row['gmail'] == $gmail && $row['mat_khau'] == $password){
            echo 'đăng nhập thành công';
            $_SESSION['userlogin'] = $row['id_taikhoan'];
            die();
        }
    }

    echo 'đăng nhập thất bại';
?>