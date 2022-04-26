<?php
    
    $text_timkiem = '';
    include './partition/header.php';
    if(isset($_POST['tim_kiem'])){
        // $text_timkiem = $_POST['tim_kiem'];
        $_SESSION['timkiem'] = $_POST['tim_kiem'];
    }
    if(isset($_SESSION['timkiem'])){
        $text_timkiem = $_SESSION['timkiem'];
    }
    include './partition/timkiem.php';
    
    
    
?>
    <div class="container">
        <div class="row row-cols-1 row-cols-md-3 g-4 mt-5">
            <?php
                $sql_tem = "SELECT * FROM template WHERE ten_template LIKE '%$text_timkiem%'";
                $result_tem = mysqli_query($conn,$sql_tem);
                if(mysqli_num_rows($result_tem) > 0){
                    while($row = mysqli_fetch_array($result_tem)){
                        ?>
                        <div class="col">
                            <div class="card p-4">
                                <img src="../uploads/<?php echo $row['anh']; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title text-center"><?php echo $row['ten_template'] ?></h5>
                                    <a href="chitiet.php?id_tk=<?php echo $row['id_template'];?>"><p class="card-text text-center"><b>Xem chi tiết</b> </p></a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }else{
                    ?>
                    </div>
                        <h3 class="text-center mt-5 mb-5"><b>không tìm thấy kết quả tìm kiếm : <?php echo $text_timkiem ?></b></h3>
                        <div class="row mb-5"></div>
                        <div class="row mb-5"></div>
                    <?php
                }
            ?>
        
        </div>
    </div>

<?php 
    include './partition/footer.php';
?>