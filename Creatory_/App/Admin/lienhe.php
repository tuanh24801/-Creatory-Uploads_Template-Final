<?php 
    include './partition/header.php';
?>
    <div class="container">
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <div class="row mt-5"></div>
        <h4 class="text-center"><b>Điền vào mẫu dưới đây để liên hệ với chúng tôi</b></h4>
        <form action="" method="POST" enctype="multipart/form">
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Họ tên</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "name"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Địa chỉ Email</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "email"></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Lời nhắn của bạn</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name = "comment"></textarea>
            </div>
            <input type="submit" class = "btn btn-primary" value = "Gửi đi">
        </form>
    </div>

<?php 
    include './partition/footer.php';
?>