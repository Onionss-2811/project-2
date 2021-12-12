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
                <p>DANH SÁCH CHUYÊN NGÀNH: </p>
            </div>
            <div class="tables">
                <div class="content">
                    <form method="POST" action="{{route('ListMarkSearch')}}">
                        @csrf
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>XEM THEO CÁ NHÂN:</th>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Nhập mã sinh viên:</th>
                                    <td><input type="text" name="code" required></td>
                                    <td><button class="buton btn btn-outline-success btn-sm">Search</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                    <form method="POST" action="{{route('ListMarkGradeSearch')}}">
                        @csrf
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>XEM THEO LỚP:</th>
                                    <td></td>
                                    <td></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th>Nhập tên lớp:</th>
                                    <td><input type="text" name="name" required></td>
                                    <td><button class="buton btn btn-outline-success btn-sm">Search</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
