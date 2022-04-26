<?php 
    session_start();
    $taikhoan = $_POST['taikhoan'];
    $matkhau = $_POST['matkhau'];
    if($taikhoan == "admincreatory@gmail.com" && $matkhau == "admin"){
        $_SESSION['adminlogin'] = "admin";
        header("Location: ../../Admin/index.php");
    }else{
        header("Location: ../../Admin/dangnhap.php?inf=Đăng nhập thất bại");
    }

?>