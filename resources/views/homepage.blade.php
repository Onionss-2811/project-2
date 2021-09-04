<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="index.css" />
    <title>Trang chủ</title>
  </head>
  <body>
    <div class="containes">
        <!-- navbar -->
      <div class="navbarr">
          <!-- logo -->
        <div class="navbar-logo">
          <div class="img"></div>
        </div>
        <!-- menu -->
        <div class="navbar-menu">
          <div class="menu menu-home"><strong>TRANG CHỦ</strong></div>
          <div class="menu nemu-introduce">GIỚI THIỆU</div>
          <div class="menu menu-news">TIN TỨC</div>
          <div class="menu menu-contact">LIÊN HỆ</div>
        </div>
        <!-- btn login -->
        <div class="navbar-login">
          <div class="btn-login ">
            <a href="{{route('login')}}">
                <button class="btn btn-outline-primary">
                    Đăng Nhập
                </button>
            </a>
          </div>
        </div>
      </div>
      <!-- banner -->
      <div class="banner">

      </div>
    </div>
  </body>
</html>
