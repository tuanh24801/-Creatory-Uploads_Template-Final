<?php 
    include "./partition/headerql.php";
    if(isset($_GET["id"])){
        $id_temp = $_GET["id"];
    }
    $sql_temp = "SELECT * FROM template WHERE id_template = '$id_temp'";
    $result_temp = mysqli_query($conn,$sql_temp);
    $row = mysqli_fetch_assoc($result_temp);
?>
    <div class="container p-4">
        <a href="quanlitemplate.php" class="backhompageadmin">Trở lại</a>
        <h3 class="title text-center">Chỉnh sửa template</h3>
        <p class="inf text-center mt-2">
            <?php 
                if(isset($_GET["inf"])){
                    echo $_GET["inf"];
                }
            ?>
        </p>
        <div class="row mt-5">
            <div class="formaddacc">
                <form action="../Process/Admin/suatemplate.php" enctype="multipart/form-data" method="post">
                    <label for="fname">Tên mẫu  </label>
                    <input type="text" class="nametemp"  placeholder="tên template" name="tenmau" value = "<?php echo $row['ten_template']; ?>">
                    <p for="" class = "namenotiferror notiferror"></p>
                    

                    <label for="lname">Mô tả</label>
                    <input type="text" class="detailtemp"  placeholder="Mô tả" name="mota" value = "<?php echo $row['mo_ta']; ?>">
                    <p for="" class = "emailnotiferror notiferror"></p>

                    <label for="lname">Link</label>
                    <input type="text" class="linktemp" placeholder="Link template" name="link" value = "<?php echo $row['link']; ?>">
                    <p for="" class = "passnotiferror notiferror"></p>

                    <label for="lname">Ảnh mẫu</label>
                    <input type="file" style="border: none; border-radius: 12px" name="imagetemplate">
                    <p for="" class = "passnotiferror notiferror"></p>
                    <input type="hidden" name = "id" value = "<?php echo $row['id_template']; ?>">

                    <div class="text-center">
                        <button type="submit" class="btnsubmit text-center" id="chinhsuatemp">Lưu chỉnh sửa</button>
                        <p for="" class = "submitnotiferror "></p>
                    </div>
                </form>
            </div>
        </div>
        
    </div>
<?php 
    include "./partition/footerql.php";
?>