<?php
    session_start();
    if(isset($_SESSION['adminlogin'])){
        header('Location: homepage.php');
        die();
    }
    header('Location: dangnhap.php');

?>