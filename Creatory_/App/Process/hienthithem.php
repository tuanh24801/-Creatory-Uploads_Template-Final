<div class="row row-cols-1 row-cols-md-3 g-4">
    <?php
        include '../../config/database.php';
        include '../../Connection/connection.php';
        $sql_tem = "SELECT * FROM template";
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