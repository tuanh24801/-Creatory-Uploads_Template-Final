<?php 
    include './partition/header.php';
    if(isset($_GET['id'])){
        $id_temp = $_GET['id'];
    }
    if(isset($_GET['id_tk'])){
        $id_temp = $_GET['id_tk'];
    }
    $sql_temp = "SELECT * FROM template WHERE id_template = '$id_temp'";
    $result_temp = mysqli_query($conn, $sql_temp);
    $row = mysqli_fetch_assoc($result_temp);
    
?>
    <div class="container">
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <?php 
           if(isset($_GET['id'])){
                ?>
                    <a href="homepage.php" class="btn btn-outline-success">trở lại</a>
                <?php
            }
            if(isset($_GET['id_tk'])){
                ?>
                    <a href="timkiem.php" class="btn btn-outline-success">trở lại</a>
                <?php
            }
        ?>
        <div class="mt-5 mb-5 p-5">
            <div class="card mb-3" style="with: 100%;">
                <div class="row g-0">
                    <div class="col-md-6">
                        <img src="../uploads/<?php echo $row['anh']; ?>" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-1"></div>
                    <div class="col-md-5">
                        <div class="card-body">
                            <h2 class="card-title"><b> <?php echo $row['ten_template']; ?></b></h2>
                            <p class="card-text">Mô tả: </br> <?php echo $row['mo_ta']; ?></p>
                            <p class="card-text"><b>Link google drive:</b>  </br><?php echo $row['link']; ?></p>

                            <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="comment">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label"><b>Đánh giá</b></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                <input type="submit" class="btn btn-primary mt-4">
            </div>
        </div>
    </div>

<?php

    include './partition/footer.php';
?>