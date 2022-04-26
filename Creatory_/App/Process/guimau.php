<?php
    session_start();
   $name = $_POST['name'];
   $details = $_POST['details'];
   $link = $_POST['link'];
   $image = basename($_FILES["imagetemplate"]["name"]);
   $target_dir = "../uploads/";
   $target_file = $target_dir.$image;
   move_uploaded_file($_FILES["imagetemplate"]["tmp_name"], $target_file);
    // if(move_uploaded_file($_FILES["imagetemplate"]["tmp_name"], $target_file)){
    //     echo 'đăng thành công';
    // }else{
    //     echo 'đăng không thành công';
    // }
    include '../../config/database.php';
    include '../../Connection/connection.php';
    $iduser = $_SESSION['userlogin'];
    $addtemplate= "INSERT INTO template(ten_template,mo_ta,link, anh, id_taikhoan) 
                                VALUES('$name', '$details', '$link', '$image', '$iduser')";
    $result = mysqli_query($conn,$addtemplate);
    // $result = 1;
    if($result > 0){
        header('location: ../Client/guimau.php?notification=Đăng mẫu thành công');

    }
    
   


 
?>