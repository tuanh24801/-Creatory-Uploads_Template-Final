<?php 
    include './partition/header.php';
?>
    <div class="container">
    <div class="row mt-5"></div>
    <div class="row mt-5"></div>
    <div class="row mt-5"></div>
        <div class="row">
        <div class="body_ve_chung_toi">
        <h2 style="text-align: center" >Giới thiệu về Creatory</h2>

        <div class="accordion">Creatory là gì?</div>
        <div class="panel">
            <p>Creatory là một website được tạo bởi các thành viên của nhóm 1, 
                lớp 2211ECIT0731 môn thiết kế và triển khai website. Tại đây người dùng có thể tìm kiếm,
                 chia sẻ, bình luận, trao đổi với nhau về những mẫu poweroint. Không những thế, chúng tôi
                  sẽ giới thiệu cho người mới cách sử dụng powerpoint, chia sẻ những trang web hữu ích giúp
                   việc thiết kế powerpoint trở nên dễ dàng hơn với tất cả mọi người
            </p>
        </div>

        <div class="accordion">Mục đích ra đời của website?</div>
        <div class="panel">
            <p>Chúng tôi mong muốn tạo ra một cộng đồng lớn mạnh giúp đỡ nhau,
                 chia sẻ tất cả về cách thiết kế, template… Từ đó giúp việc tạo những slide đẹp,
                  nhanh chóng, dễ dàng đối với tất cả mọi người. 
            </p>
        </div>
        <div class="accordion">Ai có thể sử dụng website?</div>
        <div class="panel">
            <p>Tất cả mọi người, mọi ngành nghề quan tâm, 
                mong muốn chia sẻ và lấy kiến thức làm powerpoint đều có thể tham gia vào cộng đồng 
                của chúng tôi. 
            </p>
        </div>
        <div class="accordion">Sử dụng như website như thế nào?</div>
        <div class="panel">
            <p>Nếu bạn có template hãy đăng lên https://creatory.com để quản lý template, và chia sẻ với
                 cộng đồng. 
            </p>
            <p>Nếu bạn đang cần tìm template, hãy truy cập https://creatory.com, tìm template mình cần và 
                phù hợp với nội dung, và tải về miễn phí để sử dụng.
            </p>
            <p>Bạn cũng có thể có những nhận xét cho tác giả, hoặc có những ý kiến đóng góp cho cộng đồng
                 lớn mạnh
                </p>
            <p>Hãy chia sẻ những đóng góp nhỏ, để tạo nên một cộng đồng lớn lớn.</p>
        </div>
        <div class="accordion">RECOMMENDED KNOWLEDGE</div>
        <div class="panel">
            <p>PowerPoint Tutorial
                https://edu.gcfglobal.org/en/powerpoint2010
                </p>
            <p>Google Slides Official Website
                https://www.google.com/intl/en/slides/about/
                </p>
            <p>Free High Quality Image
                https://pixabay.com/
                </p>
        </div>

        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
                acc[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var panel = this.nextElementSibling;
                    if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                    } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                    } 
                });
            }
        </script>
    </div>
        </div>    
    </div>

<?php 
    include './partition/footer.php';
?>
