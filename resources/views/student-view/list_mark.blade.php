<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Xem điểm</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('index.css')}}"/>
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
            <div class="menu menu-home"><a href="/index"><strong>THÔNG TIN</strong></a></div>
            <div class="menu nemu-introduce">HƯỚNG DẪN</div>
            <div class="menu menu-news"><strong>XEM ĐIỂM</strong></div>
            <div class="menu menu-contact">LIÊN HỆ</div>
        </div>
        <!-- btn login -->
        <div class="navbar-login">
          <div class="btn-login ">
            <a href="{{route('logout')}}">
                <button class="btn btn-outline-primary">
                    Đăng Xuất
                </button>
            </a>
          </div>
        </div>
      </div>
      <table class="table table-hover" >
        <thead>
            <tr>
                <th>Code</th>
                <th>Name Grade</th>
                <th>Type Test</th>
                <th>Number of test</th>
                <th>Mark</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listMark as $listMark)
                <tr>
                    <td>{{$listMark->code}}</td>
                    <td>{{$listMark->name_subject}}</td>
                    <td>{{$listMark->name_type_test}}</td>
                    <td>{{$listMark->number_of_test}}</td>
                    <td>{{$listMark->mark}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
  </body>
</html>
