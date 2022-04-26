<?php
    $name = $_POST['tenmau'];
    $details = $_POST['mota'];
    $link = $_POST['link'];
    $id_template = $_POST['id'];
    $image = basename($_FILES["imagetemplate"]["name"]);
    $target_dir = "../../uploads/";
    $target_file = $target_dir.$image;
    move_uploaded_file($_FILES["imagetemplate"]["tmp_name"], $target_file);

     include '../../../config/database.php';
     include '../../../Connection/connection.php';
    if($image != ''){
        $update_temp= "UPDATE template SET ten_template = '$name' , mo_ta = '$details', link = '$link', anh = '$image' WHERE id_template = '$id_template'";
        $result = mysqli_query($conn,$update_temp);
        if($result > 0){
           header("location: ../../Admin/chinhsuatemp.php?id=$id_template&inf=Chỉnh sửa template thành công");
        }else{
            echo 'Chỉnh sửathất bại';
        }
    }else{
        $update_temp= "UPDATE template SET ten_template = '$name' , mo_ta = '$details', link = '$link' WHERE id_template = '$id_template'";
        $result = mysqli_query($conn,$update_temp);
        if($result > 0){
            header("location: ../../Admin/chinhsuatemp.php?id=$id_template&inf=Chỉnh sửa template thành công");
        }else{
            echo 'thất bại';
        }
    }
   

?>