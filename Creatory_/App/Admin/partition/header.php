<?php 
    session_start();
    if(!isset($_SESSION['adminlogin'])){
        header('Location: dangnhap.php');
        die();
    }
    include '../../config/database.php';
    include '../../Connection/connection.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
        rel="stylesheet" 
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="../public/style.css">
    <title>Document</title>
</head>
<body>
    <!-- End Header -->
    <div class="header d-flex">
        <a href="homepage.php" class="mt-2" >   
            <img src="../../Image/LOGO-04.png" alt="home" id="logo_header">
        </a>
        <a href="quanli.php" class = "admin-manage"><i class="fas fa-user"></i> Quản lí</a>
    </div>