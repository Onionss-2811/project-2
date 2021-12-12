
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
                <p>THÊM ĐIỂM: </p>
            </div>
            <div class="tables">
                <div class="content-create">
                    <div>
                        <form method="POST" action="{{route('SearchStudent')}}">
                            @csrf
                            <table class="table table-hover">
                                <thead>
                                    <tr style="font-weight: bold">THÊM THEO CÁ NHÂN:</tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Nhập mã sinh viên:</th>
                                        <td><input type="text" name="code"></td>
                                        <td><button class="buton btn btn-outline-primary btn-sm">Search</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                    <div>
                        <form method="POST" action="{{route('MarkImportFile')}}" enctype="multipart/form-data" action="">
                            @csrf
                            <table class="table table-hover">
                                <thead>
                                    <tr style="font-weight: bold">THÊM THEO DANH SÁCH:</tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th>Import Excel:</th>
                                        <td><input type="file" name="file"></td>
                                        <td><button class="buton btn btn-outline-success btn-sm">Submit</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
