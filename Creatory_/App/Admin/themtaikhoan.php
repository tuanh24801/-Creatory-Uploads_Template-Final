<?php 
    include "./partition/headerql.php";
?>
    <div class="container p-4">
        <a href="quanli.php" class="backhompageadmin">Trở lại</a>
        <h3 class="title text-center">Thêm tài khoản</h3>
        <p class="inf text-center"></p>

        <div class="row mt-5">
            <div class="formaddacc">
                    <label for="fname">Họ tên  </label>
                    <input type="text" class="nameinput"  placeholder="Họ tên" required>
                    <p for="" class = "namenotiferror notiferror"></p>
                    

                    <label for="lname">Gmail</label>
                    <input type="email" class="gmailinput"  placeholder="Email"  required>
                    <p for="" class = "emailnotiferror notiferror"></p>

                    <label for="lname">Mật khẩu</label>
                    <input type="password" class="passinput" placeholder="Mật khẩu" required>
                    <p for="" class = "passnotiferror notiferror"></p>

                    <div class="text-center">
                        <button class="btnsubmit text-center" id="taotaikhoan">Tạo tài khoản</button>
                        <p for="" class = "submitnotiferror "></p>
                    </div>
            </div>
        </div>
        
    </div>
<?php 
    include "./partition/footerql.php";
?>