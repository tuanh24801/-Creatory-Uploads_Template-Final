<?php 
    include "./partition/headerql.php";
?>
    <div class="recent-grid">
        <div class="project">
            <div class="card">
            <h1 class="text-center">Quản lí tài khoản</h1>
            <div class="card-header">
            
            <a href="themtaikhoan.php" class="addaccount">Thêm tài khoản</a>
                    <!-- <h3 class="text-center">Danh sách tài khoản người dùng</h3> -->
                    <!-- <button>See all <span class="las la-arrow-right"></span></button> -->
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
                                    <td>Họ tên</td>
                                    <td>Gmail</td>
                                    <td>Mật khẩu</td>
                                    <td>Xóa</td>
                                </tr>
                            </thead>
                            <tbody class="thaythe">
                                    <?php
                                    $where = " ";
                                    if(isset($_POST['keysearch'])){
                                        $value = $_POST['keysearch'];
                                        $where = "WHERE ho_ten LIKE '%${value}%'";
                                        if($_POST['keysearch'] == " "){
                                            $where = " ";
                                        }
                                    }
                                    
                                    $sql = "SELECT * FROM taikhoan ${where}";
                                    $result = mysqli_query($conn, $sql);
                                    if(mysqli_num_rows($result) > 0){
                                        while($row = mysqli_fetch_assoc($result)){
                                            ?>
                                            <tr>
                                                <td><?php echo $row['id_taikhoan'];?></td>
                                                <td><?php echo $row['ho_ten'];?></td>
                                                <td><?php echo $row['gmail'];?></td>
                                                <td>         
                                                <?php echo $row['mat_khau'];?>
                                                </td>
                                                <input type="hidden" value="<?php echo $row['id_taikhoan'] ?>" id="xoa_id">
                                                <td><a href="#" class = "edittableuser delete1 deleteaccount" id="deleteaccount"> <i class="fal fa-trash-alt"></a></td>
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