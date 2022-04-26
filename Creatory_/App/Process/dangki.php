<?php
    include '../../config/database.php';
    include '../../Connection/connection.php';
    
    $ho_ten = $_POST['ho_ten'];
    $gmail = $_POST['gmail'];
    $password = $_POST['password'];
    
    $sql_checkmail = "SELECT gmail FROM taikhoan";
    $result_checkmail = mysqli_query($conn,$sql_checkmail);
    while ($row = mysqli_fetch_assoc($result_checkmail)){
        if($row['gmail'] == $gmail){
            echo 'Gmail đã được đăng kí';
            die();
        }
    }

    $sql_sigup = "INSERT INTO taikhoan(ho_ten, gmail, mat_khau) VALUES ('$ho_ten', '$gmail', '$password')";
    $result = mysqli_query($conn,$sql_sigup);
    if($result){
        echo 'đăng kí thành công';
    }else{
        echo 'đăng kí không thành công';
    }
?>