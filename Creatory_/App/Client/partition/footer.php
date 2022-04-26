<!-- Start Footer -->
<div class="row footer ">
        <div class="col-xl-5 col-md-5 col-sm-12">
            <div class="row justify-content-center">
                <a href="/trang_chu/trangchu.html" >
                    <img src="../../Image/LOGO-04.png" alt="home" id="logo_footer">
                </a>
            </div>
            <ul class="nav list-icon-footer">
                <li class="nav-item">
                    <a href="https://www.facebook.com/Creatory-110965278248558" class="nav-link">
                        <i class="fa-brands fa-facebook-square"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://www.instagram.com/" class="nav-link">
                        <i class="fa-brands fa-instagram-square"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="https://www.pinterest.com/" class="nav-link">
                        <i class="fa-brands fa-pinterest-square"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-xl-3 col-md-4">
            <p class="text_footer text-white">Thông tin liên lạc</p>
            <ul class = "footer-tag">
                <li><i class="fa-solid fa-phone"></i>  0904888362</li>
                <li class="mt-2"><i class="fa-solid fa-envelope"></i>  creatory@gmail.com</li>
                <li class="mt-2"><i class="fa-solid fa-location-dot"></i>  79 Hồ Tùng Mậu, Mai Dịch, Cầu Giấy, Hà Nội</li>
                
            </ul>
        </div>
        <div class="col-xl-2 col-md-3 ">
            <p class="text_footer text-white">Liên kết nhanh</p>
            <ul class = "footer-tag">
                <li><a href="vechungtoi.php">Về chúng tôi</a></li>
                <li class="mt-2"><a href="lienhe.php">Liên hệ</a></li>
                <li class="mt-2"><a href="chinhsachbaomat.php">Chính sách bảo mật</a></li>
            </ul>
        </div>
       
        
    </div>

    
    <!-- Emd Footer --> 
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" 
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" 
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" 
        crossorigin="anonymous"></script>
    <script type="text/javascript">
      // search
      // login sign up form
      $(document).on('click', '.user,.already-account', function(){
        $('.form').addClass('login-active').removeClass('sign-up-active');
      });
      $(document).on('click', '.sign-up-btn', function(){
        $('.form').addClass('sign-up-active').removeClass('login-active')
      });
      $(document).on('click', '.form-cancel', function(){
        $('.form').removeClass('login-active').removeClass('sign-up-active')
      });
      // scroll windown
      $(window).scroll(function(){
        if($(document).scrollTop() > 50){
          $('.navigation').addClass('fix-nav');
        }else{
          $('.navigation').removeClass('fix-nav');
        }
      })
      // Responsive menu
      $(document).ready(function(){
        $('.toggle').click(function(){
          $('.toggle').toggleClass('active')
          $('.navigation').toggleClass('active')
        })
      })
    </script>
    <script src="../public/script.js"></script>
</body>
</html>