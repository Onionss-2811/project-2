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
    <link rel="stylesheet" href="index.css"/>
    <title>Thông tin sinh viên</title>
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
            <div class="menu menu-home"><strong>THÔNG TIN</strong></div>
            <div class="menu nemu-introduce">HƯỚNG DẪN</div>
            <div class="menu menu-news"><a href="/list_mark/{{$students->id}}"><strong>XEM ĐIỂM</strong></a></div>
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
      <!-- infor -->
      <div class="infor">
          <div class="infor-form">
            <div class="form-header">
                <div class="logo-bk">
                    <div class="bk-img"></div>
                </div>
                <div class="name-tag">
                    <div class="no-name">
                        <span class="name-school">
                            <strong>HỌC VIỆN CNTT BÁCH KHOA (BKACAD)</strong>
                        </span>
                        <p class="tag-name">
                            <strong>THẺ SINH VIÊN</strong>
                        </p>
                    </div>
                </div>
                <div class="logo-bkacad">
                    <div class="bkacad-img"></div>
                </div>
            </div>
            <div class="form-body">
                <div class="avatar">
                    <div class="img-avatar"></div>
                </div>
                <div class="body-infor">
                    <div class="table-infor">
                        <table>
                            <tr>
                                <td class="key">Mã số:</td>
                                <td class="value">{{$students->code}}</td>
                            </tr>
                            <tr>
                                <td class="key">Họ Tên:</td>
                                <td class="value">{{$students->name}}</td>
                            </tr>
                            <tr>
                                <td class="key">Ngày Sinh:</td>
                                <td class="value">{{$students->date_birth}}</td>
                                <td class="key">Giới Tính:</td>
                                <td class="value">{{$students->name_gender}}</td>
                            </tr>
                            <tr>
                                <td class="key">Ngành:</td>
                                <td class="value">{{$students->name_majors}}</td>
                            </tr>
                            <tr>
                                <td class="key">Lớp:</td>
                                <td class="value">{{$students->name_grade}}</td>
                                <td class="key">Khóa học:</td>
                                <td class="value">{{$students->name_course}}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="form-footer">
                <div class="date-out">
                    <div>
                        <span class="text-date-out key">Có giá trị đến: </span>
                        <span class="text-date-out value">30/06/2022</span>
                    </div>
                </div>
                <div class="barcode">
                    <div class="img-barcode"></div>
                </div>
            </div>
          </div>
      </div>
    </div>
  </body>
</html>
