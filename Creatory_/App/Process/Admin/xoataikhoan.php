<?php 
    include '../../../config/database.php';
    include '../../../Connection/connection.php';
    $id = $_POST['id_acccount'];
    $sql_xoasp = "DELETE FROM template WHERE id_taikhoan = '$id'";
    $result_xoand = mysqli_query($conn,$sql_xoasp);
    if($result_xoand){
        $sql_xoatk = "DELETE FROM taikhoan WHERE id_taikhoan = '$id'";
        $result_xoand = mysqli_query($conn,$sql_xoatk);
    }

   
?>