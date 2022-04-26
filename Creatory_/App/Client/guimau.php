<?php 
    include './partition/header.php';
    include './partition/timkiem.php';

?>
<?php 
    if(!isset($_SESSION['userlogin'])){
       ?>
        <div class="container">
            <h3 class="text-center mt-5 mb-5"><b>Vui lòng đăng nhập để thực hiện chức năng này</b> </h3>
            <div class="row mt-5"></div>
            <div class="row mt-5"></div>
            <div class="row mt-5"></div>
        </div>
       <?php
         include './partition/footer.php';
    }else{
?>
    <div class="container">
        <a href="homepage.php" class = "btn btn-outline-success mt-5">Trở lại</a>
        <div class="row">
        <p class = "notification text-center">
            <?php
                if(isset($_GET['notification'])){
                   echo $_GET['notification'];
                }
            ?>
        </p>
        <div class="col-1"></div>
        <div class="col-10">
            <form action="../process/guimau.php" method = "post" enctype="multipart/form-data">
               
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Tên Mẫu</label>
                    <div class="col">
                        <input type="text"  class="form-control" name="name" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Mô tả</label>
                    <div class="col">
                        <input type="text" class="form-control" name="details" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Link</label>
                    <div class="col">
                        <input type="text"  class="form-control" name="link" required>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Ảnh Mẫu</label>
                    <div class="col-4">
                        <input type="file" class="form-control" name = "imagetemplate" id="image" placeholder = "Chọn file" required>
                    </div>
                </div>
                <div class="row text-center mt-5">
                    <div class="col">
                        <input type = "submit" class = "btn btn-outline-primary" value = "Đăng Mẫu"></input>
                    </div>
                </div>

            </form>
        </div>
    </div>
    </div>
<?php
    
    include './partition/footer.php';
} 

?>