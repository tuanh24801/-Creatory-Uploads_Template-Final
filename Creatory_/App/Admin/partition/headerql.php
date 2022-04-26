
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
    <!--<meta http-equiv="X-UA-Compatible" content="IE=edge">-->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <title>Admin-Creatory</title>
    <link rel="stylesheet" href="../public/styleAd.css">
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" 
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" 
        crossorigin="anonymous"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
    <input type="checkbox" id="nav-toggle">
    <div class="sidebar">
        <div class="sidebar-brand">
            <h2><span class="lab la-accusoft"></span> <span>ADMIN</span> </h2>
        </div>
        <div class="sidebar-menu">
            <ul>
                <li>
                    <a href="quanli.php" class="active"><span class="las la-igloo"></span>
                        <span>Quản lí tài khoản</span></a>
                </li>
                <li>
                    <a href="quanlitemplate.php" class="active"><span class="las la-igloo"></span>
                        <span>Quản lí Template</span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-content">
        <header>
            <h2>
                <label for="nav-toggle">
                    <span class="las la-bars"></span>
                </label>
                <label for="nav-toggle">
                   <a href="homepage.php">Trang chủ</a>
                </label>
            </h2>
            <div class="user-wrapper">
                <img src="../../Image/logo_admin.png" width="40px" height="40px" alt="">
                <div>
                    <h4>Admin Creatory</h4>
                    <small>Admin</small>
                </div>
            </div>
        </header>
        <main>