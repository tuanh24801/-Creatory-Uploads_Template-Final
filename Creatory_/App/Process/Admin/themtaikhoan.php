<?php
     include '../../../config/database.php';
     include '../../../Connection/connection.php';
    $ho_ten = $_POST['hoten'];
    $gmail = $_POST['gmail'];
    $mat_khau = $_POST['matkhau'];

    $sql_checkmail = "SELECT gmail FROM taikhoan";
    $result_checkmail = mysqli_query($conn,$sql_checkmail);
    while ($row = mysqli_fetch_assoc($result_checkmail)){
        if($row['gmail'] == $gmail){
            echo 'Gmail đã được đăng kí';
            die();
        }
    }

    $sql_sigup = "INSERT INTO taikhoan(ho_ten, gmail, mat_khau) VALUES ('$ho_ten', '$gmail', '$mat_khau')";
    $result = mysqli_query($conn,$sql_sigup);
    if($result){
        echo 'thêm tài khoản thành công';
    }else{
        echo 'thêm tài khoản không thành công';
    }

?>