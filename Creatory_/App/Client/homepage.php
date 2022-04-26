<?php 
    include './partition/header.php';
    include './partition/timkiem.php';
    unset($_SESSION['timkiem']);
?>
    <!-- Start Content -->
    <div class="container">
        <h3 class="text-center mt-4 mb-5"><b>Mẫu mới nhất</b></h3>
        <!-- Start Template -->
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <?php 
                $sql_tem = "SELECT * FROM template ORDER BY id_template DESC LIMIT 3";
                $result_tem = mysqli_query($conn,$sql_tem);
                if(mysqli_num_rows($result_tem) > 0){
                    while($row = mysqli_fetch_array($result_tem)){
                        ?>
                        <div class="col">
                            <div class="card p-4">
                                <img src="../uploads/<?php echo $row['anh']; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?php echo $row['ten_template'] ?></h5>
                                    <a href="chitiet.php?id=<?php echo $row['id_template'];?>"><p class="card-text text-center"><b>Xem chi tiết</b> </p></a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }else{
                    ?>
                        <h5 class="text-center"></h5>
                        <h5 class="text-center"><b>Hiện chưa có sản phẩm nào</b></h5>
                    <?php
                }
            ?>
        </div>
    
        <h3 class="text-center mt-4 mb-5"><b>Mẫu Phổ Biến</b></h3>
        <div class="mauphobienhienthithem">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php
                    $sql_tem = "SELECT * FROM template LIMIT 3";
                    $result_tem = mysqli_query($conn,$sql_tem);
                    if(mysqli_num_rows($result_tem) > 0){
                        while($row = mysqli_fetch_array($result_tem)){
                            ?>
                            <div class="col">
                                <div class="card p-4">
                                    <img src="../uploads/<?php echo $row['anh']; ?>" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title text-center"><?php echo $row['ten_template'] ?></h5>
                                        <a href="chitiet.php?id=<?php echo $row['id_template'];?>"><p class="card-text text-center"><b>Xem chi tiết</b> </p></a>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                    }else{
                        ?>
                            <h5 class="text-center"></h5>
                            <h5 class="text-center"><b>Hiện chưa có sản phẩm nào</b></h5>
                        <?php
                    }
                ?>
            </div>
           
        </div>
        <p class="text-center mt-5 mb-5 " id = "xemthem-homepage"><a href="javascript:void(0);" ><b>Xem thêm</b> </a></p>
        <p class="text-center mt-5 mb-5 anbot-homepage" id = "anbot-homepage"><a href="javascript:void(0);" ><b>Ẩn bớt</b> </a></p>
        
    </div>
    <!-- End Content -->
    </div>
<?php 
    include './partition/footer.php';
?>