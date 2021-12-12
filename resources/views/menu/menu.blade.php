<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('admin.css')}}" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
    />
    <title>Document</title>
  </head>
  <body>
  <div class="admin-menu">
      <div class="item-menu">
        <div class="item-home">
          <div class="icon"><i class="fas fa-home fa-lg"></i></div>
          <div class="text"><a href="{{route('admin.index')}}">Trang chủ</a></div>
        </div>
        <!-- <div class="item">
            <div class="icon"><i class="fas fa fa-users fa-lg"></i></div>
            <div class="text"><a href="{{route('adminShow')}}">Admin</a></div>
          </div> -->
        <div class="item">
          <div class="icon"><i class="fas fa-user-graduate fa-lg"></i></div>
          <div class="text"><a href="{{route('student.index')}}">Sinh Viên</a></div>
        </div>
        <div class="item">
          <div class="icon"><i class="fas fa-door-open fa-lg"></i></div>
          <div class="text"><a href="{{route('grade.index')}}">Lớp</a></div>
        </div>
        <div class="item">
          <div class="icon"><i class="fas fa-bell fa-lg"></i></div>
          <div class="text"><a href="{{route('course.index')}}">Khóa</a></div>
        </div>
        <div class="item">
          <div class="icon"><i class="fab fa-audible fa-lg"></i></div>
          <div class="text"><a href="{{route('majors.index')}}">Chuyên Ngành</a></div>
        </div>
        <div class="item">
          <div class="icon"><i class="fas fa-book fa-lg"></i></div>
          <div class="text"><a href="{{route('subject.index')}}">Môn</a></div>
        </div>
        <div class="item">
          <div class="icon"><i class="fas fa-marker fa-lg"></i></div>
          <div class="text"><a href="{{route('mark.index')}}">Điểm</a></div>
        </div>
        <div class="item">
          <div class="icon"><i class="fas fa-clipboard-list fa-lg"></i></div>
          <div class="text"><a href="{{route('list_mark')}}">Danh sách điểm</a></div>
        </div>
        <div class="item">
            <div class="icon"><i class="fas fa fa-comments fa-lg"></i></div>
            <div class="text"><a href="{{route('instruct')}}">Hướng dẫn</a></div>
          </div>
      </div>
      <div class="logout">
        <div class="icon"><i class="fas fa-power-off fa-lg"></i></div>
          <div class="text"><a href="{{route('logout-admin')}}">Đăng xuất</a></div>
      </div>
  </div>
  </body>
</html>
