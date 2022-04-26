<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Admin</title>
  </head>
  <body>
    <div class="container">
        <div class="row mt-5"></div>
        <h3 class="text-center mt-5"><b>vui lòng đăng nhập để vào trang quản trị Admin</b></h3>
        <h4 class="text-center mt-3"><?php 
          if(isset($_GET['inf'])){
            echo $_GET['inf'];
          }
        ?></h4>
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 justify-content-center align-items-center">
                <form class="mt-5" method="POST" action = "../Process/Admin/dangnhap.php">
                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form5Example1">Tài khoản</label>
                        <input type="text" id="form5Example1" class="form-control" name = "taikhoan"/>
                    </div>
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form5Example2">Mật khẩu</label>
                        <input type="password" id="form5Example2" class="form-control" name = "matkhau"/>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block mb-4">Đăng nhập</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>