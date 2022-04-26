<?php 
    include "./partition/headerql.php";
?>
    <div class="recent-grid">
        <div class="project">
            <div class="card">
            <h1 class="text-center">Quản lí template</h1>
            <div class="card-header">
                </div>
                <div class="box">
                    <div class="container-1">
                        <form action="" method = "post">
                            <span class="icon"><i class="fa fa-search"></i></span>
                            <input type="search" id="search" placeholder="<?php 
                                if(isset($_POST['keysearch'])){
                                    echo  $_POST['keysearch'];
                                }
                            ?>" name = "keysearch"/>
                        </form>
                    </div>
                </div>                
                <div class="card-body">
                    <div class="table-responsive">
                        <table width="100%">
                            <thead>
                                <tr>
                                    <td>ID</td>
                                    <td>Tên</td>
                                    <td>Mô tả</td>
                                    <td>Link</td>
                                    <td>Sửa</td>
                                    <td>Xóa</td>
                                </tr>
                            </thead>
                            <tbody class="thaythe">
                                    <?php
                                    $where = " ";
                                    if(isset($_POST['keysearch'])){
                                        $value = $_POST['keysearch'];
                                        $where = "WHERE ten_template LIKE '%${value}%'";
                                        if($_POST['keysearch'] == " "){
                                            $where = " ";
                                        }
                                    }
                                    
                                    $sql = "SELECT * FROM template ${where}";
                                    $result = mysqli_query($conn, $sql);
                                    if(mysqli_num_rows($result) > 0){
                                        while($row = mysqli_fetch_assoc($result)){
                                            ?>
                                            <tr>
                                                <td><?php echo $row['id_template'];?></td>
                                                <td><?php echo $row['ten_template'];?></td>
                                                <td><?php echo $row['mo_ta'];?></td>
                                                <td><?php echo $row['link'];?></td>
                                                <td><a href="chinhsuatemp.php?id=<?php echo $row['id_template']; ?>"> <i class="fal fa-user-edit"></i></a></td>
                                                <input type="hidden" value="<?php echo $row['id_template'] ?>" id="xoa_id_temp">
                                                <td><a href="#" class = "edittableuser delete deletetemp"><i class="fal fa-trash-alt"></a></td>
                                            </tr>
                                            <?php
                                        }   
                                    }else{
                                        echo 'không tìm thấy kết quả';
                                    }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
    include "./partition/footerql.php";
?>