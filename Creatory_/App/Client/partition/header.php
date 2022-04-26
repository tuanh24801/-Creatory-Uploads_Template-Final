<?php 
    session_start();
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
        <div class="someTab">
            <a href="FAQs.php" class="tab me-5"> FAQs</a>
            <a href="guimau.php" class="tab me-5"> Gửi mẫu</a>
        </div>
        
        <!-- responsive content menu -->
        <div class="dropdown respon-menutop">
            <button class="btn-respon-menutop dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Menu
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                <li><a class="dropdown-item" href="../some_tab/FAQs/FAQs.html"><b>FAQs</b></a></li>
                <li><a class="dropdown-item" href="guimau.php"><b>Gửi mẫu</b></a></li>
            </ul>
        </div>
        <?php 
            if(isset($_SESSION['userlogin'])){
                $id_taikhoan = $_SESSION['userlogin'];
                $sql = "SELECT * FROM taikhoan WHERE id_taikhoan = '$id_taikhoan' ";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_assoc($result);
                
            }
        ?>
         <!-- respon -->
        <div class="dk_dn">
            <?php 
               if(isset($_SESSION['userlogin'])){
                   ?>
                        <a href="javascript:void(0);" class = "user-login"><i class="fas fa-user"></i> <?php echo $row['ho_ten'];?></a>
                        <a href="dangxuat.php" class = ""><i class="fa-solid fa-power-off"></i> Đăng xuất</a>
                   <?php
               }else{
                   ?>
                        <a href="javascript:void(0);" class = "user user-login btnloginactive sign-up-btn"><i class="fas fa-user"></i> Đăng kí</a>
                        <a href="javascript:void(0);" class = "user user-login btnloginactive"><i class="fas fa-user"></i> Đăng nhập</a>
                   <?php
               }
            ?>
            
        </div>
         <!-- responsive user -->
        <div class="dropdown respon-menutop-user">
            <button class="dropdown-toggle respon-contentuser dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user" style="font-size: 17px; color: white;"></i>
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                <?php 
                    if(isset($_SESSION['userlogin'])){
                        ?>
                            <li><a class="dropdown-item" href="javascript:void(0);" ><i class="fas fa-user"></i> <?php echo $row['ho_ten'];?></a></li>
                            <li><a class="dropdown-item" href="dangxuat.php"><i class="fa-solid fa-power-off"></i> Đăng xuất</a></li>
                        <?php
                    }else{
                        ?>
                            <li><a class="dropdown-item user user-login btnloginactive sign-up-btn" href="javascript:void(0);" >Đăng kí</a></li>
                            <li><a class="dropdown-item user user-login btnloginactive" href="javascript:void(0);">Đăng nhập</a></li>
                        <?php
                    }
                ?>
            </ul>
        </div>
        <!-- responsive user -->
    
        
    </div>
    
<!-- FORM -->

<div class="form">
      <!-- login -->
      <div class="login-form">
        <!-- cancel btn -->
        <a href="javascript:void(0);" class="form-cancel">
          <i class="fas fa-times"></i>
        </a>
        <strong>Đăng nhập</strong>
        <p id="note-if-login"></p>
        <!-- <form method="post" action = "../process/dangnhap.php"> -->
        <form>
            <input type="email" placeholder="Email đăng kí" name = "email" id="emaillogin" >
            <input type="password" placeholder="Mật khẩu" name = "password" id="passlogin">
            <!-- submit btn -->
            <!-- <input type = "submit" value="Sign in" class = "btn btnsignin"> -->

            <input value="Đăng nhập" class = "btn btnsignin" id="btnsignin">

            <!-- <a href="#" class="login btn btn-success">login</a> -->
        </form>
        <!-- forget and sign up btn -->
        <div class="form-btns">
          <a href="#" class="forget"></a>
          <a href="javascript:void(0);" class="sign-up-btn">Đăng kí tài khoản</a>
        </div>
      </div>
      <!-- sign up -->
      <div class="sign-up-form">
        <!-- cancel btn -->
        <a href="javascript:void(0);" class="form-cancel">
          <i class="fas fa-times"></i>
        </a>
        
        <strong>Đăng kí</strong>
       
        <p id="note-if-signup"></p>
        <form>
            <input type="text" placeholder="Tên người dùng" name = "username" id="username">
            <input type="email" placeholder="Email đăng kí" name = "gmail" id="gmail" >
            <input type="password" placeholder="Mật khẩu" name = "password" id="password">
            <!-- submit btn -->
            <input value="Đăng kí" class = "btn btnsignup" id="btnsignup">
        </form>
        <!-- forget and sign up btn -->
        <div class="form-btns">
          <a href="javascript:void(0);" class="already-account">Bạn đã có tài khoản ?</a>
          <a href="javascript:void(0);" class="already-account sign-in-btn">Đăng nhập</a>

        </div>
      </div>
    </div>
<!-- FORM -->

   