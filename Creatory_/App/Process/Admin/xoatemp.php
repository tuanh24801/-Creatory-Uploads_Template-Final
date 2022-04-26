<?php 
    include '../../../config/database.php';
    include '../../../Connection/connection.php';
    $id_temp = $_POST['id_temp'];
    $sql_xoasp = "DELETE FROM template WHERE id_template = '$id_temp'";
    $result_xoand = mysqli_query($conn,$sql_xoasp);
    
?>