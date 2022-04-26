 <!-- Tìm kiếm -->
 <div class="content">
        <form action="timkiem.php" method="post" class="search">
            <input type="text" placeholder="Nhập thứ bạn cần tìm..." name="tim_kiem" class="data_search" value="<?php 
                 if(isset($_SESSION['timkiem'])){
                    echo $_SESSION['timkiem'];
                }
            ?>">
            <input type="submit" value="Tìm kiếm" class="click">
        </form>
        <p class="content_text"> Welcome to Creatory</p>
    </div>
<!-- End Header -->