<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="containe">
        @include ('menu.menu')
        <div class="admin">
            <div class="navbar">
                <div class="logo-nav-bar"></div>
            </div>
            <div class="title">
                <p>Hướng dẫn import file excell: </p>
            </div>
            <div class="tables">
                <div class="content">
                    <h3>Hiện tại phần mềm hỗ trợ import file excell chứa 2 thông tin: </h3>
                        <p>
                            1. Import file Excel chứa thông tin học sinh.
                            <br>
                            2. Import file Excel chứa thông tin điểm.
                        </p>
                        <p>
                            Để có thể đảm bảo việc import <strong>không phát sinh lỗi</strong>, bạn vui lòng làm
                            theo và tuân thủ nội dung được viết trong phần hướng dẫn này.
                        </p>
                        <p><strong>1.</strong> Đảm bảo file excel của bạn được tạo theo bố cục.</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>a.</strong> Đối với file học sinh:</p>
                        <div class="img_instuct_student"></div>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>b.</strong> Đối với file điểm:</p>
                        <div class="img_instuct_mark"></div>

                        <p><strong>2.</strong> Về dữ liệu đầu vào</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>a.</strong>Các trường thông tin id sẽ được cung cấp tại các
                            trang tương ứng với menu bên trái</p>
                        <p>&nbsp;&nbsp;&nbsp;&nbsp;<strong>b.</strong>Trường gender: Giới tính nam = 1, Giới tính nữ = 0.
                            <br>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Trường type_test: Lý thuyết = 1, Thực hành = 2.
                        </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
